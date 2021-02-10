<?php 
header('Content-type: application/json');

// Set up all response parameters
$response = array();
$response['status'] = 'failed';
$response['error'] = array();
$response['error']['category'] = 'Unknown';
$response['error']['description'] = 'An unknown error has occured';

// Check Permissions
// no perm required 

// Set up all input parameters
// $UID = UID
if (
	isset($_POST['name']) &&
	isset($_POST['spitzname']) &&
	isset($_POST['wohnort']) &&
	isset($_POST['geburtstag']) &&
	isset($_POST['traumberuf']) &&
	isset($_POST['wunsch']) &&
	isset($_POST['eigenschaft1']) &&
	isset($_POST['eigenschaft2']) &&
	isset($_POST['eigenschaft3']) &&
	isset($_FILES['kinderfoto'])
) {
	$name = trim($_POST['name']);
	$spitzname = trim($_POST['spitzname']);
	$wohnort = trim($_POST['wohnort']);
	$geburtstag = trim($_POST['geburtstag']);
	$traumberuf = trim($_POST['traumberuf']);
	$wunsch = trim($_POST['wunsch']);
	$eigenschaft1 = trim($_POST['eigenschaft1']);
	$eigenschaft2 = trim($_POST['eigenschaft2']);
	$eigenschaft3 = trim($_POST['eigenschaft3']);
	$kinderfoto = $_FILES['kinderfoto'];
} else {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = 'One or more parameter are missing';
	goto end;
}

// Check Parameters
if (mb_strlen($name, 'UTF-8') <= 0 || mb_strlen($name, 'UTF-8') > 128) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'name' is wrong";
	goto end;
}
if (mb_strlen($spitzname, 'UTF-8') > 128) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'spitzname' is wrong";
	goto end;
}
if (mb_strlen($wohnort, 'UTF-8') <= 0 || mb_strlen($wohnort, 'UTF-8') > 128) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'wohnort' is wrong";
	goto end;
}
if (mb_strlen($geburtstag, 'UTF-8') <= 0 || mb_strlen($geburtstag, 'UTF-8') > 128) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'geburtstag' is wrong";
	goto end;
}
if (mb_strlen($traumberuf, 'UTF-8') <= 0 || mb_strlen($traumberuf, 'UTF-8') > 128) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'traumberuf' is wrong";
	goto end;
}
if (mb_strlen($wunsch, 'UTF-8') <= 0 || mb_strlen($wunsch, 'UTF-8') > 1024) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'wunsch' is wrong";
	goto end;
}
if (mb_strlen($eigenschaft1, 'UTF-8') <= 0 || mb_strlen($eigenschaft1, 'UTF-8') > 1024) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'eigenschaft1' is wrong";
	goto end;
}
if (mb_strlen($eigenschaft2, 'UTF-8') <= 0 || mb_strlen($eigenschaft2, 'UTF-8') > 1024) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'eigenschaft2' is wrong";
	goto end;
}
if (mb_strlen($eigenschaft3, 'UTF-8') <= 0 || mb_strlen($eigenschaft3, 'UTF-8') > 1024) {
	$response['error']['category'] = 'Parameter error';
	$response['error']['description'] = "The parameter 'eigenschaft3' is wrong";
	goto end;
}
if ($kinderfoto['size'] > 32000000) {
	$response['error']['category'] = 'File error';
	$response['error']['description'] = "The file 'kinderfoto' is too big";
	goto end;
}

// Request
// Connenct to database
include 'mysqlcredentials.php';

// Check connection
if ($pdo === false) {
	$response['error']['category'] = 'MySQL error';
	$response['error']['description'] = 'Could not connect to database';
	goto end;
} else {

	// Update database
	// prepare statement
	$statement = $pdo->prepare("INSERT INTO `einsendungen`(`name`, `spitzname`, `wohnort`, `geburtstag`, `traumberuf`, `wunsch`, `eigenschaft1`, `eigenschaft2`, `eigenschaft3`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

	// execute statement
	$statement->execute(array($name, $spitzname, $wohnort, $geburtstag, $traumberuf, $wunsch, $eigenschaft1, $eigenschaft2, $eigenschaft3));

	// check response from statement
	if($statement->errorCode() != 0) {
		$stmntError = $statement->errorInfo();
		$response['error']['category'] = 'MySQL error';
		$response['error']['description'] = $stmntError[2];
		goto end;
	} else {

		// Check how many rows were affected
		if ($statement->rowCount() <= 0) {
			$response['error']['category'] = 'MySQL error';
			$response['error']['description'] = 'Failed to save into database';
			goto end;
		} else {
			// save picture
			$saveDirectory = 'bilder/';

			// check how many files are in that folder
			$files = new FilesystemIterator($saveDirectory, FilesystemIterator::SKIP_DOTS);
			$filecount1 = sprintf("%05d", iterator_count($files));
			$filecount2 = sprintf("%05d", $filecount1 + 1);

			// Target filenam
			$clean_name = preg_replace("/[^a-zA-Z0-9]/", "", str_replace(' ', '-', $name));
			$kinderfoto_extension = pathinfo($kinderfoto['name'], PATHINFO_EXTENSION);
			$kinderfoto_filename = $filecount2."-".$clean_name.'-kinderfoto.'.$kinderfoto_extension;
			$kinderfoto_target_file = $saveDirectory.'/'.$kinderfoto_filename;

			// move
			move_uploaded_file($kinderfoto['tmp_name'], $kinderfoto_target_file);

			$response['status'] = 'successful';
			unset($response['error']);
		}
	}
}

// Finish request
end:
echo json_encode($response, JSON_PRETTY_PRINT);

?>