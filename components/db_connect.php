<?php
DEFINE('DB_HOSTNAME', 'localhost');
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_DATABASE', 'BE18_CR5_animal_adoption_ChristineWeidhofer');

// create connection
// $connect = new  mysqli($localhost, $username, $password, $dbname);
$connect = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
// } else {
//     echo "Successfully Connected";
}

// $sql = "select * from users";
// $result = mysqli_query($connect, $sql);
// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($rows);