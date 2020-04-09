<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
  <?php
    $server = "127.0.0.1";
    $username = "root";
    $password ="";
    $db = "netland";

    try {

        $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
        $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";
    } catch (PDOException $e) {
        die("Oops.. Something went wrong");
    }
  ?>
</body>
</html>