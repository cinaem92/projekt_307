<h1 id="header_h1">Hundevermittlung vereint</h1>
<div class="fliesstext">
    <h2>Registrierung</h2>
    <br>
    <form action="validateRegister" method="post" onchange="return validate()">
        <div class="grid-formular">

            <!--General Informations-->
            <div class="labels">
                <label>Benutzername</label>
            </div>
            <div>
                <input type="text" name="username" class="inputs" placeholder="" required>
            </div>
            <div class="labels">
                <label>Passwort</label>
            </div>
            <div>
                <input type="password" name="password" id="password" class="inputs" placeholder="" required>
            </div>
            <div class="labels">
                <label>Passwort wiederholen</label>
            </div>
            <div>
                <input type="password" name="passwordRepeat" id="passwordRepeat" class="inputs" placeholder="" required>
            </div>
            <div class="labels">
                <label>Vorname</label>
            </div>
            <div>
                <input type="text" name="name" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>Name</label>
            </div>
            <div>
                <input type="text" name="lastname" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>Adresse</label>
            </div>
            <div>
                <input type="text" name="address" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>PLZ / Ort</label>
            </div>
            <div>
                <input type="text" name="city" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>Telefonnummer</label>
            </div>
            <div>
                <input type="number" id="telephone" name="telephone" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>E-Mail</label>
            </div>
            <div>
                <input type="email" name="email" class="inputs" placeholder="" required>
            </div>
            
            
            <!--Send-Button-->
            <div class="sendButton">
                <input type="submit" value="Registrieren">
            </div>

        </div>
    </form>
</div>


<script src="./js/validateRegister.js"></script>