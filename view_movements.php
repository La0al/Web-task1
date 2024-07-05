<!DOCTYPE html>
<html>
<head>
    <title>View Latest Movement</title>
    <style>
       
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 class="center">Latest Movement Record</h2>
    <table>
        <tr>
            <th>id</th>
            <th>Directions</th>
        </tr>
        <?php
       
        $conn = mysqli_connect("localhost", "root", "", "training");
        
        
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
       
        $sql = "SELECT * FROM Task1 ORDER BY id DESC LIMIT 1";


        $result = mysqli_query($conn, $sql);
        
        
        if ($result) {
           
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['direction']) . "</td>"; // Assuming 'direction' field name based on insert.php
                echo "</tr>";
            } else {
             
                echo "<tr><td colspan='2' class='center'>No records found.</td></tr>";
            }
        } else {
       
            echo "<tr><td colspan='2' class='center'>ERROR: Could not execute $sql. " . mysqli_error($conn) . "</td></tr>";
        }
        
     
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
