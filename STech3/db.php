<?php
$conn = mysqli_connect("localhost", "root", "", "technical3");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>