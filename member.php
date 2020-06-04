<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'test');
$name = $_POST['user'];
$pass = $_POST['password'];




$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
if (password_verify($pass, $pass_hash))
{
  echo "Mot de passe correct";
}
else
{
  echo "Mot de passe incorrect";
}
?>

?>