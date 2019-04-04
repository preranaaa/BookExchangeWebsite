<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../CSS/Login_SignUpModal.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<title> Login SignUp Navbar </title>

</head>
</body>
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

         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" data-toggle="modal" onclick="location.href = 'login.php';" style="margin-right:0.7%; size:.9rem;"><i class="fas fa-sign-in-alt fa-sm" ></i> Login</button>
         <button class="btn btn-outline-light btn-sm my-2 my-sm-0" data-toggle="modal" data-target="#SignUp-modal" style="size:.9rem;"><i class="fas fa-user-plus fa-sm"></i> Sign Up</button>
         <!---MODAL--------------------------------------------------------->
        <!-- <div class="modal fade" id="Login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
   </div>-->  
      <!--Signup end------------------------------------------------->
     </div>
     </div>
   </nav>
    </section>
    <!---NAVBAR END----------------------------------------------------------------------------------------------------------->
   
  </body>
</html>
