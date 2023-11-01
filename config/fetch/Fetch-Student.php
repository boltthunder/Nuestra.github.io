<?php
include "../db_connection.php";
include_once("../controller/FetchController.php");

$db = new DatabaseConnection;

if (isset($_GET['grade']) && isset($_GET['section']) ) {

    ?>

    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Contact No.</th>
                <th>Age</th>
                <th>Grade Level</th>
                <th>Section</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $fetchStud = mysqli_real_escape_string($db->con, $_GET['grade']);
            $fetchSec = mysqli_real_escape_string($db->con, $_GET['section']);
            $Filter_Grade = new FetchController;
            $result = $fetch_grade = $Filter_Grade->FetchStudent($fetchStud,$fetchSec);
            if ($result->num_rows > 0) {
                foreach ($result as $rows) {
                    ?>

                    <tr>
                        <td>
                            <?= $rows['fname'] . ' ' . $rows['mname'] . ' ' . $rows['lname'] ?>
                        </td>
                        <td>
                            <?= $rows['contact'] ?>
                        </td>
                        <td>
                            <?= $rows['age'] ?>
                        </td>
                        <td>
                            <?= $rows['grade'] ?>
                        </td>
                        <td>
                            <?= $rows['section'] ?>
                        </td>
                        <td>
                            <?= $rows['status'] ?>
                        </td>
                        <td>
                            <button type="submit" class="text-blue-400" id="edit-Student" name="edit-Student" ><i class="fa fa-edit"></i></button>
                            <input type="text" hidden id="stud-id" name="stud-id" value="<?= $rows['id']?>">
                            <button type="submit" class="text-red-500" id="delete-Student" name="d5lete-Student"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                <?php }
            }
            ?>

        <?php } ?>
    </tbody>
</table>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>