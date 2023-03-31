<?php 
session_start();

if (isset($_SESSION[ 'user']) != "") {
    header("Location: ../home.php");
    exit ;
}

if (!isset($_SESSION['adm']) && !isset ($_SESSION['user'])) {
    header("Location: ../login.php");
    exit ;
}

require_once '../components/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM animals WHERE id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $name = $data['name'];
        $descr = $data['descr'];
        $price = $data['age'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Entry For Pet</title>
        <?php require_once '../components/boot.php'?>
        <link rel="stylesheet" href="../styles/styles.css">
        <style type= "text/css"> 
            .img-thumbnail{
                width: 100px !important;
                height: 100px !important;
            }    
        </style>
    </head>
    <body>
        <fieldset class="bg-light rounded p-5 shadow w-75 mx-auto my-5">
            <h2 class='mb-3'>Do you really want to delete?</h2>
            <h6>You have selected the entry below:</h6>
            <table class="table w-75 mt-3">
                <tr>
                    <td><img class='img-thumbnail ms-4' src='../pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></td>
                    <td class="display-5"><?php echo $name?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this entry?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <button class="btn btn-secondary" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-tertiary" type="button">No, go back!</button></a>
            </form>
        </fieldset>
    </body>
</html>