<?php
include('conn.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_POST['image'];
mysqli_query($conn, "insert into student(name,email,phone,image) values('$name','$email','$phone','$image')");
header('location:index.php');
