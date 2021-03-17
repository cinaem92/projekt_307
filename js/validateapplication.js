//JavaScript Input-Validierung
function validate() {
	checkName();
	checkLastname();
	checkAddress();
	checkPlz();
	checkCity();
	checkMail();
	checkPhone();
	SelectHasValue();
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


function SelectHasValue() {
	var select = document.bewerbung.selected.selectedIndex;
	if (select == "") {
		var element = document.getElementById("selected");
		element.style.borderColor = '#FF6666';
		return false;
	} else {
		var element = document.getElementById("selected");
		var selectedText = element.options[element.selectedIndex].text;
		element.style.borderColor = '#66FF66';
		return true;
	}
}