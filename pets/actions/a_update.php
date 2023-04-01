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
    $descr = $_POST['descr'];
    $breed = $_POST['breed'];
    $picture = $_POST['picture'];
    $size = $_POST['size'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $vaccinated = $_POST['vaccinated'];
    $status = $_POST['status'];

    $id = $_POST['id'];

    $uploadError = '';

    $picture = file_upload($_FILES['picture'], 'product');//file_upload() called  
    if($picture->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../../pictures/$_POST[picture]");           
        $sql = "UPDATE `animals` SET `name`='$name',`breed`='$breed',`picture`='$picture->fileName',`descr`='$descr',`size`=$size,`age`=$age,`location`='$location',`vaccinated`='$vaccinated',`status`='$status' WHERE id = {$id}";
    }else{
        $sql = "UPDATE `animals` SET `name`='$name',`breed`='$breed',`descr`='$descr',`size`=$size,`age`=$age,`location`='$location',`vaccinated`='$vaccinated',`status`='$status' WHERE id = {$id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
                <h1>Everything went well?</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-secondary" type='button'>Back to Update</button></a>
                <a href='../index.php'><button class="btn btn-tertiary" type='button'>Back to Start</button></a>
            </div>
        </div>
    </body>
</html>