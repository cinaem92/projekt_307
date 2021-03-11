<?php

$db = getDatabase();

// Daten aus Formular holen
$username = $_POST['username'];
$password = md5($_POST['password']);

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
    $_SESSION['userdata'] = array('user_id' => $user['user_id'], 'username' => $user['user_username'] );
    
    
    header("Location: loginuebersicht");
}

?>