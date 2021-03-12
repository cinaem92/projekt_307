<?php

$db = getDatabase();
// //Bool
// password_verify(richtigesPassword, passwordausDB);

// Daten aus Formular holen
$username = $_POST['username'];
$password = hash1($_POST['password']);

// var_dump($password);

// // Query vorbereiten und ausführen
// //SQL Injection wird mit den ? vermieden, wird als String betrachtet
// $sql = "SELECT user_id, user_username FROM user WHERE user_username = ? AND user_password = ?;";
// $statement = $db->prepare($sql);
// // Statement zusammenfügen mit bind zusammenfügen
// $statement->bind_param('ss', $username, $password);
// // Statement wird ausgeführt und an DB geschickt / gibt Tabelle zurück
// $statement->execute();

// $user = NULL;

// // Queryauswertung erhalten / erhaltene Tabelle umwandeln und in Array speichern
// $statement->bind_result($user_id, $username);
// // mit fetch werden die Statement-Zeilen sortiert
// while($statement->fetch()){
//     //Assoziatives Array erstellen mit 2 Schlüsselbegriffen
//     $user = array('user_id' => $user_id, 'user_username' => $username);
// }

// $db->close();






if(!empty($user)){
    $_SESSION['userdata'] = array('user_id' => $user['user_id'], 'username' => $user['user_username'] );

    header("Location: loginuebersicht");
} else {
    header("Location: login");
}


?>