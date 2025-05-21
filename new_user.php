<?php session_start();
// NOTE: this code "works", but you need to address the TODO item below

$form_username = trim($_POST['user']);
$new_password = trim($_POST['pwd']);
$repeat = trim($_POST['repeat']);

// TODO: make sure that pwd and repeat match.  If they don't match, send the 
// user back to the form with an appropriate error message:
// Error: passwords must match
if ($new_password !== $repeat)
{
    $_SESSION['error'] = "passwords must match";
    header("location:register.php");
    exit();
}

$hashed_password = password_hash(trim($_POST['pwd']), PASSWORD_DEFAULT);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "march";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// make sure that the new user is not already in the database
$sql = "SELECT * FROM users where username = '$form_username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['error'] = "Error: invalid username";
    header("location:register.php");
    $conn->close();
    exit;
}

$sql = "INSERT INTO users(username, password) VALUES('$form_username', '$hashed_password')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $form_username;
    unset($_SESSION['error']);
} else {
    $_SESSION['error'] = "Error: " . $sql . " " . $conn->error;
}

$conn->close();
header("location:index.php");
?>
