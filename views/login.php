<h1 id="header_h1">Hundevermittlung vereint</h1>
<h2>Login</h2>
<div>
    <p>Sind Sie bereits registrierter Benutzer und möchten einen neuen
        Hund als Vermittlungshund erfassen, loggen Sie sich bitte hier ein.</p>
</div>
<form action="validatelogindata" method="post">
    <div class="grid-formular">

        <!--General Informations-->
        <div class="row">
            <div class="col">
                <div class="labels">
                    <label>Benutzername</label>
                </div>
            </div>
            <div class="col">
                <input type="text" name="username" id="username" class="inputs" placeholder="" minlength="3">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="labels">
                    <label>Passwort</label>
                </div>
            </div>
            <div class="col">
                <input type="password" name="password" id="password" class="inputs" placeholder="" minlength="3">
            </div>
        </div>


        <!--Send-Button-->
        <div class="row">
            <div class="col">
                <div class="sendButton">
                    <input type="submit" name="submitlogin" value="Login">
                </div>
            </div>
        </div>
    </div>
</form>


<div class="row">
    <div class="col-mt-5">
        <p>Besitzen Sie noch kein Login? Registrieren Sie sich</p>
    </div>
    <div class="row">
        <div class="col-mt-5">
            <a href="registration">Jetzt registrieren</a>
        </div>
    </div>
    <div class="row">
        <div class="col-mt-5">
            <p>Gibt es Schwierigkeiten mit Ihrem Login?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-mt-5">
            <a href="kontaktformular">Kontaktieren Sie uns</a>
        </div>
    </div>
</div>