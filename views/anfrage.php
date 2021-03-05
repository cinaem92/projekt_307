<h1 id="header_h1">Hast du eine Frage?</h1>
<div class="fliesstext">
    <h2>Frag uns!</h2>
    <br>
    <form name="anfrage" action="erfolgreich" method="post" onchange="return SelectHasValue()">
        <div class="grid-formular">

            <!--Select-->
            <div class="labels">
                <label>Betroffener Hund</label>
            </div>
            <div class="selects">
                <select class="inputs" name="selectedDog" id="selectedDog" name="selectedDog">
                    <option value="Wählen Sie einen Hund aus">Wählen Sie einen Hund aus</option>
                    <option value="Aiko">Aiko</option>
                    <option value="Bella">Bella</option>
                    <option value="Blacky">Blacky</option>
                    <option value="Fanny">Fanny</option>
                    <option value="Maximus">Maximus</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Thomy">Thomy</option>
                </select>
            </div>
            
            <!-- Text Area for Question -->
            <div class="labels">
                <label>Deine Frage</label>
            </div>
            <div>
                <textarea name="question" id="question" class="inputs" cols="30" rows="10"></textarea>
            </div>
          
            <!--General User Informations-->
            <div class="labels">
                <label>Dein Benutzername:</label>
            </div>
            <div>
                <input type="text" name="username" class="inputs" placeholder="" minlength="3" maxlength="20">
            </div>
            <div class="labels">
                <label>Deine E-Mail-Adresse</label>
            </div>
            <div>
                <input type="email" name="email" class="inputs" placeholder="" required>
            </div>

            <!--Send-Button-->
            <div class="sendButton">
                <input type="submit" name="senden" value="Senden">
            </div>

        </div>
    </form>
</div>

<script src="./js/validateContact.js"></script>