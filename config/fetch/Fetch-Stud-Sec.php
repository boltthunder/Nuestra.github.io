<?php
include "../db_connection.php";
include_once("../controller/FetchController.php");

$db = new DatabaseConnection;

if (isset($_GET['grade'])) { ?>

    <label for="section-list" class="mt-1 mr-1 text-black">Section</label>
    <select id="section-list" class="form-control text-center section" name="section" required>
        <option disabled selected>Please Select</option>
        <?php
        $fetch_grade = mysqli_real_escape_string($db->con, $_GET['grade']);
        $section = new FetchController;
        $result = $FetchSec = $section->fetchSection($fetch_grade);
        if ($result->num_rows > 0) {
            foreach ($result as $rows) { ?>
                <option value="<?= $rows['section'] ?>">
                    <?= $rows['section'] ?>
                </option>
            <?php }
        }
        ?>
    </select>

<?php } ?>

