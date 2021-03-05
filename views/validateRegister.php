<?php

if(isset($_SESSION['user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $plz = $_POST['plz'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    
    $statement = $pdo->prepare("SELECT * FROM user WHERE user_username == username");
    $result = $statement->execute(array('username' => $username));
    $user = $statement->fetch();
}
    //Überprüfung der Daten
    //Speichern der Session???
    //Evtl. Daten von erfolgreich.php übernehmen

?>