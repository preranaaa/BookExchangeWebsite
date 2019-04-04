<?php
/*  session_start();

  include('database/connection.php');

  if(isset($_SESSION['email']) && isset($_SESSION['usertype'])){
    if(!$_SESSION['usertype'] == "admin"){
      header("Location: home.php");
    }
  }
  else{
    header("Location: login.php");
  }

  $sql = "SELECT * FROM `book-details`";

  $book_result = getData($sql);

  if(isset($_POST['name'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $desc = $_POST['desc'];
    $category = $_POST['category'];

    $sql = "UPDATE `book-details` SET `book_name`='$name',`author`='$author',`book_desc`='$desc',`category`='$category' WHERE id=$id";

    $isExecuted = setData($sql);

    if($isExecuted){}
    
    header("Location: retrievebook.php");
  }

*/
?>




<!DOCTYPE html>
<html>
<head>
	<title>Retrieve</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="assests/css/retrieve.css">
  
<style type="text/css">
 
  .col{
    padding:0;
  }

  .col-1{
    padding: 0;
    margin:0;
  }
</style>

</head>

    <body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

     <!-- NAVBAR -->
   
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
    	
  <a class="navbar-brand" href="#">
    <img src="C:\Users\IDEAPAD 330\Documents\WT\web images\tran logo.png" width="60" height="50" class="d-inline-block align-top" alt="">
    
  </a>
  <a class="navbar-brand" href="#">BOOKROVERTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
   <button type="button" class="btn btn-outline-light">Search</button>
    </dark>
  </div>
  <a style="padding-left:25px;" href='#'><i class="fas fa-user"></i></a>
  <a style="padding-left:25px;" href='#'><i class="fas fa-cart-arrow-down"></i></a>
</nav>  
</form>
</div>
</nav>

<div id="center">
<!-- Example split danger button -->
<div class="btn-group">

    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>




<div class="btn-group">
 
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
<div class="btn-group">
  
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>


<section>



    <div id="right-panel" class="right-panel">

        
           
        <div class="content">
            <div class="row" style="margin-top:0.6rem">
                <div class="col-lg-8 ">
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 style="font-weight:bold">No.</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 style="font-weight:bold">Name</h6>
                        </div>
                        <div class="col-lg-7">
                            <h6 style="font-weight:bold">Author</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 style="font-weight:bold">Category</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 style="font-weight:bold;text-align:center;margin-right:1.5rem">Action</h6>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-3">

                <?php/*
          if(mysqli_num_rows($book_result) > 0){
              $id = 1;
              while($row = mysqli_fetch_assoc($book_result)){
                echo '
                     
                <div class="row" style="margin-top:0.6rem">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-2">
                            <div>'.$id.'</div>
                        </div>
                        <div class="col-lg-3">
                            <div id="book-name-'.$row['id'].'">'.$row['book_name'].'</div>
                        </div>
                        <div class="col-lg-7">
                            <div id="book-author-'.$row['id'].'">'.$row['author'].'</div>
                        </div>
                    </div>
                </div>
                <div id="book-desc-'.$row['id'].'" hidden>'.$row['book_desc'].'</div>
    
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="book-category-'.$row['id'].'">'.$row['category'].'</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="../view-blog.php?id='.$row['id'].'" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                </div>
                                <div class="col-lg-3">
                                    <button name="'.$row['id'].'" onclick="toggleModel(this);" data-toggle="modal" data-target="#addMembers" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                </div>
                                <div class="col-lg-3">
                                    <a href="delete.php?id='.$row['id'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <hr class="my-3">
            ';
            $id+=1;
    
                  }
              }*/
               
        ?>

        </div>


<div class="modal fade" id="addMembers" tabindex="-1" role="dialog" aria-labelledby="Add Members" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form method="POST" action="#">
        <input type="text" name="id" hidden id="updateFormId">
        <div class="form-row align-items-center">
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-title">Book Name </label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Book Name</div>
                </div>
                <input required type="text" name="name" class="form-control" id="update-title" placeholder="Enter Title">
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-excerpt">Author</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Author</div>
                </div>
                <textarea required type="text" name="author" class="form-control" id="update-excerpt" placeholder="Enter Excerpt" rows="2" maxlength="200"> </textarea>
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-content">Description</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Description</div>
                </div>
                <textarea required type="text" name="desc" class="form-control" id="update-content" placeholder="Enter Description" rows="4"> </textarea>
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-content">Select Option</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Select Option</div>
                </div>
                <select class="custom-select my-1 mr-sm-2" id="place" name="category" required>
                  <option selected value="fiction">Fiction</option>
                  <option value="non-fiction">Non-Fiction</option>
                  <option value="romantic">Romantic</option>
                  <option value="horror">Horror/Thriller</option>
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
  </div>
</div>



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
    <script>
        (function($) {
            "use strict";
            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

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







</div>
  </div>
 </div>
</section>
</body>
</html>