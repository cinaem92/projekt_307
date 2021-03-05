
<?php

// $name = $_POST['name'];
 
// if(!isset($name) OR empty($name)) {
//    $name = "Gast";
// }
 
// //Session registrieren
// $_SESSION['username'] = $name;
 
// //Text ausgeben
// echo "Hallo $name <br />
// <a href=\"seite2.php\">Seite 2</a><br />
// <a href=\"logout.php\">Logout</a>";
// ?>


<h1 id="header_h1">Hundevermittlung vereint</h1>
<div class="fliesstext">
    <h2>Login</h2>
    <p>Sind Sie bereits registrierter Benutzer und  möchten einen neuen
    Hund als Vermittlungshund erfassen, loggen Sie sich bitte hier ein.</p>
    <form action="validateLogin" method="post" enctype="text/plain">
        <div class="grid-formular">

            <!--General Informations-->
            
            <div class="labels">
                <label>Benutzername</label>
            </div>
            <div>
                <input type="text" name="username" id="username" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>Passwort</label>
            </div>
            <div>
                <input type="password" name="password" id="password" class="inputs" placeholder="" minlength="3">
            </div>
            
           
           
            <!--Send-Button-->
            <div class="sendButton">
                <input type="submit" value="Login">
            </div>
            <br>
            <br>
            <br>
            <p>Besitzen Sie noch kein Login? Registrieren Sie sich</p>
            <a href="registration">Jetzt registrieren</a>
            <br>
            <br>
            <p>Gibt es Schwierigkeiten mit Ihrem Login?</p>
            <a href="kontaktformular">Kontaktieren Sie uns</a>

        </div>
    </form>
</div>