<!DOCTYPE>
<html>

<head>
    <title>student data</title>
</head>

<body>
    <div>
        <form method="POST" action="add.php">
            <label>name:</label><input type="text" name="name"><br><br>
            <label>email:</label><input type="text" name="email"><br><br>
            <label>phone:</label><input type="tel" name="phone"><br><br>
            <label>image:</label><input type="file" name="image"><br><br>

            <input type="submit" name="add">
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <thead>
                <th>name</th>
                <th>email</th>
                <th>phone</th>

                <th>image</th>
            </thead>
            <tbody>
                <?php
                include('conn.php');
                $query = mysqli_query($conn, "select * from student");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['image']; ?></td>

                        <td>
                            <a href="edit.php?id=<?php echo $row['stud_id']; ?>">edit</a>
                            <a href="edit.php?id=<?php echo $row['stud_id']; ?>">delete</a>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>