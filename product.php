<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
    require 'connect.php';
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<h1>Product</h1><br>  
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Information</th>
                    <th>Duration</th>
                    <th>Date</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["pid"]."</td>".
                                "<td>".$row["name"]."</td>".
                                "<td>".$row["information"]."</td>".
                                "<td>".$row["duration"]."</td>".
                                "<td>".$row["date"]."</td>".
                                "<td>"."<a href='editproduct.php?pid=".$row["pid"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>  
        <br>
        <a href='insertproduct.php'><button class="btn1">Insert Product</button></a>
        <br><br>
        <a href='main.html'><button class="btn1">Home</button></a>

</body>
</html>