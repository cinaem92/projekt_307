<?php



if (!empty($_POST)) {

    $data = $_POST;
    $isValid = true;

    $data['dogname'] = htmlspecialchars($data['dogname']);
    $data['actualAddress'] = htmlspecialchars($data['actualAddress']);
    $data['plz'] = htmlspecialchars($data['plz']);
    $data['city'] = htmlspecialchars($data['city']);
    $data['dogRace'] = htmlspecialchars($data['dogRace']);
    $data['dogGender'] = htmlspecialchars($data['dogGender']);
    $data['dogAge'] = htmlspecialchars($data['dogAge']);
    

    // Hundename überprüfen
    if (strlen($data['dogname']) < 3) {
        echo "Der Vorname ist zu Kurz";
        $isValid = false;
    }


    // Adresse überprüfen
    if (strlen($data['actualAddress']) < 3) {
        echo "Die Adresse ist zu Kurz";
        $isValid = false;
    }

    // PLZ überprüfen
    if (strlen($data['plz']) != 4) {
        echo "Die PLZ ist nicht 4 Zeichen lang";
        $isValid = false;
    }

    // Stadt überprüfen
    if (strlen($data['city']) < 3) {
        echo "Der Name der Stadt ist zu Kurz";
        $isValid = false;
    }

    // Hunderasse überprüfen
    if (strlen($data['dogRace']) < 3) {
        echo "Es gibt keine Rasse die kürzer als 3 Zeichen ist.";
        $isValid = false;
    }

    // Geschlecht überprüfen
    if (strlen($data['dogGender']) < 3) {
        echo "Bitte mindestens 3 Zeichen für das Geschlecht eingeben";
        $isValid = false;
    }

    // Hundealter überprüfen
    if (strlen($data['dogAge']) < 1) {
        echo "Bitte Hundealter eingeben";
        $isValid = false;
    }


    if ($isValid) {
        $_SESSION['data'] = $data;
        //daten in die Datenbank abspitzen
        insertValuesCity();
        insertValuesDog();
        
        header("Location: loginuebersicht");
    }
} else {
    echo "Das Formular wurde nicht korrekt ausgefüllt!";
}



    //Speichern der Session
