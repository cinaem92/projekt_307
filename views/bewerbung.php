<h1 id="header_h1">Hundevermittlung vereint</h1>
<div class="fliesstext">
    <h2>Bewerbungsformular</h2>
    <!-- <h3>Möchten Sie sich mit %DogName% Kontakt aufnehmen?</h3> -->
    <p>Vervollständigen Sie die untenstehenden Angaben:</p>
    <form name="bewerbung" action="mailto:info@vermittlungvereint.ch" method="post" onchange="validate()">
        <div class="grid-formular">

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
                <input type="number" name="plz" id="plz" class="inputs">
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
            

            <!--Select-->
            <div class="labels">
                <label>Wie bist du auf "Vermittlungshilfe vereint" gestossen?</label>
            </div>

            <div class="selects">
                <select class="inputs" name="selected" id="selected">
                    <option value="1">-</option>
                    <option value="Freunde">Freunde</option>
                    <option value="Verwandte">Verwandte</option>
                    <option value="Internet">Internet</option>
                    <option value="Tierheim">Tierheim/Tierschutz</option>
                    <option value="Andere">Andere</option>
                </select>
            </div>
            <!--Send-Button-->
            <div class="sendButton">
                <input type="submit" value="Bewerben">
            </div>

        </div>
    </form>
</div>

<script src="./js/validateapplication.js"></script>