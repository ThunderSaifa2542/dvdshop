<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
        if(!isset($_GET['mid'])){
            header("refresh: 0; url=member.php");
        }
        require 'connect.php';
        $sql = "SELECT * FROM member WHERE mid='$_GET[mid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="editmembersuccess.php">
<p>
<label>ID</label>
<input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" />
</p>
        <p>
            <label>Firstname</label>
            <input type="text" name="firstname" id="firstname" value="<?=$row['firstname'];?>" />
        </p>
        <p>
            <label>Lastname</label>
            <input type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>" />
        </p>
        <p>
            <label>Address</label>
            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />
        </p>
        <p>
            <label>Tel</label>
            <input type="text" name="tel" id="tel" value="<?=$row['tel'];?>" />
            <br><br>
            <input class="submit" type="submit" value="บันทึก">
        </p>
    </form>
    <a href='member.php'><button class="btn2"> Home</button></a>

</body>
</html>