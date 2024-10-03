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
    $sql = "SELECT * FROM member";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<h1>Member</h1><br>  
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>Tel</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo
                            "<tr>
                            <td>".$row["mid"]."</td>".
                            "<td>".$row["firstname"]."<td>".$row["lastname"]."</td>"."</td>".
                            "<td>".$row["address"]."</td>".
                            "<td>".$row["tel"]."</td>".
                            "<td>"."<a href='editmember.php?mid=".$row["mid"]."'><button> Edit </button></a>"."</td>";
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
        <a href='insertmember.php'><button class="btn1">Insert Member</button></a>
        <br><br>
        <a href='main.html'><button class="btn1">Home</button></a>

</body>
</html>