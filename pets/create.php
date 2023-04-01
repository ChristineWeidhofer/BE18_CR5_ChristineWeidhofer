<?php
session_start();
require_once '../components/db_connect.php';

if (isset($_SESSION['user']) != "") {
    header( "Location: ../home.php");
    exit;
}

if (!isset ($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header( "Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once '../components/boot.php'?>
        <title>Adopt A Pet  |  Add Pet</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <fieldset>
            <h2 class='text-center'>Add Pet</h2>
            <form class="w-75 mx-auto my-5" action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="name"  placeholder="Pet Name" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="descr"  placeholder="Pet Description" /></td>
                    </tr>  
                    <tr>
                        <th>Breed</th>
                        <td><input class='form-control' type="text" name="breed"  placeholder="Breed" /></td>
                    </tr> 
                    <tr>
                        <th>Size</th>
                        <td><input class='form-control' type="number" name= "size" placeholder="Size" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><input class='form-control' type="number" name= "age" placeholder="Age" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td>
                        <select class='form-select' type="text" name="Location" id="location">
                        <option value="Wien" selected>Wien</option>
                        <option value="Graz">Graz</option>
                        <option value="Linz">Linz</option>
                        </select>
                        </td>
                    </tr> 
                    <tr>
                        <th>Vaccinated</th>
                        <td>
                        <select class='form-select' type="text" name="vaccinated" id="vaccinated">
                        <option value="Yes" selected>Yes</option>
                        <option value="No">No</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                        <select class='form-select' type="text" name="status" id="status">
                        <option value="Available" selected>Available</option>
                        <option value="Adopted">Adopted</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                    <td><a href="index.php"><button class='btn btn-tertiary' type="button">Back to Start</button></a></td>
                        <td><button class='btn btn-secondary justify-end' type="submit">Insert Pet</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>