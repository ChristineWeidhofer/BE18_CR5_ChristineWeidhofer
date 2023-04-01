<?php
session_start();

if (isset($_SESSION[ 'user']) != "") {
    header("Location: ../../home.php");
    exit ;
}

if (!isset($_SESSION['adm']) && !isset ($_SESSION['user'])) {
    header("Location: ../../login.php");
    exit ;
}

require_once '../../components/db_connect.php';
require_once  '../../components/file_upload.php';

if ($_POST) {   
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $descr = $_POST['descr'];
    $size = $_POST['size'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $vaccinated = $_POST['vaccinated'];
    $status = $_POST['status'];
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture'], 'product');  

    $sql = "INSERT INTO animals (name, breed, picture, descr, size, age, location, vaccinated, status) VALUES ('$name', '$breed', '$picture->fileName', '$descr', $size, $age, '$location', '$vaccinated', 'status')";
    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $name </td>
            <td> $price </td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../../components/boot.php'?>
        <link rel="stylesheet" href="../../styles/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Everything worked out?</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
            </div>
            <div class="text-center w-25 mx-auto">
                <a href="../index.php"><button class="btn btn-warning btn-tertiary">Back to Start</button></a>
            </div>
        </div>
    </body>
</html>