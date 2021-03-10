<?php

$db = getDatabase();

// Daten aus Formular holen
$username = $_POST['username'];
$password = $_POST['password'];

// Query vorbereiten und ausführen
$sql = "SELECT user_id, user_username FROM user WHERE user_username = ? AND user_password = ?;";
$statement = $db->prepare($sql);
$statement->bind_param('ss', $username, $password);
$statement->execute();

// Queryauswertung erhalten
$statement->bind_result($user_id, $username);
while($statement->fetch()){
    $user = array('user_id' => $user_id, 'user_username' => $username);
}

if(!empty($user)){
    $_SESSION['userdata'] = array('user_id' => $user['user_id'], 'username' => $user['user_username'], 'login' => true );
    
    
    header("Location: loginuebersicht");
}


// if(isset($_SESSION['user'])) {
//     $username = $_POST['username'];
//     $passwort = $_POST['passwort'];
    
//     $statement = $pdo->prepare("SELECT * FROM user WHERE user_username == username");
//     $result = $statement->execute(array('username' => $username));
//     $user = $statement->fetch();
        
//     //Überprüfung des Passworts
//     if ($user !== false && password_verify($passwort, $user['user_password'])) {
//         $_SESSION['user'] = $user['user_id'];
//         die('Login erfolgreich. Weiter zu <a href="hundNeu">Hund erfassen</a>');
//     } else {
//         $errorMessage = "E-Mail oder Passwort war ungültig<br>";
//     }
// }

?>