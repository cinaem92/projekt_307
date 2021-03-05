<?php 

// Um Session zu speichern:
// Variable Session neu definieren und Daten via $_Post von Select holen (erfolgreich.php)
$_SESSION['dogs'] = $_POST['selectedDog'];

if(!empty($_SESSION)) {

	//herausholen der Daten
	$data = $_POST;

	//Prüfvariable
	$invalid = false;

	//Überprüfen ob name grösser als 40 oder kleiner als 5 ist
	if(strlen($data['username']) > 20 || strlen($data['username']) < 3) {
		echo 'Benutzername muss zwischen 3 und 20 Zeichen lang sein!<br/>';
		$invalid = true;
	} 

	//Email regex für eine Valide Emailadresse
	if(!preg_match('/^(\w{2,}|\w{2,}[\.\-]\w{2,})@(\w{2,}\.\w{2,}|\w{2,}[\.\-]\w{2,}\.\w{2,})$/', $data['email'])) {
		echo 'Email ist ungueltig!<br/>';
		$invalid = true;
	}

	//Überprüfen ob Kommentar nicht zu gross
	if(strlen($data['question']) > 2000) {
		echo 'Kommentar zu gross, fassen Sie sich kuerzer!';
		$invalid = true;
	}

	//überprüfen ob alles richtig
	if(!$invalid) {
		//Speichern der Daten in Session
		$_SESSION['dogs'] = $data;

		//Weiterleitung zum insert-File
		// header("Location: insert");
	}

} else {
	//Hinweis
	echo 'Fuellen Sie bitte zuerst das <a href="anfrage">Formular</a> aus!<br/>';
    session_destroy();
}

?>


<!-- HTML -->
<link rel="stylesheet" href="./css/myBootstrap.css">

<h1 id="header_h1">Daten erfolgreich übermittelt.</h1>
<div class="fliesstext">
    <h2>Danke für die Eingabe folgender Daten:</h2>
    <br>

    <div class="row">
        <div class="col-7">
            <p><strong>Betroffener Hund:</strong></p>
        </div>
        <div class="col">
            <p><?php echo $_POST['selectedDog']; ?></p>
        </div>

    </div>
    <div class="row">
        <div class="col-7">
            <p><strong>Deine Frage:</strong></p>
        </div>
        <div class="col">
            <p> <?php echo $_POST['question']; ?> </p>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <p><strong>Dein Benutzername:</strong> </p>
        </div>
        <div class="col">
            <p><?php echo $_POST['username']; ?> </p>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <p><strong>Deine E-Mail-Adresse:</strong></p>
        </div>
        <div class="col">
            <p><?php echo $_POST['email']; ?> </p>
        </div>
    </div>
<br>
<br>
</div>