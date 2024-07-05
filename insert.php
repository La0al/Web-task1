<!DOCTYPE html>
<html>
<head>
    <title>Insert Page page</title>
</head>
<body>
    <center>
        <?php
       
        $conn = mysqli_connect("localhost", "root", "", "training");
        
       
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
       
     
$name = $_POST['btn'];


$sql = "INSERT INTO Task1 (id, direction) VALUES (NULL, '$name')";


if (mysqli_query($conn, $sql)) {
    header("Location: index.php"); 
    exit();
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}

        
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
