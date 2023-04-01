<?php
session_start();
require_once 'components/db_connect.php';
// if session is not set this will redirect to login page
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}
if (isset($_SESSION["adm"])) {
  header("Location: dashboard.php");
  exit;
}
//initial bootstrap class for the confirmation message
$class = 'd-none';
//the GET method will show the info from the animal to be adopted
if ($_GET['id']) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM animals WHERE id = {$id}";
  $result = mysqli_query($connect, $sql);
  $data = mysqli_fetch_assoc($result);
  $fieldset = "";
  if ((mysqli_num_rows($result) == 1) && ($data['status'] == 'Available')) { // check if pet status is "Available", put info out
    $name = $data['name'];
    $picture = $data['picture'];
    $fieldset = "   
    <fieldset class='w-75 mt-5 mx-auto p-4 bg-light rounded shadow'>
    <h2 class='mb-3'>Adoption Request<img class='img-thumbnail rounded-circle ms-4' src='pictures/" .$picture. "' alt='" .$name. "'></h2>
        <h5>You have selected the pet below:</h5>
        <table class='table w-75 mt-3'>
            <tr>
                <td class='fs-4'>" .$name. "</td>
            </tr>
        </table>

        <h3 class='mb-4'>Do you really want to adopt this pet?</h3>
        <form method='post'>
            <input type='hidden' name='id' value='" .$id. "' />
            <input type='hidden' name='picture' value='" .$picture. "' />
            <button class='btn btn-tertiary' type='submit'>Yes, adopt it!</button>
            <a href='home.php'><button class='btn btn-secondary' type='button'>No, go back!</button></a>
        </form>
    </fieldset>
    ";
  } else { // info that pet is not available for adoption
    $fieldset = "<h3 class='text-center m-5'>I am currently not available for adoption!</h3>
    <div class='container text-center'><a href='home.php'><button class='btn btn-secondary' type='button'>OK, go back!</button></a></div>
    ";
  }
}

  //the POST method will put the "Adopted" status on the pet
  if ($_POST) {
    $id = $_POST['id'];

    $sql = "UPDATE `animals` SET `status`='Adopted' WHERE id = {$id}";
    if ($connect->query($sql) === TRUE) {
      $class = "alert alert-success";
      $message = "Successfully Adopted!";
      header("refresh:3;url=home.php");
    } else {
      $class = "alert alert-danger";
      $message = "The pet was not adopted due to: <br>" . $connect->error;
      header("refresh:3;url=home.php");
    }
  }
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt A Pet</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div class="<?php echo $class; ?>" role="alert">
        <p><?php echo ($message) ?? ''; ?></p>
    </div>
  <?= $fieldset?>
</body>
</html>