//Email Validierungs-Skript

// $('input[type="text"').on('input', function () {
// 	var textPattern = /^.{3,}$/;
// 	if (textPattern.test($(this).val())) {
// 		$(this).css('border-color', '#66FF66')
// 	} else {
// 		$(this).css('border-color', '#FF6666');
// 	}
// });

// $('input[type="email"').on('input', function () {
// 	var mailPattern = /^(\w+|\w+[\.\-]\w+)@(\w+|\w+[\.\-]\w+)\.\w{2,}$/;
// 	if (mailPattern.test($(this).val())) {
// 		$(this).css('border-color', '#66FF66')
// 	} else {
// 		$(this).css('border-color', '#FF6666');
// 	}
// });

$('textarea').click(function () {
	var Max_Length = 20;
	var length = document.getElementById("question").value.length;
	if (length < Max_Length) {
		$(this).css('border-color', '#66FF66')
	} else {
		$(this).css('border-color', '#FF6666');
	}

});

$('input[type="submit"]').click(function () {
	if (checkUsername() && checkPassword() && checkMail() && SelectHasValue() && checkPhone()) {
		$('form').submit();
	} else {
		// alert("Überprüfen Sie Ihre Angaben!");
		// $('form').submit(function (e) {
		// 	e.preventDefault();
		// });
		$('form').submit();

	}
});


//JavaScript Input-Validierung

function validate() {
	checkUsername();
	checkPassword();
	checkMail();
	checkPhone();
}


//Input Text
function checkUsername() {
	var inputUsername = /^.{3,}$/;
	var username = document.getElementById('username').value;
	if (inputUsername.test(username)) {
		$('#username').css('border-color', '#66FF66');
	} else {
		$('#username').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}


//Input Text
function checkPassword() {
	var inputPassword = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()])(?=\\S+$).{8, 20}$/;
	var password = document.getElementById('password').value;
	var passwordRepeat = password = document.getElementById('passwordRepeat').value;
	console.log(password);

	if (inputPassword.test(password) && inputPassword.test(passwordRepeat)) {
		$('#password').css('border-color', '#66FF66');
		$('#passwordRepeat').css('border-color', '#66FF66');

	} else {
		$('#password').css('border-color', '#FF6666');
		$('#passwordRepeat').css('border-color', '#FF6666');
	}
}


//Input E-Mail
function checkMail() {
	var inputEmail = /^(\w+|\w+[\.\-]\w+)@(\w+|\w+[\.\-]\w+)\.\w{2,}$/;
	var email = document.getElementById('email').value;
	if (inputEmail.test(email)) {
		$('#email').css('border-color', '#66FF66');
	} else {
		$('#email').css('border-color', '#FF6666');
		// alert("You have entered an invalid email address!");
	}
}


//Input Text
function checkPhone() {
	var inputPhone = /^\+[0-9]{11}$/;
	var tel = document.getElementById('telephone').value;

	if (inputPhone.test(tel)) {
		$('#telephone').css('border-color', '#66FF66');
	} else {
		$('#telephone').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}