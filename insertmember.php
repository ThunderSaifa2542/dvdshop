<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="insertmembersuccess.php">
        <p>
            <label for="mid">ID</label>
            <input type="text" name="mid" id="mid" required>
        </p>
        <p>
            <label for="name">Firstname</label>
            <input type="text" name="firstname" id="name" required>
        </p>
        <p>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" required>
        </p>
        <p>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>
        </p>
        <p>
            <label for="telephone">Tel</label>
            <input type="text" name="tel" id="telephone" required>
        </p>
        <p>
            <input class="submit" type="submit" value="บันทึก">
        </p>
    </form>
    <a href='member.php'><button class="btn1">Home</button></a>
</body>
</html>
