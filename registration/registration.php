<?php

$servername = "localhost";
$username = "root";
$password = "131285Ltea";
$dbname = "register";

$link = mysql_connect($servername, $username, $password) or die(" Unable to connect to server ");

$query = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysql_query($query)) {
    echo "Database <b>$dbname</b> created successfully <br />";
} else {
    echo "Error in creating database: <br /><br />" . mysql_error();
}

if (!mysql_select_db($dbname)) {
    die(mysql_error());
} else {
    echo "success in database selection.";
}
$result = "CREATE TABLE IF NOT EXISTS User (firstname VARCHAR(25), lastname VARCHAR(25), age INT(2), login VARCHAR(15), password VARCHAR(15))";
if (mysql_query($result)) {
    echo "TABLE created.";
} else {
    echo "Error in CREATE TABLE.";
}

$name=$_POST['name'];
$surname=$_POST['surname'];
$age=$_POST['age'];
$login=$_POST['log'];
$pass=$_POST['pass'];
$order = "INSERT INTO User
	   (firstname, lastname, age, login, password)
	  VALUES
	   ('$name','$surname', '$age', '$login', '$pass')";
$res = mysql_query($order);	
if($res)
{
 echo("
Input data is succeed");

?>
  <a href="login.html"><input id="but1" type="submit" name="submit" value="Login"></a>
<?php
}else
{
 echo("
Input data is fail");
}
?>