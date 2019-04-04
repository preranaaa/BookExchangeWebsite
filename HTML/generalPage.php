<?php
include ('../connection.php');
$sql = "SELECT * FROM items;";
$result =  mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>2nd page general</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../CSS/generalPage.css">
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

         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" onclick="location.href = 'login.php';" style="margin-right:0.7%; size:.9rem;"><i class="fas fa-sign-in-alt fa-sm" ></i> Login</button>
         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" data-toggle="modal" data-target="#SignUp-modal" style="size:.9rem;"><i class="fas fa-user-plus fa-sm"></i> Sign Up</button>
         <!---MODAL--------------------------------------------------------->
      <!--
         <div class="modal fade" id="Login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class=" p-5">

    <p class="h4 mb-4 text-center">Log in</p>

    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">


    <button class="btn btn-info btn-block my-4" type="submit" style="background-color:#563d7c; ">Sign in</button>

    <div class="text-center">
        <p>Not a member?
            <a data-dismiss="modal" data-toggle="modal" href="#SignUp-modal">Register</a>
        </p>
    </div>
</form>
        </div>
      </div>
        </div>
      </div>
      <!--MODALL ENDDDD-------------------------->
      <!--SIGNUP Modal---------------------------------------------->
     <!-- <div class="modal fade" id="SignUp-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
     <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <form class="p-5">

 <p class="h4 mb-4 text-center">Sign Up</p>

 <input type="email" id="defaultSignUpFormEmail" class="form-control mb-4" placeholder="E-mail">
 <input type="Enrollment" id="SignUpFormEnroll" class="form-control mb-4" placeholder="Enrollment">
 <input type="password" id="SignUpFormPassword" class="form-control mb-4" placeholder="Password">
 <input type="password" id="ReSignUpFormPassword" class="form-control mb-4" placeholder="Re-Type Password">



 <button class="btn btn-info btn-block my-4" type="submit" style="background-color:#563d7c; ">Sign Up</button>

 <div class="text-center">  
     <p>Already a member?
         <a data-dismiss="modal" data-toggle="modal" href="#Login-modal">Login</a>
     </p>
 </div>
</form>
     </div>
   </div>
     </div>
   </div>
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
  <div class="btn-group ">
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
    <button class="dropdown-item" type="button">Roller Scales</button>
    <button class="dropdown-item" type="button">Set Squares</button>
  </div>
  </div>
</div>
<div class="dropdown-divider"></div>
</div>
<!-------Categories End--------------------------------------------------------------------------------------------------------->


<div class="container">
<div class="row" >
  <?php
  if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            echo '
              <a href="IndividItemPage.php?itemId='.$row['iId'].'" class="col-lg-3 col-md-4 col-sm-12 card-margin">
              <div class="card '.$row['iCategory'].'">
                <img src="../IMG/'.$row['iImage'].'" class="card-img-top" alt="..." style="height:168.667px; width:253px;">
                <div class="card-body card-body-sizing">
                    <h5 class="card-text">'.$row['iName'].'</br><small class="text">Rs : '.$row['iPrice'].'/-</small></h5>    
                </div>
              </div>
            </a>
            ';
          }
        }
  ?>
 
	<div class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="..." style="height:168.667px; width:253px;">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>		
		  </div>
  	</div>
	</div>
	<a href="#" class="col-lg-3 col-md-4 col-sm-12 card-margin">
  	<div class="card">
    	<img src="../IMG/img_lights.jpg" class="card-img-top" alt="...">
    	<div class="card-body card-body-sizing">
      		<h5 class="card-text">Card title</br><small class="text">Rs : 360/-</small></h5>  		
		  </div>
  	</div>
</a>
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