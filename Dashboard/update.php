<?php
  // require('../controllers/dashboardController.php');
   @include('../connection.php');
  $sql = "SELECT * FROM items WHERE iId = $_GET[id]";
  //echo $sql;
  $result = getData($sql);
 //var_dump($result);

  if(isset($_POST['itemName'])){
  // var_dump($_POST);
  // exit();
       $data[0] = $_POST['itemName'];
       // $data[1] = $_SESSION['enroll'];
       $data[2] = $_POST['price'];
       $data[3] = $_POST['itemDesc'];
       // $data[4] = $_POST['exampleRadios'];
       //$data[5] = "IMG"."/".$_FILES['filebutton']['name'];
       $data[6] = $_POST['cat'];
       // $data[7] = $_FILES['filebutton']['tmp_name'];


       $isExecuted = insertData($data);
       
       if($isExecuted){
           $_SESSION['created_message'] = "Item Added Successfully";
           header("Location: dashboard.php");
       }

       else{
           $_SESSION['created_message'] = "Something went wrong";
           header("Location: add.php");
       }
   }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="CSS/NewHomepage.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <title>DashBoard</title>
</head>
<body>
    <?php
    $row = mysqli_fetch_assoc($result);
    $c = $row['iBED'];
    $d=($c=="exchange"? '1':'2');
    echo $d;

    echo'
    <div class="container">
    <div class="row">
    <div class="col-md-3"></div>
<div class="modal-body col-md-6" >
      <form method="POST" action="">
        <input type="text" name="name" hidden id="updateFormId">
        <div class="form-row align-items-center">
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-title">Item Name </label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Item Name</div>
                </div>
                <input required type="text" name="itemName" class="form-control" id="update-name" value="'.$row['iName'].'">
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-content">Description</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Description</div>
                </div>
                <input required type="text" name="itemName" class="form-control" id="update-name" value="'.$row['iDescription'].'">
            </div>
            </div>

            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-title">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Price</div>
                </div>
                <input required type="text" name="price" class="form-control" id="update-price" value="'.$row["iPrice"].'">
            </div>
            </div>



<div class="col-lg-12 my-1 input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select Options</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" required>
    <option >Choose...</option>
    <option value="buy" >Sell</option>
    <option value="exchange" >Exchange</option>
    <option value="donate" >Donate</option>
  </select>
</div>

            <div class="col-auto my-1" style="float:right">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        </form>
      </div>
      <div class="col-md-3"></div>
  </div>
  </div>  
           
';
?>
  </body>
  </html>