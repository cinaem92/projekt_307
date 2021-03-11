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
        echo "Der Name der Stadt ist zu Kurz";
        $isValid = false;
    }

    // Stadt überprüfen
    if (strlen($data['city']) < 3) {
        echo "Der Name der Stadt ist zu Kurz";
        $isValid = false;
    }

    // Telefonnummer überprüfen
    if (strlen($data['telephone']) < 3) {
        echo "Die Telefonnummer ist zu Kurz";
        $isValid = false;
    }

    // Email überprüfen --> nicht leer, gültige emailadresse
    if (empty($data['email']) || !preg_match('/^(\w{2,}|\w{2,}[\.\-]\w{2,})@(\w{2,}\.\w{2,}|\w{2,}[\.\-]\w{2,}\.\w{2,})$/', $data['email'])) {
        echo 'Email entspricht nicht den Vorgaben';
        $isValid = false;
    }

    // Passwörter vergleichen
    if (strcmp($data['password'], $data['passwordRepeat'])) {
        echo "Passwörter waren nicht gleich!";
        $isValid = false;
    }

    if ($isValid) {
        $_SESSION['data'] = $data;
        //daten in die Datenbank abspitzen
        $db = new mysqli("localhost:3307", "test", "Welcome$21", "projekt_307");


        echo "******************************************************************************************************
            *************************************************************************************************************
            ************************************************************************************************************
            ***********************************************************************************************************";
        var_dump($db);
        echo "******************************************************************************************************
            *************************************************************************************************************
            ************************************************************************************************************
            ***********************************************************************************************************";


        // Felder für die Daten vorbereiten
        $userQuery = $db->prepare("INSERT INTO user (user_name, user_lastname, user_username, user_password, user_address, user_email, user_telephone)
            VALUES (?,?,?,?,?,?,?)");
        // Daten den eweiligen Feldern zuweisen
        $userQuery->bind_param(
            "sssssss",
            $_SESSION['data']['name'],
            $_SESSION['data']['lastname'],
            $_SESSION['data']['username'],
            $_SESSION['data']['password'],
            $_SESSION['data']['address'],
            $_SESSION['data']['email'],
            $_SESSION['data']['telephone']
        );

        $userQuery->execute();

        // Daten werden erst jetzt in die DB eingefügt
        // if ($userQuery->execute()){
        //     // Falls die Datentransplation erfolgreich war, wird auf die Seite LOGIN weitergeleitet
        //     header("Location: login");
        //     exit;
        // }

    }
} else {
    echo "Das Formular wurde nicht korrekt ausgefüllt!";
}



    //Speichern der Session
