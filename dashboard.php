<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <title>Dashboard</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . " to the dashboard!</h1>"; ?>
    <p>This page is still in development. So stay tune here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>