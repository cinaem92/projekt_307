<?php


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

        //PLZ überprüfen
        if (strlen($data['plz']) != 4 ){
            echo "PLZ nicht valid";
            $isValid = false;
        }

        if($isValid){
            $_SESSION['data'] = $data;
            
            //daten in die Datenbank abspitzen
            $db = getDatabase();
            

            // Felder für die Daten vorbereiten
            $userQuery = $db->prepare("INSERT INTO user (user_name, user_lastname, user_username, user_password, user_address, user_email, user_telephone)
            VALUES (?,?,?,?,?,?,?)");

            // passwprt hashen
            $password = hash1($_SESSION['data']['password']);

            // Daten den eweiligen Feldern zuweisen
            $userQuery->bind_param("sssssss",
                $_SESSION['data']['name'],
                $_SESSION['data']['lastname'],
                $_SESSION['data']['username'], 
                $password,
                $_SESSION['data']['address'],
                $_SESSION['data']['email'], 
                $_SESSION['data']['telephone']);

            $userQuery->execute();

            
            //UserID holen um in die Citytabelle zu speichern
            // $username = $_SESSION['data']['username'];
            // $infoQuery = $db->prepare("SELECT user_id FROM user WHERE user_username = ?;");
            // $infoQuery->bind_param("s", $username);
            // $infoQuery->execute();

            // $infoQuery->bind_result($user_id);

            // while ($infoQuery->fetch()) {
            //     $userID = array('user_id' => $user_id);
            // }
            // var_dump($userID);

            
            // $cityQuery = $db->prepare("INSERT INTO city (user_id, city_name, city_PLZ)
            // VALUES (?,?,?)");
            // $cityQuery->bind_param("iss",
            //     $userID, 
            //     $_SESSION['data']['city'], 
            //     $_SESSION['data']['plz']);
            // $cityQuery->execute();

            $db->close();

            //header("Location: login");
           

            
        }

        
        
    } else {
        echo "Das Formular wurde nicht korrekt ausgefüllt!";
    }

    //Speichern der Session

?>
