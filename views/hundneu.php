<h1 id="header_h1">Neuen Hund erfassen</h1>
<div class="fliesstext">
    <h2>Geben Sie hier die Daten ein</h2>
    <br>
    <form action="#" method="post" onchange="">
        <div class="grid-formular">

            <!--General Informations-->
            <div class="labels">
                <label>Name des Hundes</label>
            </div>
            <div>
                <input type="text" name="dogname" id="dogname" class="inputs" placeholder="" required>
            </div>
            <div class="labels">
                <label>Aktuelle Adresse</label>
            </div>
            <div>
                <input type="text" name="actualAddress" id="actualAddress" class="inputs" placeholder="" required>
            </div>
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
            <div class="labels">
                <label>Hunderasse</label>
            </div>
            <div>
                <input type="text" name="dogRace" id="dogRace" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>Geschlecht</label>
            </div>
            <div>
                <input type="text" name="dogGender" id="dogGender" class="inputs" placeholder="" minlength="3">
            </div>
            <div class="labels">
                <label>Alter</label>
            </div>
            <div>
                <input type="text" name="dogAge" id="dogAge" class="inputs" placeholder="" minlength="3">
            </div>


            <!--Send-Button-->
            <div class="sendButton">
                <input type="submit" value="Erfassen">
            </div>

        </div>
    </form>
</div>