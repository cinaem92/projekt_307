<h1 id="header_h1">Hundevermittlung vereint</h1>
<div class="fliesstext">
    <h2>Login</h2>
    <br>
    <div>
        <p>Sind Sie bereits registrierter Benutzer und möchten einen neuen
            Hund als Vermittlungshund erfassen, loggen Sie sich bitte hier ein.</p>


        <p>Besitzen Sie noch kein Login? Registrieren Sie sich</p>

        <p><a href="registration">Jetzt registrieren</a></p>

        <p>Gibt es Schwierigkeiten mit Ihrem Login?</p>

        <p><a href="kontaktformular">Kontaktieren Sie uns</a></p>

    

        <form action="validatelogindata" method="post" onchange="return validate()">
            <div class="grid-formular">

                <!-- General Informations -->
        <div class="row mt-5">
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


        <!-- Send-Button -->
        <div class="row">
            <div class="col">
                <div class="sendButton">
                    <input type="submit" name="submitlogin" value="Login">
                </div>
            </div>
        </div>
    </div>

                <!-- <div class="labels">
                    <label>Benutzername</label>
                </div>
                <div>
                    <input type="text" name="username" id="username" class="inputs" placeholder="" required>
                </div>
                <br>
                <div class="labels">
                    <label>Passwort</label>
                </div>

                <div>
                    <input type="password" name="password" id="password" class="inputs" placeholder="" required>
                </div>

                <div class="sendButton">
                    <input type="submit" name="submitLogin" value="Login">
                </div>
            </div> -->



        </form>
    </div>

    <script src="./js/validatelogin.js"></script>