<?php

include 'conn.php';

$id = $_GET['id'];

$q = "DELETE FROM `curdyoutube` WHERE id = $id";

mysqli_query($con, $q);

header('location:display.php');

?>