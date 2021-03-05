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
	if (checkMail() && checkUsername() && checkTextArea() && SelectHasValue()) {
		$('form').submit();
	} else {
		alert("Überprüfen Sie Ihre Angaben!");
		$('form').submit(function (e) {
			e.preventDefault();
		});
	}
});


//E-Mail-Eingabe prüfen
function checkMail() {
	var mailPattern = /^(\w+|\w+[\.\-]\w+)@(\w+|\w+[\.\-]\w+)\.\w{2,}$/;
	if (mailPattern.test($('input[type="email"]').val())) {
		$(this).css('border-color', '#66FF66');
	} else {
		$(this).css('border-color', '#FF6666');
		alert("You have entered an invalid email address!");
	}
}

//Benutzername-Eingabe prüfen
function checkUsername() {
	var usernamePattern = /^.{3,}$/;
	if (usernamePattern.test($('input[type="text"]').val())) {
		$(this).css('border-color', '#66FF66');
	} else {
		$(this).css('border-color', '#FF6666');
		alert("You have entered an invalid username!");
	}
}

//Benutzername-Eingabe prüfen
function checkTextArea() {
	var Max_Length = 20;
	var length = document.getElementById("question").value.length;
	if (length > Max_Length) {
		var questionField = document.getElementById("question");
		questionField.parentNode.innerHTML = questionField.parentNode.innerHTML +
			"<p style='color:red'>the max length of " + Max_Length +
			" characters is reached, you typed in  " + length + "characters</p>";
	}
}

function SelectHasValue() {
    var selected = document.getElementById("selectedDog");
    if (selected !== null) {
		$(this).css('border-color', '#66FF66');
	} else {
		$(this).css('border-color', '#FF6666');
		alert("You need to choose a dog!");
    }
}


function SelectHasValue() {
	var select = document.anfrage.selectedDog.selectedIndex;
    if (select == "") {
        var element = document.getElementById("selectedDog");
        element.style.borderColor = '#FF6666';
        return false;
    } else {
        var element = document.getElementById("selectedDog");
        var selectedText = element.options[element.selectedIndex].text;
        element.style.borderColor = '#66FF66';
        return true;
    }
}