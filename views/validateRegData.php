<?php


    echo "hey";

    if (!empty($_POST)) {

        $data = $_POST;
        $isValid = true;

        var_dump($data);

    
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

        if($isValid){
            $_SESSION['data'] = $data;
            //daten in die Datenbank abspitzen
        }

        // $username = $_POST['username'];
        // $password = $_POST['password'];
        // $name = $_POST['name'];
        // $lastname = $_POST['lastname'];
        // $address = $_POST['address'];
        // $plz = $_POST['plz'];
        // $telephone = $_POST['telephone'];
        // $email = $_POST['email'];
        
        // $statement = $pdo->prepare("SELECT * FROM user WHERE user_username == username");
        // $result = $statement->execute(array('username' => $username));
        // $user = $statement->fetch();
    } else {
        echo "Das Formular wurde nicht korrekt ausgefüllt!";
    }

    //Überprüfung der Daten
    //Speichern der Session???
    //Evtl. Daten von erfolgreich.php übernehmen


?>
