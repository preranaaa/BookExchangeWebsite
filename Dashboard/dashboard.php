<?php

	session_start();
	require('../controllers/dashboardController.php');
	if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }
    //$enroll = ;
    $result = getItems($_SESSION['enroll']);
	    // echo $result;
	    // exit();

    if(isset($_POST['name'])){
    $id = $_GET['iId'];
    $name = $_POST['name'];
    $description = $_POST['desc'];
    $price = $_POST['price'];
    $category = $_POST['cat'];

    $sql = "UPDATE items SET iName='$name',iDescription='$description',iPrice='$price',iBED='$category' WHERE iId='$id'";

   var_dump($sql);
   exit();

    $isExecuted = setData($sql);

    if($isExecuted){}
    
    header("Location: dashboard.php");
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

	<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    
                </button>
                <a class="navbar-brand" href="#"><i class="far fa-hand-paper mr-2"></i> Welcome</a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../index.php"> <i class="menu-icon fas fa-home"></i>Home </a>
                    </li>
                    <a><h3 class="menu-title">Products Entry</h3><!-- /.menu-title -->
                    <li>
                    	<!--<a href="create add.php">-->
                        <a href="add.php"><i class=" menu-icon  fas fa-plus "></i> Add Product</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>



<!----------------------------->
   <div id="right-panel" class="right-panel">

        <!-- Header-->

        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-lg-7">
                    <h3>Dashboard</h3>       
                </div>
                <div class="col-sm-5">
                    <div class="header-left" >
                        
                        <div class="user-area float-right">
                            <a>
                               <!-- <span >Hi! <?php echo $_SESSION['username']; ?></span>-->
                            </a>
                            <button class="btn btn-info btn-sm my-2 my-sm-0" id="signupBtn"  style="size:.9rem;"><i class="fas fa-user-plus fa-sm"></i> Profile</button>
                            <button class="btn btn-info btn-sm my-2 my-sm-0" id="logoutBtn" onclick="location.href ='../logout.php';" style="size:.9rem;"><i class="fas fa-sign-out-alt"></i> Logout</button>
            
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <section>
        <div class="container">
		<div class="content">
			<div class="row" style="margin-top:0.6rem; font-weight:bold;">
				<div class="col-lg-4">
					<div class="row">
					<div class=col-lg-4>
						ID
					</div>
					<div class="col-lg-8">
						Item Name
					</div>
				</div>
				</div>
				<div class="col-lg-3">
					Description
				</div>
				<div class="col-lg-5">
					<div class="row">
					<div class=col-lg-3>
						Price
					</div>
					<div class=col-lg-3>
						Category
					</div>

					<div class="col-lg-6">
							<div class="col-lg-6">
							</div>
							<div class="col-lg-6">
							</div>
					</div>
				</div>
				</div>
			</div>
			<hr>
			<?php
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo'
						<div class="row" style="margin-top:0.6rem;">
							<div class="col-lg-4">
								<div class="row">
								<div class=col-lg-4>
									<div id="i-Id-'.$row['iId'].'">'.$row['iId'].'</div>
								</div>
								<div class="col-lg-8">
									<div id="i-Name-'.$row['iId'].'">'.$row['iName'].'</div>
								</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div id="i-desc-'.$row['iId'].'">'.$row['iDescription'].'</div>
							</div>
							<div class="col-lg-5">
									<div class="row">
									<div class=col-lg-3>
										<div id="i-price-'.$row['iId'].'">'.$row['iPrice'].'</div>
									</div>
									<div class=col-lg-3>
										<div id="i-cat-'.$row['iId'].'">'.$row['iBED'].'</div>
									</div>
                                    
									<div class="col-lg-6">
										<!--<div class="col-lg-6">
										<a href="update.php?id='.$row['iId'].'" class="btn btn-primary"><i class="fas fa-edit"></i></a>
										
											<button name="'.$row['iId'].'" onclick="toggleModel(this);" data-toggle="modal" data-target="#updateModal" class="btn btn-primary"><i class="fas fa-edit"></i></button>
										</div>-->
										<div class="col-lg-6">
											<a href="delete.php?id='.$row['iId'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
										</div>
									</div>
									</div>
								</div>
							</div>
						<hr>
						';
					}

				}
			?>
        </div>
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="Add Members" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form method="POST" action="#">
        <input type="text" name="name" hidden id="updateFormId">
        <div class="form-row align-items-center">
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-title">Item Name </label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Item Name</div>
                </div>
                <input required type="text" name="name" class="form-control" id="update-name" placeholder="">
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-content">Description</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Description</div>
                </div>
                <textarea required type="text" name="desc" class="form-control" id="update-content" placeholder="" rows="4"> </textarea>
            </div>
            </div>

            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-title">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Price</div>
                </div>
                <input required type="text" name="price" class="form-control" id="update-price" placeholder="">
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-content">Select Option</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Select Option</div>
                </div>
                <select class="custom-select my-1 mr-sm-2" id="upadate-cat" name="cat" required>
                  <option value="buy">Sell</option>
                  <option value="exchange">Exchange</option>
                  <option value="donate">Donate</option>
                 </select>
            </div>
            </div>
            <div class="col-auto my-1" style="float:right">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    <script type="text/javascript">
        function toggleModel(btn){
            //console.log(btn.name);
            $('#updateFormId')[0].value = btn.name;
            $('#update-name')[0].value = $('#i-Name-'+btn.name)[0].innerHTML;
            $('#update-content')[0].value = $('#i-desc-'+btn.name)[0].innerHTML;
            $('#update-price')[0].value = $('#i-price-'+btn.name)[0].innerHTML;
            $('#update-cat')[0].value = $('#i-cat-'+btn.name)[0].innerHTML;
            //$('#update-tags')[0].value = $('#post-tags-'+btn.name)[0].innerHTML;
            //document.getElementById('addMembers').classList.add('show');
        }
    	</script>
  </div>
</div>
        </div>
        

        </section>
        

        </div> <!-- right panel div -->
        <!-- /Display -->
        <!--Display end-->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script type="text/javascript">
        function toggleModel(btn){
            //console.log(btn.name);
            $('#updateFormId')[0].value = btn.name;
            $('#update-title')[0].value = $('#book-name-'+btn.name)[0].innerHTML;
            $('#update-excerpt')[0].value = $('#book-author-'+btn.name)[0].innerHTML;
            $('#update-content')[0].value = $('#book-desc-'+btn.name)[0].innerHTML;
            //$('#update-tags')[0].value = $('#post-tags-'+btn.name)[0].innerHTML;
            //document.getElementById('addMembers').classList.add('show');
        }
    	</script>

</body>
</html>