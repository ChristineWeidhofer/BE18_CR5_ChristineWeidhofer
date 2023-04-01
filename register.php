<?php
session_start(); // start a new session or continues the previous
if (isset($_SESSION['user']) != "") {
    header("Location: home.php");
}
if (isset($_SESSION['adm']) != "") {
    header("Location: dashboard.php");
}
require_once 'components/db_connect.php';
require_once 'components/file_upload.php';
$error = false;
$fname = $lname = $email = $date_of_birth = $email = $phone = $location = $pass = $picture = '';
$fnameError = $lnameError = $emailError = $phoneError = $locationError = $dateError = $passError = $picError = '';
if (isset($_POST['btn-signup'])) {

    // sanitise user input to prevent sql injection
    $fname = trim($_POST['fname']);
    $fname = strip_tags($fname);
    $fname = htmlspecialchars($fname);

    $lname = trim($_POST['lname']);
    $lname = strip_tags($lname);
    $lname = htmlspecialchars($lname);

    $date_of_birth = trim($_POST['date_of_birth']);
    $date_of_birth = strip_tags($date_of_birth);
    $date_of_birth = htmlspecialchars($date_of_birth);

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $phone = trim($_POST['phone']);
    $phone = strip_tags($phone);
    $phone = htmlspecialchars($phone);

    $location = trim($_POST['location']);
    $location = strip_tags($location);
    $location = htmlspecialchars($location);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    $uploadError = '';
    $picture = file_upload($_FILES['picture']);

    // basic name validation
    if (empty($fname) || empty($lname)) {
        $error = true;
        $fnameError = "Please enter your first name and surname";
    } else if (strlen($fname) < 3 || strlen($lname) < 3) {
        $error = true;
        $fnameError = "Name and surname must have at least 3 characters.";
    } else if (!preg_match("/^[a-zA-Z]+$/", $fname) || !preg_match("/^[a-zA-Z]+$/", $lname)) {
        $error = true;
        $fnameError = "Name and surname must contain only letters and no spaces.";
    }

    // basic email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    } else {
        // checks whether the email exists or not
        $query = "SELECT email FROM users WHERE email='$email'";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);
        if ($count != 0) {
            $error = true;
            $emailError = "Provided Email is already in use.";
        }
    }

    // checks if the date input was left empty
    if (empty($date_of_birth)) {
        $error = true;
        $dateError = "Please enter your date of birth.";
    }

    // checks if the phone input was left empty
    if (empty($phone)) {
        $error = true;
        $phoneError = "Please enter your phone number.";
    }

    // checks if the location input was left empty
    if (empty($location)) {
        $error = true;
        $locationError = "Please enter your location.";
    }

    // password validation
    if (empty($pass)) {
        $error = true;
        $passError = "Please enter password.";
    } else if (strlen($pass) < 6) {
        $error = true;
        $passError = "Password must have at least 6 characters.";
    } else if (strlen($pass) > 64) {
        $error = true;
        $passError = "Password can not have more than 64 characters.";
    }

    // password hashing for security
    $password = hash('sha256', $pass);
    // if there's no error, continue to signup
    if (!$error) {
        $query = "INSERT INTO `users`(`first_name`, `last_name`, `password`, `date_of_birth`, `email`, `phone`, `location`, `picture`) VALUES ('$fname','$lname','$password','$date_of_birth','$email','$phone','$location','$picture->fileName')";
                
        $res = mysqli_query($connect, $query);

        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully registered, you may login now";
            $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
            $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
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
        <form class="w-75 mx-auto" method="post" action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME']); ?>" autocomplete="off" enctype="multipart/form-data">
            <h2>Sign Up.</h2>
            <hr />
            <?php
            if (isset($errMSG)) {
            ?>
            
            <div class="alert alert-<?php echo $errTyp ?>">
                <p><?php echo $errMSG; ?></p>
                <p><?php echo $uploadError; ?></p>
            </div>

            <?php
            }
            ?>
            <label class="pe-4" name="fname">First name</label>
            <input type="text" name="fname" class="form-control" placeholder="First name" maxlength="55" value="<?php echo $fname ?>" /> <!-- to keep the inputs inside after registering and getting errors, user only has to fill in missing fields -->
            <span class="text-danger"> <?php echo $fnameError; ?> </span>

            <label class="pe-4" name="lname">Last name</label>
            <input type="text" name="lname" class="form-control" placeholder="Surname" maxlength="55" value="<?php echo $lname ?>" />
            <span class="text-danger"> <?php echo $fnameError; ?> </span>

            <label class="pe-4" name="email">E-Mail</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="55" value="<?php echo $email ?>" />
            <span class="text-danger"> <?php echo $emailError; ?> </span>

            <label class="pe-4" name="phone">Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" maxlength="15" value="<?php echo $phone ?>" />
            <span class="text-danger"> <?php echo $phoneError; ?> </span>

            <label class="pe-4" name="location">Location</label>
            <input type="text" name="location" class="form-control" placeholder="Location" maxlength="55" value="<?php echo $location ?>" />
            <span class="text-danger"> <?php echo $locationError; ?> </span>

            <label class="pe-4" name="date_of_birth">Date of birth</label>
            <input class='form-control' type="date" name="date_of_birth" value="<?php echo $date_of_birth ?>" />
            <span class="text-danger"> <?php echo $dateError; ?> </span>

            <label class="pe-4" name="picture">Picture</label>
            <input class='form-control' type="file" name="picture">
            <span class="text-danger"> <?php echo $picError; ?> </span>

            <label class="pe-4" name="pass">Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="64" />
            <span class="text-danger"> <?php echo $passError; ?> </span>

            <hr />
            <button type="submit" class="btn btn-block btn-tertiary m-0" name="btn-signup">Sign Up</button>
            <hr />
            <a class="btn btn-secondary" href="login.php">Sign in Here...</a>
        </form>
    </div>
</body>
</html>