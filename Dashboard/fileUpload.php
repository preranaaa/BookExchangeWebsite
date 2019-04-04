<?php

include('../connection.php');

$fileCount = count($_FILES['dogImages']['name']);

for($i=0; $i<$fileCount; $i++){
    $filename = $_FILES['dogImages']['name'][$i];
    $fileTmpName = $_FILES['dogImages']['tmp_name'][$i];
    $sql = "INSERT INTO gallery(dogBreed, dogImage) VALUES('$_POST[dogBreed]','$filename')";
    
    mysqli_query($con, $sql);

    move_uploaded_file($fileTmpName, 'upload/'.$filename);
    header('Location: dashboard.php');
}


?>