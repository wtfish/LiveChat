// $(function () {

// 	$('#login-form-link').click(function (e) {
// 		$("#register-form").fadeOut(200);
// 		$("#login-form").delay(200).fadeIn(200);
		
// 		// $("#register-form").removeClass("d-none");
// 		e.preventDefault();
// 	});
// 	$('#register-form-link').click(function (e) {
// 		$("#login-form").fadeOut(100);
// 		$("#register-form").delay(200).fadeIn(200);
		
// 		$("#register-form").removeClass("d-none");
// 		e.preventDefault();
// 	});

// });
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form').removeClass("d-none");
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		 $("#register-form").removeClass("d-none");
		e.preventDefault();
	});

});
function myFunction() {
	var x = document.getElementById("input_password");
	if (x.type === "password") {
	  x.type = "text";
	} else {
	  x.type = "password";
	}
  }


