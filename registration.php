<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'test');
$name = $_POST['user'];
$pass = $_POST['password'];
$mail = $_POST['email'];

$mdpass = md5($pass);
$shapass = sha1($mdpass);
$crypass = password_hash($shapass, PASSWORD_DEFAULT);



$s = " select * from users where username = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = " insert into users (username , password, mail) values ('$name' , '$crypass', '$mail')";
    mysqli_query($con, $reg);
    echo "Reg Succes";
    
};
?>
