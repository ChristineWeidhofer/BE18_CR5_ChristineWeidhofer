<?php
session_start();
require_once 'components/db_connect.php';

// if adm will redirect to dashboard
if (isset($_SESSION['adm'])) {
    header("Location: dashboard.php");
    exit;
}
// if session is not set this will redirect to login page
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// select logged-in users details - procedural style
$res = mysqli_query($connect, "SELECT * FROM users WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

$sql = "SELECT * FROM animals";
// $result = mysqli_query($connect ,$sql); ------------------------ procedural style
$result = $connect->query($sql); // -------------OOP
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {    
    while($row2 = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
    $tbody .= "<tr>

        <td><img class='img-thumbnail' src='pictures/" .$row2['picture']."'</td>
        <td>" .$row2['name']."</td>
        <td>" . $row2['descr'] . "</td> 
        <td>" .$row2['age']."</td>
        <td><a href='details.php?id=" .$row2['id']."'><button class='btn btn-tertiary btn-sm' type='button'>Details</button></a>

    </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='6'><center>No Data Available</center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, dear <?php echo ucfirst($row['first_name']); ?>!</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <header class="container">
        <div class="hero d-flex align-items-center">
            <img class="user" src="pictures/<?php echo $row['picture']; ?>" alt="<?php echo $row['first_name']; ?>">
            <h4 class="text-white ps-5">Hi, <?php echo ucfirst($row['first_name']); ?>!</h4>
        </div>
        <a class="btn btn-secondary mt-2 me-2" href="logout.php?logout">Sign Out</a>
        <a class="btn btn-tertiary mt-2" href="update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
    </header>
    <main>
        <!-- make content with dishes -->
        <div class="manageProduct w-75 mt-3">
    <h2 class="text-center m-4">Our Pets</h2>
    <div class="text-center w-25 mx-auto d-flex justify-content-evenly">
    </div>
    <table class='table'>
    <thead class='table-secondary'>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Age</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
    <?= $tbody;?>
    </tbody>
    </table>
</div>
    </main>
</body>
</html>