<?php
$server = "localhost:3308";
$user = "root";
$pass = "";
$database = "toc";
$conn = "";
$conn = mysqli_connect($server,$user,$pass,$database);
if(!$conn)
{
    echo "Error! Couldn't connect!";
}
else
{
    echo "Connected successfully!!";
}
?>
