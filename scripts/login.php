<?php
require('connect.php');


$conn = connect();

$name = $_POST['name'];
$password = $_POST['password'];

$name = $conn->real_escape_string($name);
$password = $conn->real_escape_string($password);

$name = trim($name);
$password = trim($password);

$sql = "SELECT password FROM `". $name ."`";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$real_password = $row['password'];



if($password == $real_password) {
    $conn->close();

    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['title'] = "| " . $name . "'s Notes";

    header("Location: ../notes.php");
    die();
} else if ($real_password == '') {
    $sql = 'CREATE TABLE `' . $name . '` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    subject VARCHAR(50),
    note VARCHAR(50)
    )';

    if ($conn->query($sql) === TRUE) {

        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['title'] = "| " . $name . "'s Notes";

        $stmt = $conn->prepare('INSERT INTO `' . $name . '` (name, password) VALUES (?, ?)');
        $stmt->bind_param("ss", $name, $password);


        $name = $_POST['name'];
        $password = $_POST['password'];
        $stmt->execute();  

        $stmt->close();
        $conn->close();
        
        header("Location: ../notes.php");
        die();
    } else {
        echo "Error creating table: " . $conn->error;
    }
}   

$conn->close();
?>