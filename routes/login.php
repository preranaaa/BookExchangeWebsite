<?php
    require('../controllers/loginController.php');
    if($_POST!=null){
        if(!loginUser()){
            /*echo'loginUser()';*/
            $_SESSION['error'] = "Username or Password didn't match";
            header('Location: ../login.php?login=error');
        }
        else{
            header('Location:../index.php?login=success');
        }
    }

    else{
        $_SESSION['error'] = "This page only accepts post requests";
        header('Location: error.php');
    }
     
?>