<?php

$db = getDatabase();

$username = $_POST['username'];
$password = hash1($_POST['password']);

selectValuesUser($username, $password);


if (isset($_SESSION['loggedin'])) {

    header("Location: loginuebersicht");
} else {

    header("Location: login");
}

?>