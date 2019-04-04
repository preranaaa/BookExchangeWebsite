<?php 
include_once('../connection.php');
session_start();

function loginUser(){
    global $con;
    $isLoggedin = false;
    $user = mysqli_real_escape_string($con,$_POST['enroll']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $password = md5($password);

    $sql = "select * from `user_details` where (uEmail='".$user."' OR enrollNo='".$user."') AND uPassword='".$password."' LIMIT 1";

    $result = getData($sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['uName'];
        $_SESSION['enroll'] = $row['enrollNo'];
        $isLoggedin = true; 
    }

    return $isLoggedin;
}
    
?>