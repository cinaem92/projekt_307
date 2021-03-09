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
	if (password != passwordRepeat) {
		$('#password').css('border-color', '#FF6666');
		$('#passwordRepeat').css('border-color', '#FF6666');
	} else {
		$('#password').css('border-color', '#66FF66');
		$('#passwordRepeat').css('border-color', '#66FF66');
	}
}