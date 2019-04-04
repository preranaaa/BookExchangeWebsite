<?php
session_start();
if(isset($_SESSION['username'])){
    echo "
    <script>var isLoggedIN = 'true';
    console.log(isLoggedIN)</script>
    ";
  }
  else{
    echo "
    <script>var isLoggedIN = 'false';
    console.log(isLoggedIN)</script>
    ";
  }
include ('connection.php');
$sql = "SELECT * FROM items;";
$result1 = mysqli_query($con, $sql);
//echo $_GET['category'];
$sql2 = "SELECT * FROM items WHERE iBED = $_GET[category]";
//echo $sql2;
//exit();
$result2 =  mysqli_query($con, $sql2);
//exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>2nd page general</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/generalPage.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<!--NEW NAVBAR-------------------------------------------------------------------------------------------->
<section>
      <nav class="navbar navbar-fixed-top navbar-expand-lg justify-content-between" style="background-color:#563d7c;">
   	 <div class="container-fluid">
   		<a class="navbar-brand" href="#" style="color:#f8f9fa; size:.9rem;" >BoOks&Exchange</a>
   		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   				<span class="navbar-toggler-icon"></span>
   		</button>
   		<div class="collapse navbar-collapse" id="navbarSupportedContent">
   			<ul class="navbar-nav mr-auto">
   		<!--		<li class="nav-item active">
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

        <button class="btn btn-outline-light btn-sm my-2 my-sm-0" id="loginBtn" onclick="location.href = 'login.php';" style="margin-right:0.7%; size:.9rem;"><i class="fas fa-sign-in-alt fa-sm"></i> Login</button>
         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" id="signupBtn" onclick="location.href = 'signup.php';" style="size:.9rem;"><i class="fas fa-user-plus fa-sm"></i> Sign Up</button>
         <!-- After login Buttons-->
         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" id="dashBtn" hidden onclick="location.href = 'Dashboard/dashboard.php';" style="margin-right:0.7%; size:.9rem;"><i class="far fa-list-alt fa-sm"></i> Dashboard </button>
          <button class="btn btn-outline-light btn-sm my-2 my-sm-0" id="logoutBtn" hidden onclick="location.href = 'logout.php';" style="size:.9rem;"><i class="fas fa-sign-out-alt"></i> Logout</button>
          <!--BUttons script--> 
          <script>
          if(isLoggedIN=="true"){
            document.getElementById('dashBtn').hidden = false;
            document.getElementById('logoutBtn').hidden = false;
            document.getElementById('loginBtn').hidden = true;
            document.getElementById('signupBtn').hidden = true;
          }
          else{
            document.getElementById('loginBtn').hidden = false;
            document.getElementById('signupBtn').hidden = false;
          }
          </script>
      <!--Signup end------------------------------------------------->
     </div>
     </div>
   </nav>
    </section>
<!--NEW NAVBAR END---------------------------------------------------------------------------------------->
<!--Prev Navbar
<section>
      <nav class="navbar navbar-fixed-top navbar-expand-lg justify-content-between" style="background-color:#563d7c;">
     <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:#f8f9fa; size:.9rem;" >BoOks&Exchange</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" type="submit" style="margin-right:0.7%; size:.9rem;"><i class="fas fa-sign-in-alt fa-sm" ></i> Login</button>
         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" type="submit" style="size:.9rem;"><i class="fas fa-user-plus fa-sm"></i> Sign Up</button>
     </div>
     </div>
   </nav>
    </section>
 -->
<!--NAVBAR END-------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid" >
  <div class="cat-bar">
  <a class="navbar-brand" href="#" style="color:#000000; size:.9rem; margin-left:2rem;" >BUY</a>
  <!--<div class="btn-group ">
  <button type="button" class="btn btn-light btn-sm dropdown-toggle btn-drop" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    BOOKS
  </button> 
  <div class="dropdown-menu dropdown-menu-lg-right">
    <button class="dropdown-item" type="button">Novels</button>
    <button class="dropdown-item" type="button">Academic</button>
    <button class="dropdown-item" type="button">Fiction</button>
  </div>
  </div>
  <div class="btn-group mr-1">
  <button type="button" class="btn btn-light btn-sm dropdown-toggle btn-drop" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    EG Materials
  </button>
  <div class="dropdown-menu dropdown-menu-lg-right">
    <button class="dropdown-item" type="button">Drafter</button>
    <button class=


    "dropdown-item" type="button">Roller Scales</button>
    <button class="dropdown-item" type="button">Set Squares</button>
  </div>
  </div>
</div>
<div class="dropdown-divider"></div>-->
</div>
</div>
<!-------Categories End--------------------------------------------------------------------------------------------------------->


<div class="container">
<div class="row" >
  <?php
  if(mysqli_num_rows($result2) > 0){
          while($row = mysqli_fetch_assoc($result2)){
            echo '
              <div class="col-lg-3 col-md-4 col-sm-12 card-margin">
              <a href="individItemPage.php?itemId='.$row['iId'].'">
                <div class="card" style="text-decoration: none; color: black;">
                  <img src="'.$row['iImage'].'" class="card-img-top" alt="..." style="height:168.667px; width:253px;">
                  <div class="card-body card-body-sizing">
                      <h5 class="card-text">'.$row['iName'].'</br><small class="text">Rs : '.$row['iPrice'].'/-</small></h5>    
                  </div>
                </div>
                </a>
              </div>
              
            ';
          }
        }
  ?>
<!--
	<div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="IMG/img_lights.jpg" class="card-img-top" alt="..." style="height:168.667px; width:253px;">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>		
		  </div>
  	</div>
	</div>
	<a href="#" class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>  		
		  </div>
  	</div>
</a>-->
	<!--
  <div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>	
		  </div>
  	</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>
    	</div>
  	</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>
    	</div>
  	</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>
      </div>
  	</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>
      </div>
  	</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>
      </div>
  	</div>
	</div>
</div>
</div>-->
<!--Item Display-------------------------------------------------------------------------------->
<!----------------------------------------Footer---------------------------------->

<!----------------------------------------Footer END----------------------------->

</body>
</html>