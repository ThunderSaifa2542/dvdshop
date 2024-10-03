<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="insertproductsuccess.php">
        <p>
            <label for="pid">ID</label>
            <input type="text" name="pid" id="pid" required>
        </p>
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </p>
        <p>
            <label for="information">Information</label>
            <input type="text" name="information" id="information" required>
        </p>
        <p>
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" required>
        </p>
        <p>
            <label for="telephone">Date</label>
            <input type="date" name="date" id="date" required>
        </p>
        <p>
            <input class="submit" type="submit" value="บันทึก">
        </p>
    </form>
    <a href='product.php'><button class="btn1">Home</button></a>
</body>
</html>
