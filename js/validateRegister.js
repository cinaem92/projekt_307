//JavaScript Input-Validierung
function validate() {
	checkUsername();
	checkPassword();
	checkName();
	checkLastname();
	checkAddress();
	checkPlz();
	checkCity();
	checkMail();
	checkPhone();
}


//Input Username
function checkUsername() {
	var inputUsername = /^.{3,}$/;
	var username = document.getElementById('username').value;
	if (inputUsername.test(username)) {
		$('#username').css('border-color', '#66FF66');
		return true;
	} else {
		$('#username').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
		return false;
	}
}

//Input Password
function checkPassword() {
	var inputPassword = /^[a-zA-Z]\w{3,14}$/;
	//REGEX muss noch eingebaut werden
	var password = document.getElementById('password').value;
	var passwordRepeat = document.getElementById('passwordRepeat').value;
	// if (password != passwordRepeat) {
	if (password != passwordRepeat && (!inputPassword.test(password)) && (!inputPassword.test(passwordRepeat))) {
		$('#password').css('border-color', '#FF6666');
		$('#passwordRepeat').css('border-color', '#FF6666');
	} else {
		$('#password').css('border-color', '#66FF66');
		$('#passwordRepeat').css('border-color', '#66FF66');
	}
}

//Input Name
function checkName() {
	var inputName = /^.{3,}$/;
	var name = document.getElementById('name').value;
	if (inputName.test(name)) {
		$('#name').css('border-color', '#66FF66');
	} else {
		$('#name').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}

//Input Lastname
function checkLastname() {
	var inputLastname = /^.{3,}$/;
	var lastname = document.getElementById('lastname').value;
	if (inputLastname.test(lastname)) {
		$('#lastname').css('border-color', '#66FF66');
	} else {
		$('#lastname').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}

//Input Address
function checkAddress() {
	var inputAdress = /^.{3,}$/;
	var address = document.getElementById('address').value;
	if (inputAdress.test(address)) {
		$('#address').css('border-color', '#66FF66');
	} else {
		$('#address').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}

//Input PLZ
function checkPlz() {
	var inputPlz = /^[0-9]{4}$/;
	var plz = document.getElementById('plz').value;
	if (inputPlz.test(plz)) {
		$('#plz').css('border-color', '#66FF66');
	} else {
		$('#plz').css('border-color', '#FF6666');
		// alert("You have entered an invalid username!");
	}
}

//Input City
function checkCity() {
	var inputCity = /^.{3,}$/;
	var city = document.getElementById('city').value;
	if (inputCity.test(city)) {
		$('#city').css('border-color', '#66FF66');
	} else {
		$('#city').css('border-color', '#FF6666');
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