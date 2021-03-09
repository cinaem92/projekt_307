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


//Input Username
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

//Input Password
function checkPassword() {
	var inputPassword = /^[a-zA-Z]\w{3,14}$/;
	var password = document.getElementById('password').value;
	var passwordRepeat = password = document.getElementById('passwordRepeat').value;

	if (inputPassword.test(password) && inputPassword.test(passwordRepeat)) {
		$('#password').css('border-color', '#66FF66');
		$('#passwordRepeat').css('border-color', '#66FF66');

	} else {
		$('#password').css('border-color', '#FF6666');
		$('#passwordRepeat').css('border-color', '#FF6666');
	}
}

//Input Username
function checkName() {
	var inputUsername = /^.{3,}$/;
	var username = document.getElementById('name').value;
	if (inputUsername.test(username)) {
		$('#name').css('border-color', '#66FF66');
	} else {
		$('#name').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}

//Input Username
function checkLastname() {
	var inputUsername = /^.{3,}$/;
	var username = document.getElementById('lastname').value;
	if (inputUsername.test(username)) {
		$('#lastname').css('border-color', '#66FF66');
	} else {
		$('#lastname').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}


//Input Telephone
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

