<?php

$servername = "localhost"; // Replace with your server name
$username = "mihai"; // Replace with your MySQL username
$password = "yxt23V9_4"; // Replace with your MySQL password
$dbname = "stu_mihai"; // Replace with your MySQL database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}