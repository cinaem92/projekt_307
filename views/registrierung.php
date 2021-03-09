<h1 id="header_h1">Hundevermittlung vereint</h1>
<div class="fliesstext">
    <h2>Registrierung</h2>
    <br>
    <form action="validateregdata" method="post" onchange="return validate()">
        <div class="grid-formular">

            <!--General Informations-->
            <!--Benutzername-->
            <div class="labels">
                <label>Benutzername</label>
            </div>
            <div>
                <input type="text" name="username" id="username" class="inputs" placeholder="" required>
            </div>
            <!--Passwort-->
            <div class="labels">
                <label>Passwort</label>
            </div>
            <div>
                <input type="password" name="password" id="password" class="inputs" placeholder="" required>
            </div>
            <!--Passwort wiederholen-->
            <div class="labels">
                <label>Passwort wiederholen</label>
            </div>
            <div>
                <input type="password" name="passwordRepeat" id="passwordRepeat" class="inputs" placeholder="" required>
            </div>
            <!--Vorname-->
            <div class="labels">
                <label>Vorname</label>
            </div>
            <div>
                <input type="text" name="name" id="name" class="inputs" placeholder="" minlength="3">
            </div>
            <!--Name-->
            <div class="labels">
                <label>Name</label>
            </div>
            <div>
                <input type="text" name="lastname" id="lastname" class="inputs" placeholder="" minlength="3">
            </div>
            <!--Adresse-->
            <div class="labels">
                <label>Adresse</label>
            </div>
            <div>
                <input type="text" name="address" id="address" class="inputs" placeholder="" minlength="3">
            </div>
            <!--PLZ / Ort-->
            <div class="labels">
                <label>PLZ</label>
            </div>
            <div>
                <input type="text" name="plz" id="plz" class="inputs" placeholder="" minlength="4" maxlength="4">
            </div>
            <div class="labels">
                <label>Ort</label>
            </div>
            <div>
                <input type="text" name="city" id="city" class="inputs" placeholder="" minlength="3">
            </div>
            <!--Telefonnummer-->
            <div class="labels">
                <label>Telefonnummer</label>
            </div>
            <div>
                <input type="text" name="telephone" id="telephone" class="inputs" placeholder="" minlength="3">
            </div>
            <!--E-Mail-->
            <div class="labels">
                <label>E-Mail</label>
            </div>
            <div>
                <input type="email" name="email" id="email" class="inputs" placeholder="" required>
            </div>
            <!--Send-Button-->
            <div class="sendButton">
                <input type="submit" value="Registrieren">
            </div>

        </div>
    </form>
</div>


<script src="./js/validateRegister.js"></script>