<?php
session_start();
require_once 'components/db_connect.php';

// it will never let you open login page if session is set
if (isset($_SESSION['user']) != "") {
    header("Location: home.php");
    exit;
}
if (isset($_SESSION['adm']) != "") {
    header("Location: dashboard.php"); // redirects to home.php
}

$error = false;
$email = $password = $emailError = $passError = '';

function cleanInput($param) {
    $param = trim($param);
    $param = strip_tags($param);
    $param = htmlspecialchars($param);
    return $param;
}

if (isset($_POST['btn-login'])) {

    // prevent sql injections/ clear user invalid inputs
    $email = cleanInput($_POST['email']);

    $pass = cleanInput($_POST['pass']);

    if (empty($email)) {
        $error = true;
        $emailError = "Please enter your email address.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }

    if (empty($pass)) {
        $error = true;
        $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

        $password = hash('sha256', $pass); // password hashing

        $sql = "SELECT id, first_name, password, status FROM users WHERE email = '$email'";

        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if ($count == 1 && $row['password'] == $password) {
            if ($row['status'] == 'adm') {
                $_SESSION['adm'] = $row['id'];
                header("Location: dashboard.php");
            } else {
                $_SESSION['user'] = $row['id'];
                header("Location: home.php");
            }
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }
    }
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration System</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div class="container">
        <form class="log-con-form mx-auto" method="post" action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME']); ?>" autocomplete="off">
            <h2>Login</h2>
            <hr />
            <?php
            if (isset($errMSG)) {
                echo $errMSG;
            }
            ?>

            <input type="email" autocomplete="off" name="email" class="form-control mb-2" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
            <span class="text-danger"><?php echo $emailError; ?></span>

            <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="64" />
            <span class="text-danger"><?php echo $passError; ?></span>
            <hr />
            <button class="btn btn-block btn-tertiary m-0" type="submit" name="btn-login">Sign In</button>
            <hr />
            <a class="btn btn-secondary me-2" href="register.php">Not registered yet? Click here</a>
            </hr>
            <a class="mtxs btn btn-tertiary" href="contact.php">Contact Us</a>
        </form>
    </div>
    <div class="login"></div>
</body>
</html>