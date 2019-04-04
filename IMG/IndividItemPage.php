<?php
  include("connection.php");
  $sql = "SELECT * FROM items WHERE iId = $_GET[itemId]";
  $result = mysqli_query($con, $sql);
/*  $sql2 = "SELECT * FROM items WHERE iCategory=(SELECT iCategory FROM items WHERE iId = $_GET[itemId])";
  $result2 = mysqli_query($con, $sql2);*/
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/IndividItemPage.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title> Individual Item </title>

</head>
<body>
    <section>
      <nav class="navbar navbar-fixed-top navbar-expand-lg justify-content-between" style="background-color:#563d7c;">
     <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:#f8f9fa; size:.9rem;" >BoOks&Exchange</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
        <!--        <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
        -->
            </ul>

         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" onclick="location.href = 'login.php';" style="margin-right:0.7%; size:.9rem;"><i class="fas fa-sign-in-alt fa-sm" ></i> Login</button>
         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" onclick="location.href = 'signup.php';" style="size:.9rem;"><i class="fas fa-user-plus fa-sm"></i> Sign Up</button>
         
      <!--Signup end------------------------------------------------->
     </div>
     </div>
   </nav>
    </section>
    <!---NAVBAR END----------------------------------------------------------------------------------------------------------->

<div class="container" style="height: 450px;">
  <?php
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
  echo'
  <div class="indiItem">
        <div class="indiItemImage">
            <img src="IMG/'.$row['iImage'].'" alt="..." style="width: 416px;height: 317px;"/>
        </div>
        <div class="indiItemInfo">
            <h1>'.$row['iName'].'</h1>
            <p>'.$row['iDescription'].'</p>
            <button type="button" class="btn btn-success btn-lg btn-buy"><i class="fas fa-1x fa-rupee-sign">&nbsp</i>'.$row['iPrice'].'</button>
        </div>
    </div>
  ';
  }
?>
    
</div>
<!--SIMILATR ITEM---------------------------------------------------------------------------------------------------------------->
<section class="recently-add" style="background-color:#3C1E00">
      <hr />
      <p class="font-weight-bolder text-center tag " >Similar Items
      </p>
      <div class="container">
        <div class="row itemSelection" style="background-color:#3C1E00">
          <?php
            if(mysqli_num_rows($result2) > 0){
            $row = mysqli_fetch_assoc($result2);
            echo'
              <a href="IndividItemPage.php?itemId='.$row['iId'].'" class="col-lg-3 col-md-6 col-sm-12" >
            <div class="card card-size">
            <div class="card-body card-body-size">
            <img src="IMG/'.$row['iImage'].'" class="card-img-top" alt="...">
              <h5 class="card-title">Image</h5>
              <p class="card-text">Item Description </p>
            </div>
            <div class="card-footer card-footer-bottom">
              <large class="font-weight-bolder"><a>Price : <i class="fas fa-rupee-sign"></i>360</a></large>
            </div>
            </div>
          </div>
            ';
          ?>
          <div class="col-lg-3 col-md-6 col-sm-12" >
            <div class="card card-size">
            <div class="card-body card-body-size">
              <h5 class="card-title">Image</h5>
              <p class="card-text">Item Description </p>
            </div>
            <div class="card-footer card-footer-bottom">
              <large class="font-weight-bolder"><a>Price : <i class="fas fa-rupee-sign"></i>360</a></large>
            </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12" >
            <div class="card card-size" >
            <div class="card-body card-body-size">
              <h5 class="card-title">Image</h5>
              <p class="card-text">Item Description</p>
            </div>
            <div class="card-footer card-footer-bottom">
              <large class="font-weight-bolder"><a>Price : <i class="fas fa-rupee-sign"></i>360</a></large>
            </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card card-size">
              <div class="card-body card-body-size">
                <h5 class="card-title">Image</h5>
                <p class="card-text">Item Description</p>
              </div>
              <div class="card-footer card-footer-bottom">
                <large class="font-weight-bolder"><a>Price : <i class="fas fa-rupee-sign"></i>360</a></large>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card card-size">
              <div class="card-body card-body-size">
                <h5 class="card-title">Image</h5>
                <p class="card-text">Item Description</p>
              </div>
              <div class="card-footer card-footer-bottom">
                <large class="font-weight-bolder"><a>Price : <i class="fas fa-rupee-sign"></i>360</a></large>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--Similar item end-->     
<!----------------------------------------Footer---------------------------------->
<footer  style="width:100% ; background-color:#000000">
      <div class="container" style="padding-top:1.2rem;">
        <div class="row">
         <div class="col-sm-6 col-lg-6" style="display:inline; align-content: center;color:white;   float:left;" >
           <h5>About BoOks&Exchange</h5>
           <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua.  nulla pariatur.unt in culpa qui officia deserunt mollit anim id est laborum."</p>
          <div class="social" style="color:white; padding-left:8.5rem;">
            <i class="fab fa-facebook fa-2x fa-icon" href="facebook.com"></i>
            <i class="fab fa-instagram fa-2x fa-icon" href="instagram.com"></i>
            <i class="fab fa-twitter fa-2x fa-icon" href="twitter.com"></i>
            <i class="fa fa-envelope fa-2x fa-icon" href="gmail.com"></i>
          </div>
         </div>
         <div class="col-sm-6 col-lg-6 abt-head" style="">
          <h5>Subscribe to our Newsletter</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
          <div>
            <input type="email" class="form-ctrl"  placeholder="Enter your email">
          <div>
            <button class="btn btn-primary btn-md "  type="submit" style="margin-top:1.2rem;">Subscribe</button>
          </div>
          </div>
         </div>
      </div>
    </div>
     <!--
      <div class="container row" style="margin-top: 2rem; padding-left: 43%; ">
       <div class="social" style="color:white;">
          <i class="fab fa-facebook fa-2x fa-icon"></i>
          <i class="fab fa-instagram fa-2x fa-icon"></i>
          <i class="fab fa-twitter fa-2x fa-icon"></i>
          <i class="fa fa-envelope fa-2x fa-icon"></i>
        </div>
      </div>
    -->
    </footer>
<!----------------------------------------Footer END------------------------------>
  </body>
</html>