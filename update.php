<?php
include('conn.php');
$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
mysqli_query($conn, "update student set name='$name',email='$email',phone='$phone',image='$image' where stud_id='$id' ");
header('location:index.php');
