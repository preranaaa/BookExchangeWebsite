<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    citiesOptions+="<option>"+subcategory[value][categoryId]+"</option>";
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
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add Item</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Item Name</label>  
  <div class="col-md-">
  <input id="textinput" name="textinput" type="text" placeholder="Name to be displyed" class="form-control input-md"> 
  </div>
</div>
<!--Item Description-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Item Description</label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="Something about the item" class="form-control input-md">  
  </div>
</div>
<!-- Multi select -->
<select id="category" size="1" onchange="makeSubmenu(this.value)">
<option value="" disabled selected>Choose Category</option>
<option>Books</option>
<option>EnggGraphics</option>
<option>Used</option>
</select>
<select id="categorySelect" size="1" >
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
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
      <label class="form-check-label" for="exampleRadios1">
        Sell
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
        Donate
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
      <label class="form-check-label" for="exampleRadios3">
        Exchange
      </label>
    </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Text Area</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
  </div>
</div>

</fieldset>
</form>
</div>
</body>
</html>
