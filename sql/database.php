<?php
function getDatabase()
{
    // $db = new mysqli("localhost:3307", "test", "Welcome$21", "projekt_307");
    $db = new mysqli("localhost:3307", "cinaem", "phpMyAdmin", "projekt_307");
    return $db;
}

function showUser()
{
    $db = getDatabase();

    $result = $db->query("SELECT * FROM user");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['user_id'] . "'>" . $row['user_name'] . "</option>";
        }
    }

    $db->close();
}


function insertValuesCity()
{
    $db = getDatabase();

    //City-Query
    $cityQuery = $db->prepare("INSERT INTO city (city_name, city_PLZ)
        VALUES (?,?)");


    $cityQuery->bind_param(
        "si",
        $_SESSION['data']['city'],
        $_SESSION['data']['plz']
    );

    $cityQuery->execute();
    $_SESSION['data']['cityId'] = $db->insert_id;
    $db->close();
}


function insertValuesUser()
{
    $db = getDatabase();

    $userQuery = $db->prepare("INSERT INTO user (city_id, user_name, user_lastname, user_username, user_password, user_address, user_email, user_telephone)
        VALUES (?,?,?,?,?,?,?,?)");

    // passwort hashen
    $password = hash1($_SESSION['data']['password']);

    $userQuery->bind_param(
        "isssssss",
        $_SESSION['data']['cityId'],
        $_SESSION['data']['name'],
        $_SESSION['data']['lastname'],
        $_SESSION['data']['username'],
        $password,
        $_SESSION['data']['address'],
        $_SESSION['data']['email'],
        $_SESSION['data']['telephone']
    );

    $userQuery->execute();
    $_SESSION['data']['userId'] = $db->insert_id;
    $db->close();
}

function insertValuesDog()
{
    $db = getDatabase();

    

    $dogQuery = $db->prepare("INSERT INTO dog (user_id, city_id, dog_name, actual_address, dog_race, dog_gender, dog_age)
    VALUES (?,?,?,?,?,?,?)");
    $dogQuery->bind_param(
        "iissssi",
        $_SESSION['loggedin']['userId'],
        $_SESSION['data']['cityId'],
        $_SESSION['data']['dog_name'],
        $_SESSION['data']['actual_address'],
        $_SESSION['data']['dogRace'],
        $_SESSION['data']['dogGender'],
        $_SESSION['data']['dogAge']
    );

    $dogQuery->execute();
    $db->close();
}

function selectValuesUser($username, $password)
{
    $db = getDatabase();


    $selectQuery = $db->prepare("SELECT * FROM user WHERE user_username = ? AND user_password = ?");

    $selectQuery->bind_param(
        "ss",
        $username,
        $password);

    $selectQuery->execute();

    // $selectQuery->bind_result($user_id, $username);


    $userresult = $selectQuery->get_result()->fetch_all(MYSQLI_ASSOC);
        
        
        if(sizeof($userresult) > 0) {

            //Index 0 is used since there should only be one entry
            $_SESSION['loggedin']['userId'] = $userresult[0]['user_id'];
            $_SESSION['loggedin']['user_username'] = $userresult[0]['user_username'];

        }

    // while ($selectQuery->fetch()) {
    //     $_SESSION['loggedin'] = array('user_id' => $user_id, 'user_username' => $username);
    // }

    $db->close();
}

//Passwort-Hashfunktion
function hash1($password)
{
    $salt = "IgBiSuper";
    return sha1($password . $salt);
}
