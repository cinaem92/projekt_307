<?php


    echo "hey";

    if (!empty($_POST)) {

        $data = $_POST;
        $isValid = true;
    


    

        if (strlen($data['name']) < 3){
            echo "Der Vorname ist zu Kurz";
            $isValid = false;
        }

        if (strlen($data['lastname']) < 3){
            echo "Der Nachname ist zu Kurz";
            $isValid = false;
        }

        // Email überprüfen --> nicht leer, gültige emailadresse
        if (empty($data['email']) || !preg_match('/^(\w{2,}|\w{2,}[\.\-]\w{2,})@(\w{2,}\.\w{2,}|\w{2,}[\.\-]\w{2,}\.\w{2,})$/', $data['email'])) {
            echo 'Email entspricht nicht den Vorgaben';
            $isValid = false;
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
    }

    //Überprüfung der Daten
    //Speichern der Session???
    //Evtl. Daten von erfolgreich.php übernehmen


?>
