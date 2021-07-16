<?php

include '../config.php';
$select = mysqli_query($conect, "SELECT *
    FROM paymentmode ");
$paymentMode;

$num_rows = mysqli_num_rows($select);
?>
<form action="#" class="form-editable">


    <select name="type" id="gender">
        <?php
        if ($num_rows == 0) {
            echo "No records found";
        } else {
            while ($cols = mysqli_fetch_assoc($select)) {
                echo '<option value="' . $cols["paymentMode_name"] . '" class="u-name-menu">' . $cols["paymentMode_name"] . '</option>';
        ?>

                <!-- <td class="u-id-menu">Id</td> -->


        <?php
            }
        }

        ?>
        ?>
    </select>
    <button type="submit">Update</button>
</form>