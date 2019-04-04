<?php 
include_once('../connection.php');
session_start();

function registerUser(){
    global $con;
    $isRegistered = false;
    $user = mysqli_real_escape_string($con,$_POST['username']);
    $enroll = mysqli_real_escape_string($con,$_POST['rollno']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $password = md5($password);

    $sql = "INSERT INTO `user_details`(`enrollNo`,`uName`, `uEmail`, `uPassword`) VALUES('".$enroll."','".$user."','".$email."','".$password."')";
   /* echo"
    '.$enrol.''
    ";
*/
    $isRegistered = setData($sql);

    if($isRegistered){
        $_SESSION['username'] = $user;
    }

    return $isRegistered;
    
}
    
?>