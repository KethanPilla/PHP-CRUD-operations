<?php session_start();
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        exit;
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "march";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $school = $_POST['school'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // TODO: write the correct sql statement that will delete 
            // the appropriate row using the school name from the delete form
            $sql = "DELETE FROM team WHERE school ='$school'";
            if ($conn->query($sql) === TRUE) {
                $num_deleted = mysqli_affected_rows($conn);
                echo "Deleted $num_deleted teams<br>";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

            $conn->close();
        ?>
        <a href="index.php">Main menu</a>
    </body>
</html>
