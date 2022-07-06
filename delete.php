<?php
$id = $_GET['$id'];
include('conn.php');
mysqli_query($conn, "delete from student where stud_id='$id' ");
header('location:index.php');
