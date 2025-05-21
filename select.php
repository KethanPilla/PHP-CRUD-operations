<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!-- TODO: display all team data except id -->
        <!-- TODO: display must be ordered by the seed value -->
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "march";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT seed, school, conference FROM team ORDER BY seed";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        echo "seed: " . $row["seed"]. " - school: " . $row["school"]. ", conference: " . $row["conference"]. "<br>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
        ?>
        <footer>
            <a href="index.php">Main menu</a>
        </footer>
    </body>
</html>
