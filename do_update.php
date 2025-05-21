<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit;
}

// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "march";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    $_SESSION['error'] = "Connection failed: " . $conn->connect_error;
} 

$id = $_POST['id'];
$seed = $_POST['seed'];
$conf = $_POST['conf'];

// update the seed and conference based on the id
// NOTE: you can't update the team name
$sql = "UPDATE team SET seed='".$seed."', conference='".$conf."' WHERE id=" . $id;

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    // communicate any errors using the session ('error' key)
    $_SESSION['error'] = "Error updating record: " . $conn->error;
}
// close the database connection
$conn->close();


header("location:index.php");
?>
