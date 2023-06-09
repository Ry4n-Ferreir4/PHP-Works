<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: paginaregister.php');
	exit();
}