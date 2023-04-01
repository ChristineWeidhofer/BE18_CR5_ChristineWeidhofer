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

// select logged-in users details
$res = mysqli_query($connect, "SELECT * FROM users WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

$sql = "SELECT * FROM animals";
$result = $connect->query($sql);
$card=''; 
if(mysqli_num_rows($result) > 0 || (isset($_GET['btn']) && $_GET['btn']=="all")) {    
    while($row2 = mysqli_fetch_array($result, MYSQLI_ASSOC)){      
        if ($row2['age'] > 8) { // checking the age of the pet and putting a checkmark or an x (senior or not)
            $card .= "

            <div class='d-flex justify-content-center'>
                <div class='card p-0 g-0 mb-5 shadow-lg' style='width: 18rem; border:none;'>
                    <img src='pictures/" . $row2['picture'] . "' class='card-img-top square'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row2['name'] . "</h5>
                        <p class='card-text text-muted'>" . $row2['descr'] . "</p>
                    </div>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>Senior: <span class='text-success fs-4'>&#10004;</span></li>
                        <li class='list-group-item'>Location: ". $row2['location']  ."</li>
                        <li class='list-group-item'>Status: ". $row2['status']  ."</li>
                        <div class='wrap d-flex justify-content-between'>
                            <a href='details.php?id=" .$row2['id']."'><button class='btn btn-tertiary btn-sm' type='button'>Details</button></a>
                            <a href='adopt.php?id=" .$row2['id']."'><button class='btn btn-secondary btn-sm' type='button'>Adopt</button></a>
                        </div>
                    </ul>
                </div>
            </div>
        ";
        } else {
            $card .= "

            <div class='d-flex justify-content-center'>
                <div class='card p-0 g-0 mb-5 shadow-lg' style='width: 18rem; border:none;'>
                    <img src='pictures/" . $row2['picture'] . "' class='card-img-top square'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row2['name'] . "</h5>
                        <p class='card-text text-muted'>" . $row2['descr'] . "</p>
                    </div>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>Senior: <span class='text-danger fs-4'>&#10008;</span></li>
                        <li class='list-group-item'>Location: ". $row2['location']  ."</li>
                        <li class='list-group-item'>Status: ". $row2['status']  ."</li>
                        <div class='wrap d-flex justify-content-between'>
                            <a href='details.php?id=" .$row2['id']."'><button class='btn btn-tertiary btn-sm' type='button'>Details</button></a>
                            <a href='adopt.php?id=" .$row2['id']."'><button class='btn btn-secondary btn-sm' type='button'>Adopt</button></a>
                        </div>
                    </ul>
                </div>
            </div>
        ";
        }
    };
} else {
    $card = "<h3 class='text-center'>No Data Available</h3>";
}

if ( isset($_GET['btn']) && $_GET['btn']=="sub") {

    $sql_age = "SELECT * FROM `animals` WHERE age > 8;";
    $result_age = $connect->query($sql_age);
    if(mysqli_num_rows($result_age)  > 0) {    
        $card = "";
        while($row_age = mysqli_fetch_array($result_age, MYSQLI_ASSOC)){
            $card .= "

            <div class='d-flex justify-content-center'>
                <div class='card p-0 g-0 mb-5 shadow-lg' style='width: 18rem; border:none;'>
                    <img src='pictures/" . $row_age['picture'] . "' class='card-img-top square'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row_age['name'] . "</h5>
                        <p class='card-text text-muted'>" . $row_age['descr'] . "</p>
                    </div>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>Senior: <span class='text-success fs-4'>&#10004;</span></li>
                        <li class='list-group-item'>Location: ". $row_age['location']  ."</li>
                        <li class='list-group-item'>Status: ". $row_age['status']  ."</li>
                        <div class='wrap d-flex justify-content-between'>
                            <a href='details.php?id=" .$row_age['id']."'><button class='btn btn-tertiary btn-sm' type='button'>Details</button></a>
                            <a href='adopt.php?id=" .$row_age['id']."'><button class='btn btn-secondary btn-sm' type='button'>Adopt</button></a>
                        </div>
                    </ul>
                </div>
            </div>
            ";
        }
    }   else {
        $card = "<h3 class='text-center'>No seniors can be found!</h3>";
    }
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
            <h4 class="text-white ps-2 ps-md-5">Hi, <?php echo ucfirst($row['first_name']); ?>!</h4>
        </div>
        <div class="d-flex justify-content-between">
            <div class="wrap">
                <a class="btn btn-secondary mt-4 me-2" href="logout.php?logout">Sign Out</a>
                <a class="btn btn-tertiary mt-4" href="update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
            </div>
            <div class="d-flex flex-column flex-md-row">
                <a class="btn btn-warning mt-4" href="home.php?btn=all">Show All</a>
                <a class="btn btn-warning mt-4 ms-2" href="home.php?btn=sub">Show Seniors Only</a>
            </div>
        </div>
    </header>
    <main>
        <!-- make content with dishes -->
        <div class="manageProduct mt-3">
            <h2 class="text-center m-4">Our Pets</h2>
            <div class='my-2 mx-auto'>
                <div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4'>
                    <?= $card ?>
                </div>
            </div>  
        </div>
    </main>
</body>
</html>