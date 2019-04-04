<?php
    @include('../connection.php');
    
    function getItems($enroll){
    	$sql = 'select * from items where enroll ="'.$enroll.'"';

    	$result = getData($sql);
    	 // var_dump($result); 
    	// exit();
    	return $result;
    }
	

    function insertData($data){
     $iName = $data[0];
     $enroll = $data[1];
     $iPrice = $data[2];
     $iDescription = $data[3];
     $iBED = $data[4];
     $iImage = $data[5];
     $iCategory = $data[6];
     $tmp_img_name = $data[7];

     /*  $id = $data[0];
       $username = $data[1];
       $title = $data[2];
       $creation_date = $data[3];
       $excerpt = $data[4];
       $content = $data[5];
       $header_image = $data[6];
       $tags = $data[7];
       $tmp_img_name = $data[8];
       $sql = "INSERT INTO `blog_posts`(`username`, `title`, `creation_date`, `excerpt`, `content`, `header_image`, `tags`) VALUES ('$username','$title','$creation_date','$excerpt','$content','$header_image','$tags')";
	*/
       $sql = "INSERT INTO `items`(`iName`, `iId`, `enroll`, `iPrice`, `iDescription`, `iBED`, `iImage`, `iCategory`) VALUES ('$iName','$iId','$enroll','$iPrice','$iDescription','$iBED','$iImage','$iCategory')";
       echo $sql;
       $isExecuted = setData($sql);

       if($isExecuted){

           move_uploaded_file($tmp_img_name,'../'.$iImage);
       }

       return $isExecuted;
    }
    function singleItem($itemno){
    	$sql = 'select * from items where iId="'.$itemno.'"';
    	$result = getData($sql);
    	echo $result;
    	return $result;
    }
?>