<?
require_once "./connect.php";

$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$ochestvo = $_POST["ochestvo"];
$email = $_POST["email"];
$login = $_POST["login"];
$password = $_POST["password"];
$password_confirm = $_POST["password_confirm"];


mysqli_query($connect, "INSERT INTO `users` (`id`, `lastname`, `firstname`, `ochestvo`, `email`, `login`, `password`, `password`) VALUES (NULL, '$lastname', '$firstname', '$ochestvo', '$email', '$login', '$password')");
?>