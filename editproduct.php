<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
        if(!isset($_GET['pid'])){
            header("refresh: 0; url=product.php");
        }
        require 'connect.php';
        $sql = "SELECT * FROM product WHERE pid='$_GET[pid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="editproductsuccess.php">
<p>
<label>ID</label>
<input type="text" name="pid" id="pid" value="<?=$row['pid'];?>" />
</p>
        <p>
            <label>Name</label>
            <input type="text" name="name" id="name" value="<?=$row['name'];?>" />
        </p>
        <p>
            <label>Information</label>
            <input type="text" name="information" id="information" value="<?=$row['information'];?>" />
        </p>
        <p>
            <label>Duration</label>
            <input type="text" name="duration" id="duration" value="<?=$row['duration'];?>" />
        </p>
        <p>
            <label>Date</label>
            <input type="date" name="date" id="date" value="<?=$row['date'];?>" />
            <br><br>
            <input class="submit" type="submit" value="บันทึก">
        </p>
    </form>
    <a href='product.php'><button class="btn2"> Home</button></a>

</body>
</html>