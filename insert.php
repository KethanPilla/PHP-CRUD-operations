<?php session_start();
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
        <form action="do_insert.php" method="post">
            Seed: <input type="number" name="seed"><br/>
            School: <input type="text" name="school"><br/>
            Conference: <input type="text" name="conf"><br />
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
