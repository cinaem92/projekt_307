<?php



if (!empty($_POST)) {

    $data = $_POST;
    $isValid = true;

    var_dump($data);


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
    if (strlen($data['plz']) < 3) {
        echo "Die PLZ ist zu Kurz";
        $isValid = false;
    }

    // Stadt überprüfen
    if (strlen($data['city']) < 3) {
        echo "Der Name der Stadt ist zu Kurz";
        $isValid = false;
    }

    // Hunderasse überprüfen
    if (strlen($data['dogRace']) < 3) {
        echo "Der Name der Stadt ist zu Kurz";
        $isValid = false;
    }

    // Geschlecht überprüfen
    if (strlen($data['dogGender']) < 3) {
        echo "Der Name der Stadt ist zu Kurz";
        $isValid = false;
    }

    // Hundealter überprüfen
    if (strlen($data['dogAge']) < 3) {
        echo "Der Name der Stadt ist zu Kurz";
        $isValid = false;
    }


    if ($isValid) {
        $_SESSION['data'] = $data;
        //daten in die Datenbank abspitzen
        $db = new mysqli("localhost:3307", "test", "Welcome$21", "projekt_307");

        // Felder für die Daten vorbereiten
        $dogQuery = $db->prepare("INSERT INTO dog (dog_name, actual_address, dog_race, dog_gender, dog_age)
            VALUES (?,?,?,?,?)");
        // Daten den eweiligen Feldern zuweisen
        $dogQuery->bind_param(
            "sssssss",
            $_SESSION['data']['dogname'],
            $_SESSION['data']['actualAddress'],
            $_SESSION['data']['dogRace'],
            $_SESSION['data']['dogGender'],
            $_SESSION['data']['dogAge'],);

        $dogQuery->execute();

        header("Location: home");

       

    }
} else {
    echo "Das Formular wurde nicht korrekt ausgefüllt!";
}



    //Speichern der Session
