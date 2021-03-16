<?php


    if (!empty($_POST)) {

        $data = $_POST;
        $isValid = true;
        //XSS vorbeugen:
        $data['name'] = htmlspecialchars($data['name']);
        $data['lastname'] = htmlspecialchars($data['lastname']);
        $data['address'] = htmlspecialchars($data['address']);
        $data['city'] = htmlspecialchars($data['city']);
        $data['telephone'] = htmlspecialchars($data['telephone']);
        $data['email'] = htmlspecialchars($data['email']);
        $data['password'] = htmlspecialchars($data['password']);
        $data['passwordRepeat'] = htmlspecialchars($data['passwordRepeat']);
        $data['plz'] = htmlspecialchars($data['plz']);

    
        // Vorname überprüfen
        if (strlen($data['name']) < 3){
            echo "Der Vorname ist zu Kurz";
            $isValid = false;
        }

        // Nachname überprüfen
        if (strlen($data['lastname']) < 3){
            echo "Der Nachname ist zu Kurz";
            $isValid = false;
        }

        // Adresse überprüfen
        if (strlen($data['address']) < 3){
            echo "Die Adresse ist zu Kurz";
            $isValid = false;
        }

        // Stadt überprüfen
        if (strlen($data['city']) < 3){
            echo "Der Name der Stadt ist zu Kurz";
            $isValid = false;
        }

        // Telefonnummer überprüfen
        if (strlen($data['telephone']) < 3){
            echo "Die Telefonnummer ist zu Kurz";
            $isValid = false;
        }

        // Email überprüfen --> nicht leer, gültige emailadresse
        if (empty($data['email']) || !preg_match('/^(\w{2,}|\w{2,}[\.\-]\w{2,})@(\w{2,}\.\w{2,}|\w{2,}[\.\-]\w{2,}\.\w{2,})$/', $data['email'])) {
            echo 'Email entspricht nicht den Vorgaben';
            $isValid = false;
        }

        // Passwörter vergleichen
        if (strcmp($data['password'], $data['passwordRepeat'])){
            echo "Passwörter waren nicht gleich!";
            $isValid = false;
        }

        //PLZ überprüfen
        if (strlen($data['plz']) != 4 ){
            echo "PLZ nicht valid";
            $isValid = false;
        }

        if($isValid){
            $_SESSION['data'] = $data;

            insertValuesCity();
            insertValuesUser();
            
            header("Location: login");
                   
        }
        
    } else {
        echo "Das Formular wurde nicht korrekt ausgefüllt!";
    }

    //Speichern der Session

?>
