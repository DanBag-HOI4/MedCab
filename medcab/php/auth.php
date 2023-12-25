<?
session_start();
require_once "./connect.php";

$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$ochestvo = $_POST["ochestvo"];
$email = $_POST["email"];
$login = $_POST["login"];
$password = $_POST["password"];
$hidden_password = md5($password);
$password_confirm = $_POST["password_confirm"];

$ru = preg_match('~[а-яё]+~iu', $lastname);
if(!$ru) {
    $_SESSION["error"] = "фамилия должна быть на кириллице";
    header("Location: ./reg.php");
}
if($password != $password_confirm) {
    $_SESSION["error"] = "пароли отличаются";
    header("Location: ./reg.php");
}

if(!$_SESSION["error"]) {
    mysqli_query($connect, "INSERT INTO `users` (`id`, `lastname`, `firstname`, `ochestvo`, `email`, `login`, `password`, `role`) VALUES (NULL, '$lastname', '$firstname', '$ochestvo', '$email', '$login', '$hidden_password', 0)");
    header("Location: ../index.php");
}

?>