<?php
include ('routes.php');
include ('header.php');
 ?>
<!-- cards for various positions  -->
 <div class="container mt-4">

<!-- form for enquiry about recruitments -->
<form>
  <span class="border-bottom-0">
  <div class="container">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4" class="col-form-label">First Name</label>
      <input type="First Name" class="form-control" id="inputEmail4" placeholder="First Name">
    </div>
    <div class="form-group col-md-3">
      <label for="Last Name" class="col-form-label">Last Name </label>
      <input type="password" class="form-control" id="inputPasswod4" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="col-form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row ">
    <div class="form-group col-md-3">
      <label for="inputCity" class="col-form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState" class="col-form-label">State</label>
      <select id="inputState" class="form-control">Choose</select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip" class="col-form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</span>
</form>


<?php
	include('footer.php');
?>
