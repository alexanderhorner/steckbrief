$(document).ready(function() {

	// Submit Login
	$('form').submit(function(event) {
		event.preventDefault();

		if ($('#tag').val() == 'Tag' || $('#monat').val() == 'Monat' || $('#jahr').val() == 'Jahr') {
			$('#tag').focus();
			return
		}

		$(".submit-btn").prop("disabled", true);
		$(".error").prop("disabled", true);
		$(".submit-btn").text('Sendet...');
		$(".error").attr("hidden", true);
		$(".errordetails").attr("hidden", true);

		// prepare form Data
		// text
		var form = $('form')[0];
		var formData = new FormData(form);

		// Birthday 
		var geburtstag = $('#tag').val() + "." + $('#monat').val() + "." + $('#jahr').val();
		formData.append('geburtstag', geburtstag);

		// Img
		var image2 = $('#kinderfoto').prop('files')[0];
		formData.append('file', image2);

		// Verify data
		$.ajax({
			type: 'POST',
			url: 'send.php',
			processData: false,
    	contentType: false,
			dataType: 'json',
			timeout: 30000,
			data: formData,
			success: function(data) {
				if (data.status == 'successful') {
					$(".container-vote").remove();
					$(".alert-success").attr("hidden", false);
				} else {
					$(".error").attr("hidden", false);
					$(".errordetails").attr("hidden", false);
					$(".errordetails").text("Error: " + data.error.category + ": " + data.error.description);
					$(".submit-btn").prop("disabled",false);
					$(".submit-btn").text('Absenden');
					$("html, body").animate({ scrollTop: $(document).height() }, 400);
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				$(".error").attr("hidden", false);
				$(".errordetails").attr("hidden", false);
				$(".errordetails").text("Error: " + textStatus + ", " + errorThrown);
				$(".submit-btn").prop("disabled", false);
				$(".submit-btn").text('Absenden');
				$("html, body").animate({ scrollTop: $(document).height() }, 400);
			}
		});
	});


});

// Live image preview
function readURL2(input) {
	if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
					$('#kinderfoto--prev').removeAttr('hidden');
					$('#kinderfoto--prev').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
	}
}
$("#kinderfoto").change(function(){
	readURL2(this);
});
//


$(".unten").click(function() {
		$([document.documentElement, document.body]).animate({
				scrollTop: $(".vote").offset().top
		}, 500);
});
