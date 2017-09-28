<?php
//include 'routes.php';
//include 'header.php';
 ?>
<head>
      <!-- Normalize HTML5 Reset -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- YOU FORGOT TO ADD JS SCRIPT -->
    <!-- THATS WHY AGE GROUP WAS NOT WORKING -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</head>
<form method="post">


<!-- ending the including of header and routes file -->
<div class="mt-4 mb-4 container">
  <div class="row">
    <div class="col">
      <!-- start to integrate form -->
      <input class="form-control" type="text" placeholder="Interview Title">
<!-- end interview title -->
<div class="form-check form-check-inline mt-3 ">
  <h3 class="form-check-inline">Identity</h3>
  <label class="form-check-label">
    <input class="form-check-input" onclick="document.getElementById('fname').disabled=true;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Anonymous
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" onclick="document.getElementById('fname').disabled=false;" onclick="document.getElementById('lname').disabled=false;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Person
  </label>
</div>
<!-- end identity checkbox -->
<form>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control" id="fname" placeholder="Full Name">
    </div>
  </div>
</form>
<!-- end of name bar -->
<div class="form-check form-check-inline mt-3">
  <h3 class="form-check-inline">Gender</h3>
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
  </label>
</div>
<!-- end of gender bar -->
  <div class="row">
    <h3>
      Age Group : 
    </h3>
  </div>
      <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-secondary active">
            <input type="radio" name="categories" value="Economics" id="option1" autocomplete="off" checked> 9-13 years
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="categories" value="Life" id="option2" autocomplete="off"> 14-30 years
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="categories" value="Society" id="option3" autocomplete="off"> 31-50 years
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="categories" value="Controversy" id="option4" autocomplete="off"> 50+ years
          </label>
      </div>

<!-- end of age bar -->
<div class="input-group mt-4">
  <input type="text" class="form-control" placeholder="Publishing Date" aria-label="Publishing Date" aria-describedby="basic-addon2">
  <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
</div>
<div class="input-group mt-4">
  <input type="text" class="form-control" placeholder="Upload profile pic" accept="image/*" aria-label="Upload Profile Pic" aria-describedby="basic-addon2">
  <i class="fa fa-upload fa-2x"  aria-hidden="true"></i>
</div>
<div class="input-group mt-4">
  <input type="text" class="form-control" placeholder="Background image" aria-label="Background Image" aria-describedby="basic-addon2">
  <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
</div>
<input type="text" class="form-control mt-4" placeholder="Genjourist Name" aria-label="Genjourist Name" aria-describedby="basic-addon2">
<input type="text" class="form-control mt-4" placeholder="Interview Content" aria-label="Background Image" aria-describedby="basic-addon2">
<input type="text" class="form-control mt-4" placeholder="Content" aria-label="Metadata" aria-describedby="basic-addon2">
<div class="form-group">
  <textarea class="form-control mt-4" placeholder="Description"rows="5"  id="description"></textarea>
</div>
<button type="button" class="btn btn-primary mt-4">Submit</button>
    </div>
    <!-- start of next column -->
    <div class="col row">
      <div class="container ">
        <h1 class="display1">NOTES-</h1>
      </div>
    </div>
  </div>
</div>
</form>
<script>

  $()

</script>
<!-- starting to include the footer file -->
 <?php
 //include '../includes/footer.php';
  ?>
