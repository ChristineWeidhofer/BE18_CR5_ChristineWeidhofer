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
$result = $connect->query($sql);
$tbody=''; 
if(mysqli_num_rows($result)  > 0) {    
    while($row2 = mysqli_fetch_array($result, MYSQLI_ASSOC)){      
        if ($row2['age'] > 8) { // checking the age of the pet and putting a checkmark or an x (senior or not)
            $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row2['picture']."'</td>
            <td>" .$row2['name']."</td>
            <td>" . $row2['descr'] . "</td> 
            <td class='text-success fs-3'>&#10004;</td>
            <td><a href='details.php?id=" .$row2['id']."'><button class='btn btn-tertiary btn-sm' type='button'>Details</button></a>
            <a href='adopt.php?id=" .$row2['id']."'><button class='btn btn-secondary btn-sm' type='button'>Adopt</button></a></td>
            </tr>";
        } else {
            $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row2['picture']."'</td>
            <td>" .$row2['name']."</td>
            <td>" . $row2['descr'] . "</td> 
            <td class='text-danger fs-3'>&#10008;</td>
            <td><a href='details.php?id=" .$row2['id']."'><button class='btn btn-tertiary btn-sm' type='button'>Details</button></a>
            <a href='adopt.php?id=" .$row2['id']."'><button class='btn btn-secondary btn-sm' type='button'>Adopt</button></a></td>
            </tr>";
        }
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
        <a class="btn btn-secondary mt-4 me-2" href="logout.php?logout">Sign Out</a>
        <a class="btn btn-tertiary mt-4" href="update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
    </header>
    <main>
        <!-- make content with dishes -->
        <div class="manageProduct w-75 mt-3">
    <h2 class="text-center m-4">Our Pets</h2>
    <div class="text-center w-25 mx-auto d-flex justify-content-evenly">
    </div>
    <table class='table table-responsive'>
    <thead class='table-secondary'>
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Senior</th>
            <th>Action</th>
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