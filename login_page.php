<?php
$name = $_POST['eml'];
$pswrd = $_POST['pass'];

$db=mysqli_connect('localhost:3306','root','Pass@123','online_bus') or die(mysqli_error($db));

$querry = "SELECT * FROM user__details WHERE email='$name' AND password='$pswrd'";
$result= mysqli_query($db, $querry) or die("Could not execute querry");
if(mysqli_num_rows($result)==1){
    header('location: landing_page.php');
}
else {
    echo("<font size='5' color= 'red'>Invalid user id or password</font>");
}
