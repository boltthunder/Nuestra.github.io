<?php

session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Home';

include 'include/header-footer/header.php';
include 'include/header-footer/navagation.php';
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
</div>
<?php
include 'include/header-footer/footer.php';
?>