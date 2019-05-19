<?php
require('connect.php');
session_start();


$conn = connect();

$name = $_SESSION['name'];

$stmt = $conn->prepare('INSERT INTO `' . $name . '` (subject, note) VALUES (?, ?)');
$stmt->bind_param("ss", $subject, $note);


$subject = $_POST['subject'];
$note = $_POST['note'];
$stmt->execute();  

$stmt->close();
$conn->close();

header("Location: ../notes.php");
die();

?>