//Email Validierungs-Skript

$('input[type="text"').on('input', function () {
	var textPattern = /^.{3,}$/;
	if (textPattern.test($(this).val())) {
		$(this).css('border-color', '#66FF66')
	} else {
		$(this).css('border-color', '#FF6666');
	}
});

$('input[type="email"').on('input', function () {
	var mailPattern = /^(\w+|\w+[\.\-]\w+)@(\w+|\w+[\.\-]\w+)\.\w{2,}$/;
	if (mailPattern.test($(this).val())) {
		$(this).css('border-color', '#66FF66')
	} else {
		$(this).css('border-color', '#FF6666');
	}
});

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

//Input Text
function checkUsername() {
	var inputText = /^.{3,}$/;
	if (inputText.test($('inputText[type="text"]').val())) {
		$(this).css('border-color', '#66FF66');
	} else {
		$(this).css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}

//Input Passwort
function checkPassword() {
	var inputPassword = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()])(?=\\S+$).{8, 20}$/;
	var password = document.getElementById("password");
	// if (inputPassword.test($('input[type="password"]').val())) {
	// 	$(this).css('border-color', '#66FF66');
	// } else {
	// 	$(this).css('border-color', '#FF6666');
	// alert("You have entered an invalid username!");

	if (password.match(inputPassword)) {
		$(this).css('border-color', '#66FF66');
	} else {
		$(this).css('border-color', '#FF6666');
	}
}

//Input E-Mail
function checkMail() {
	var inputEmail = /^(\w+|\w+[\.\-]\w+)@(\w+|\w+[\.\-]\w+)\.\w{2,}$/;
	if (inputEmail.test($('inputEmail[type="email"]').val())) {
		$(this).css('border-color', '#66FF66');
	} else {
		$(this).css('border-color', '#FF6666');
		// alert("You have entered an invalid email address!");
	}
}


//Input Text
function checkPhone() {
	var inputPhone = /^[0-9]*$/;
	var tel = document.getElementById("telephone").value;
	if (tel.match('inputPhone').val()) {
		$(this).css('border-color', '#66FF66');
	} else {
		$(this).css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}