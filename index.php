<!DOCTYPE html>
<html lang="de" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="home.css">
	<title>AK20 - Steckbrief</title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149672776-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149672776-2');
</script>


<meta property="og:image" content="fb.png">
<meta name="description" content="Reiche hier deine Infos und Bilder für die 2020 Abschlusszeitung ein.">


</head>

<body>


	<section class="landingscreen">
		<div class="landingpage__center">
			<span class="landingpage__center__title">AK20 - Steckbrief</span>
			<span class="landingpage__center__title landingpage__center__title--wrapped">AK20<br>Steckbrief</span>
			<div class="landingpage__center__mail">Schicke hier deine Bilder und Daten für deinen Steckbrief in der Abschlusszeitung ab.</div>
			<button type="button" class="unten btn btn-outline-danger">Weiter nach unten</button>
		</div>
	</section>

	<section class="vote">
		<div class="wrapper">

			<div class="alert alert-success" hidden role="alert">
				Abgesendet! Stigler, falls du das liest, ich bin stolz auf dich.
			</div>

			<div class="container-vote">
				<h5 class="mb-3 font-weight-bold">Vergiss nicht am Ende auf "Absenden" zu drücken!</h5>

				<form>
					<div class="form-group">
						<label for="name">Name:</label>
						<input required name="name" maxlength="128" type="text" class="form-control" id="name" placeholder="Name">
					</div>

					<div class="form-group">
						<label for="name">Spitzname:</label>
						<input required name="spitzname" maxlength="128" type="text" class="form-control" id="spitzname" placeholder="Spitzname">
					</div>

					<div class="form-group">
						<label for="wohnort">Wohnort:</label>
						<input required name="wohnort" maxlength="128" type="text" class="form-control" id="wohnort" placeholder="Wohnort">
					</div>

					<!-- <div class="form-group">
						<label for="geburtstag">Geburtstag:</label>
						<input required name="geburtstag" maxlength="128" type="text" class="form-control" id="geburtstag" placeholder="Geburtstag">
					</div> -->
					<h6 class="mb-1">Geburtstag:</h6>
					<div class="birtday-group d-flex">
						<div class="form-group mr-2">
							<label for="tag">Tag</label>
							<select class="form-control" id="tag">
								<option>Tag</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
						</div>
						<div class="form-group mr-2">
							<label for="monat">Monat</label>
							<select class="form-control" id="monat">
								<option>Monat</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
						</div>
						<div class="form-group">
							<label for="jahr">Jahr</label>
							<select class="form-control" id="jahr">
								<option>Jahr</option>
								<option>2002</option>
								<option>2003</option>
								<option>2004</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="traumberuf">Was du nach der Schule machst:</label>
						<input required name="traumberuf" maxlength="128" type="text" class="form-control" id="traumberuf" placeholder="Traumberuf, FOS, Hartz 4...">
					</div>
					
					<div class="form-group">
						<label for="wunsch">Zukunftswünsche:</label>
						<textarea name="wunsch" maxlength="1024" required class="form-control" id="wunsch" rows="3" placeholder="Deine Wünsche"></textarea>
					</div>

					<h5 class="font-weight-bold">Eure 3 Lieblingseigenschaften. Am liebsten von dem Zettel (wo die anderen drauf geschrieben haben), aber du kannst dir auch selber was überlegen:</h5>

					<div class="form-group">
						<label for="eigenschaft1">Eigenschaft 1:</label>
						<input required name="eigenschaft1" maxlength="256" type="text" class="form-control" id="eigenschaft1" placeholder="Eine Eigenschaft von deinem Zettel">
					</div>

					<div class="form-group">
						<label for="eigenschaft2">Eigenschaft 2:</label>
						<input required name="eigenschaft2" maxlength="256" type="text" class="form-control" id="eigenschaft2" placeholder="Eine Eigenschaft von deinem Zettel">
					</div>

					<div class="form-group">
						<label for="eigenschaft3">Eigenschaft 3:</label>
						<input required name="eigenschaft3" maxlength="256" type="text" class="form-control" id="eigenschaft3" placeholder="Eine Eigenschaft von deinem Zettel">
					</div>


					<h6 class="">Kinderfoto:</h6>

					<div class="input-group mt-3 mb-2">
						<div class="custom-file">
							<input required name="kinderfoto" type="file" class="custom-file-input" id="kinderfoto">
							<label class="custom-file-label" for="kinderfoto">Wähle ein Kinderfoto aus</label>
						</div>
					</div>

					<img class="mb-4" style="display: block; width: 200px; max-width: 100%; border-radius: 5px" hidden id="kinderfoto--prev" src="#" alt="Kinderfoto">

					<h5 class="mt-4 mb-3 font-weight-bold">Das ist das Ende, vergiss jetzt also nicht auf "Absenden" zu drücken!</h5>

					<div class="error alert alert-danger mb-1" hidden role="alert">!? Stigler hat was kaputt gemacht. Send Alex nen Screenshot auf Whatsapp und versuchs nochmal.</div>
					<div class="errordetails alert alert-danger mb-3" hidden role="alert">Unbekannter Error</div>
					
					<button type="submit" class="submit-btn btn btn-danger">Absenden</button>
				</form>
			</div>
			<div>
	</section>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="home.js"></script>
</body>

</html>
