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
        $price = $data['price'];
        $picture = $data['picture'];
        $supplier = $data['fk_supplierId'];
        $resultSup = mysqli_query($connect, "SELECT * FROM suppliers");
        $supList = "";
        if  (mysqli_num_rows($resultSup) > 0) {
            while ($row = $resultSup->fetch_array(MYSQLI_ASSOC)) {
                if ($row['supplierId'] == $supplier) {
                    $supList .= "<option selected value='{$row['supplierId']}'>{$row['sup_name']}</option>";
                } else  {
                    $supList .= "<option value='{$row['supplierId']}'>{$row['sup_name']}</option>" ;
                }
            }
        } else {
            $supList = "<li>There are no suppliers registered</li>";
        }
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
        <style type= "text/css">
            .img-thumbnail{
                width: 100px !important;
                height: 100px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset class="w-75 mx-auto my-5">
            <h2 class="text-center text-sm-start">Update request <img class='img-thumbnail rounded-circle ms-4' src='../pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></h2>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Pet Name" value="<?php echo $name ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text"  name="descr" placeholder ="Description" value="<?php echo $descr ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type= "number" name="price" step="any"  placeholder="Price" value ="<?php echo $price ?>" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <th>Supplier</th>
                        <td>
                            <select class="form-select" name="supplier" aria-label="Select supplier">
                                <?php echo $supList; ?>
                            </select>
                        </td>
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