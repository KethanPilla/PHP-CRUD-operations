<?php session_start();

// TODO: Notice that this code "works" but it does not check the password.
// As long as the end user enters a username that is in the database, a
// Bogus Unauthenicated User will be granted access to the system.
// To fix this see the code below.


// create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "march";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create variables for the input form data
$endUser = $_POST['enduser'];
$userPass = $_POST['userpass'];
$hashedPassword = "";

// query the database for the input user's credentials
$sql = "SELECT password FROM users where username = '".$endUser."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $hashedPassword = $row["password"];
    }
} else {
    $_SESSION['error'] = "invalid username or password";
    header("location:index.php");
    $conn->close();
    exit;
}


// TODO: authenticate the user using password_verify
// if the input password is valid, put the user in the SESSION 
// (using the key "username") and clear the "error" in the session (just to
// be sure)
// otherwise, put "invalid username or password" in the session using 
// the "error" key
if(password_verify($userPass,$hashedPassword) == true)
{
    $_SESSION['username'] = $endUser;
    unset($_SESSION['error']);
}
 else {
    $_SESSION['error'] = "invalid username or password";
}

// TODO: once you have coded your solution above, comment or delete this 
// line of code that mimics a valid user
//$_SESSION['username'] = "Bogus Unauthenicated User";

// close the database connection
$conn->close();


header("location:index.php");
?>
