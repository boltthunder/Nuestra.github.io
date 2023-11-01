<?php
include "../db_connection.php";
include_once("../controller/FetchController.php");

$db = new DatabaseConnection;

if (isset($_GET['grade'])) {

    ?>
   
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Year Level</th>
                    <td>Section</td>
                    <th>Student Enrolled</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
            $fetch_grade = mysqli_real_escape_string($db->con, $_GET['grade']);
            $section = new FetchController;
            $result = $FetchSec = $section->fetchSection($fetch_grade);
            if ($result->num_rows > 0) {
                foreach ($result as $rows) {
                    ?>
                    <tbody>
                        <tr>
                            <td>
                                <?= $rows['grade'] ?>
                            </td>
                            <td>
                                <?= $rows['section'] ?>
                            </td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                    <?php
                }
            }
} else {
    echo "<tr><td>No record</td></tr>";
}
?>
    </table>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>