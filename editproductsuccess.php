<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require 'connect.php';
        $sql_update="UPDATE product SET name='$_POST[name]',information='$_POST[information]',duration='$_POST[duration]' ,date='$_POST[date]'WHERE pid='$_POST[pid]' ";
        $result= $conn->query($sql_update);
        if(!$result) {
            die("Error God Damn it : ". $conn->error);
            }
        else {
            echo "Edit Success <br>";
            header("refresh: 1; url=product.php");
            }
    ?>
</body>
</html>