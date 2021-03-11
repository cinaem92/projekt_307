<?php
    function getDatabase() {
        // $conn = new mysqli("localhost:3307", "test", "Welcome$21", "projekt_307");
        $conn = new mysqli("localhost:3307", "cinaem", "phpMyAdmin", "projekt_307");
        return $conn;
    }

    function showUser() {
        $db = getDatabase();

        $result = $db->query("SELECT * FROM user");

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['user_id']."'>".$row['user_name']."</option>";
            }
        }

        $db->close();
    }

    function insertValues() {
        $db = getDatabase();

        $userQuery = $db->prepare("INSERT INTO user ('user_name', 'user_lastname', 'user_username', 'user_password', 'user_address', 'user_email', 'user_telephone')
        VALUES (?,?,?,?,?,?,?)");

        $userQuery->bind_param("sssssss",
        $_SESSION['user']['user_name'], $_SESSION['user']['user_lastname'], $_SESSION['user']['user_username'], $_SESSION['user']['user_password'],
        $_SESSION['user']['user_address'], $_SESSION['user']['user_email'], $_SESSION['user']['user_telephone']);

        $userQuery->execute();

        $userId = $db->insert_id;

        //City-Query
        $cityQuery = $db->prepare("INSERT INTO city (city_name, city_PLZ) VALUES (?,?)");
        $cityQuery->bind_param("si", $_SESSION['city']['city_name'], $_SESSION['city']['city_PLZ']);
        $cityQuery->execute();
        // $cityId = $db->insert_id;


        $dogQuery = $db->prepare("INSERT INTO dog (dog_name, actual_address) VALUES (?,?)");
        // $dogQuery->bind_param("ss", $_SESSION['question'], $_SESSION['products'][count($_SESSION['products'])-1], $kontaktId, $date);
        $dogQuery->bind_param("ss", $_SESSION['dog']['dog_name'], $_SESSION['dog']['actual_address']);
        $dogQuery->execute();
        // $dogId = $db->insert_id;

        $db->close();

    }
?>