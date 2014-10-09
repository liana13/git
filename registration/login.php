<?php

$servername = "localhost";
$username = "root";
$password = "131285Ltea";
$dbname = "register";

$link = mysql_connect($servername, $username, $password, $dbname);

$result = mysqli_query($link,"SELECT * FROM User");

while($row = mysqli_fetch_array($result)) {
  echo $row['lastname'] . " " . $row['firstname'];
  echo "<br>";
}
echo var_dump($row);
mysqli_close($link);
?>