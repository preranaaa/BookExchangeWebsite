<?php

$con = mysqli_connect("localhost", "root", "", "booksexchange");
	function getData($sql){
      global $con;
      $result = mysqli_query($con,$sql);
      return $result;

    }
    
    function setData($sql){
      global $con;
      return mysqli_query($con,$sql);
      
    }
/*
if(!$con){

    echo "Error: ".mysqli_error();
}
/*else{
	echo"Success";
}*/
?>