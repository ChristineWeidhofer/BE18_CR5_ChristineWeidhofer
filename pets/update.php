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
    $sql = "SELECT * FROM animals WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $descr = $data['descr'];
        $breed = $data['breed'];
        $picture = $data['picture'];
        $size = $data['size'];
        $age = $data['age'];
        $location = $data['location'];
        $vaccinated = $data['vaccinated'];
        $status = $data['status'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pet</title>
        <?php require_once '../components/boot.php'?>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <fieldset class="w-75 mx-auto my-5">
            <h2 class="text-center text-sm-start">Update request <img class='img-thumbnail rounded-circle ms-4' src='../pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></h2>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="name"  placeholder="Pet Name" value="<?php echo $name ?>"/></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="descr"  placeholder="Pet Description" value="<?php echo $descr ?>"/></td>
                    </tr>  
                    <tr>
                        <th>Breed</th>
                        <td><input class='form-control' type="text" name="breed"  placeholder="Breed" value="<?php echo $breed ?>"/></td>
                    </tr> 
                    <tr>
                        <th>Size</th>
                        <td><input class='form-control' type="number" name= "size" placeholder="Size" step="any" value="<?php echo $size ?>"/></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><input class='form-control' type="number" name= "age" placeholder="Age" step="any" value="<?php echo $age ?>"/></td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td>
                        <select class='form-select' type="text" name="location" id="location">
                            <option value="Wien">Wien</option>
                            <option value="Graz">Graz</option>
                            <option value="Linz">Linz</option>
                        </select>
                        </td>
                    </tr> 
                    <tr>
                        <th>Vaccinated</th>
                        <td>
                        <select class='form-select' type="text" name="vaccinated" id="vaccinated">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                        <select class='form-select' type="text" name="status" id="status">
                            <option value="Available">Available</option>
                            <option value="Adopted">Adopted</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><a href= "index.php"><button class="btn btn-tertiary" type="button">Back to Start</button></a></td>
                        <td><button class="btn btn-secondary" type= "submit">Save Changes</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>