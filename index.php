<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
  <?php
      echo "<h1>Welkom op het netland beheerderspaneel</h1>";
    $server = "127.0.0.1";
    $username = "root";
    $password ="";
    $db = "netland";

    $conn = null;
    try {
          $conn = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
          die("Oops.. Something went wrong");
        }
        ?>
        
<h2>Series</h2>
  <table>
    <tr>
      <th>Title</th>
      <th>Rating</th>
    </tr>
    <?php
    $sql = "SELECT title, rating from series";
        $result = $conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
    
        if ($result->rowCount() > 0) {
          while ($row = $result->fetch()) {
            echo "<tr><td>". $row["title"]. "</td><td>". $row["rating"]. "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "geen data gevonden";
        }
        ?>

        <h2>Films</h2>
  <table>
    <tr>
      <th>Title</th>
      <th>Duur</th>
    </tr>
    <?php
    $sql = "SELECT title, duur from films";
        $result = $conn->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
    
        if ($result->rowCount() > 0) {
          while ($row = $result->fetch()) {
            echo "<tr><td>". $row["title"]. "</td><td>". $row["duur"]. "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "geen data gevonden";
        }
        $conn = null;
        ?>
  </table>
</body>
</html>