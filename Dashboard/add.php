<?php
session_start();
include('../controllers/dashboardController.php');
if(isset($_POST['itemName'])){
  // var_dump($_POST);
  // exit();
       $data[0] = $_POST['itemName'];
       $data[1] = $_SESSION['enroll'];
       $data[2] = $_POST['price'];
       $data[3] = $_POST['itemDesc'];
       $data[4] = $_POST['exampleRadios'];
       $data[5] = "IMG"."/".$_FILES['filebutton']['name'];
       $data[6] = $_POST['cat'];
       $data[7] = $_FILES['filebutton']['tmp_name'];


       $isExecuted = insertData($data);
       
       if($isExecuted){
           $_SESSION['created_message'] = "Item Added Successfully";
           header("Location: dashboard.php");
       }

       else{
           $_SESSION['created_message'] = "Something went wrong";
           header("Location: add.php");
       }

  // $sql = "INSERT INTO `items`(`iName`, `iId`, `enroll`, `iPrice`, `iDescription`, `iBED`, `iImage`, `iCategory`) VALUES ('$_POST[itemName]','$id','$_SESSION[enroll]','$_POST[price]','$_POST[itemDesc]','$_POST[exampleRadios]','$_POST[]','$_POST[cat]')";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/NewHomepage.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script type="text/javascript">
    var subcategory = {
    Books: ["Novel","Academic","Fiction"],
    EnggGraphics: ["Roller Scale","Set Squares","Drafter"],
    Used :["Notes","Assignmnets","Pratical Notes"]
    }
    function makeSubmenu(value) {
    if(value.length==0) document.getElementById("categorySelect").innerHTML = "<option></option>";
    else {
    var citiesOptions = "";
    for(categoryId in subcategory[value]) {
    citiesOptions+="<option name='cat' value='"+subcategory[value][categoryId]+"'>"+subcategory[value][categoryId]+"</option>";
    }
    document.getElementById("categorySelect").innerHTML = citiesOptions;
    }
    }
    function displaySelected() { var country = document.getElementById("category").value;
    var city = document.getElementById("categorySelect").value;
    alert(country+"\n"+city);
    }
    function resetSelection() {
    document.getElementById("category").selectedIndex = 0;
    document.getElementById("categorySelect").selectedIndex = 0;
    }
    </script>
    
</head>
<body onload="resetSelection()">
  <!--add item--->
<div class="container">
<form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Add Item</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Item Name</label>  
  <div class="col-md-4">
  <input id="itemName" name="itemName" type="text" placeholder="Name to be displyed" class="form-control input-md"> 
  </div>
</div>
<!--Item Description-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Item Description</label>  
  <div class="col-md-6">
  <input id="itemDes" name="itemDesc" type="text" placeholder="Something about the item" class="form-control input-md">  
  </div>
</div>
<!-- Multi select -->
<select id="category" size="1" onchange="makeSubmenu(this.value)">
<option value="" disabled selected>Choose Category</option>
<option>Books</option>
<option>EnggGraphics</option>
<option>Used</option>
</select>
<select id="categorySelect" name="cat" size="1" >
<option value="" disabled selected>Choose Subcategory</option>
<option></option>
</select>
<!--
<button onclick="displaySelected()">show selected</button>
-->
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">File Button</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Single choice radio button -->
<div class="BSX">
      <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="buy">
      <label class="form-check-label" for="exampleRadios1">
        Sell
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="donate">
      <label class="form-check-label" for="exampleRadios2">
        Donate
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="exchange">
      <label class="form-check-label" for="exampleRadios3">
        Exchange
      </label>
    </div>
</div>
<div class="form-group"> 
  <div class="col-md-4">
  <input id="itemPrice" name="price" type="text" placeholder="Price" class="form-control input-md">  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="submit" name="singlebutton" value="submit" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>
</div>
</body>
</html>
