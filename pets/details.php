<?php

session_start();
require_once '../components/db_connect.php' ;

if (isset($_SESSION['user']) != "" ) {
  header("Location: ../home.php");
  exit;
}

if (! isset($_SESSION['adm']) && !isset($_SESSION['user' ])) {
  header("Location: ../login.php");
  exit;
}

// echo $_GET["id"]; // just to check

$sql = "SELECT * FROM animals WHERE id = $_GET[id]";
$result = mysqli_query($connect ,$sql);
$tbody = "";

if(mysqli_num_rows($result)  > 0) {    
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $tbody = "<tr>

      <td><img class='img-bigger' src='../pictures/" .$row['picture']. "'</td></tr>
      <tr><td><h3>" .$row['name']."</h3></td></tr>
      <tr><td>" .$row['descr']."</td>

      </tr>";
  } else {
  $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <?php require_once '../components/boot.php'?>
  <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div class="manageProduct w-75 mt-3">
  <h2 class="text-center m-4">Details for <?= $row['name']?></h2>
  <table class='table'>
    <thead class='table-secondary'>
    </thead>
    
<tbody>
  <?= $tbody;?>
</tbody>
  </table>
</div>

<div class="text-center w-25 mx-auto">
<a href="index.php"><button class="btn btn-secondary">Back to Start</button></a>
</div>
  
</body>
</html>