<?php
include('conn.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from student where stud_id='$id' ");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>edit</h2>
    <form method="POST" action="update.php?id=<?php echo $id; ?>">
        <input type="text" value="<?php echo $row['name']; ?>" name="name">
        <input type="text" value="<?php echo $row['email']; ?>" name="email">
        <input type="text" value="<?php echo $row['phone']; ?>" name="phone">
        <input type="submit" name="sumbit">
        <a href="index.php">back</a>
    </form>
</body>

</html>