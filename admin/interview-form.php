<?php
//include 'routes.php';
//include 'header.php';
 ?>
<head>
      <!-- Normalize HTML5 Reset -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    <input class="form-check-input" onclick="document.getElementById('fname').disabled=true;" onclick="document.getElementById('lname').disabled=true;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Anonymous
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
      <input type="text" class="form-control" id="fname" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" id="lname" placeholder="Last name">
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
<div class="btn-group btn-group-lg mt-3" role="group" aria-label="...">
  <h3>Age Group</h3>
  <button type="button" class="btn btn-secondary">9-13</button>
  <button type="button" class="btn btn-secondary">14-30</button>
  <button type="button" class="btn btn-secondary">31-50</button>
  <button type="button" class="btn btn-secondary">50+</button>
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
