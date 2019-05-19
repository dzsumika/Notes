<!DOCTYPE html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', false);
ini_set('html_errors', false);

session_start();
$_SESSION['title'] = '';
?>

<html>

	<head>

		<meta charset="UTF-8"/>
		<title> Notes <?php echo $_SESSION['title']; ?> </title>
		<link rel="stylesheet" type="text/css" href="design/main.css">
		<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/animations.js"></script>    

	</head>

	<body>
		<div id="wrapper">

			<a href="index.php">
				<div id="logo">
					<img src="media/notes.png"/>
				</div>
			</a>