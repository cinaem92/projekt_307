<?php

$db = getDatabase();
//XSS vorbeugen undVariablen zuweisen
$username = htmlspecialchars($_POST['username']);
$password = hash1(htmlspecialchars($_POST['password']));

unset($_SESSION['loggedin']);

selectValuesUser($username, $password);


if (isset($_SESSION['loggedin'])) {

    header("Location: loginuebersicht");
} else {

    header("Location: login");
}

?>