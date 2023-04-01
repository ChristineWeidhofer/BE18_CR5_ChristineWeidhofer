<fieldset class="w-75 mt-5 mx-auto p-4 bg-light rounded shadow">
        <h2 class='mb-3'>Adoption Request<img class='img-thumbnail rounded-circle ms-4' src='pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></h2>
        <h5>You have selected the pet below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td class="fs-4"><?php echo $name ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to adopt this pet?</h3>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="hidden" name="picture" value="<?php echo $picture ?>" />
            <button class="btn btn-tertiary" type="submit">Yes, adopt it!</button>
            <a href="home.php"><button class="btn btn-secondary" type="button">No, go back!</button></a>
        </form>
    </fieldset>