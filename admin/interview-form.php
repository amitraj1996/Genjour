<!DOCTYPE html>
<html>
<head>
	<title>Interview Form | Genjour</title>


    <!-- Normalize HTML5 Reset -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">

.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
</style>

</head>
<body>

<div class="container">
	<div class="mt-3">
		
	</div>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
		<div class="col-md-7">
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">1</span>
		  <input type="text" class="form-control" name="interviewtitle" placeholder="Interview Title" aria-label="Interview Title" aria-describedby="basic-addon1">
		</div>
		
		<br>

	     <h3 class="col-md-7">Indentity</h3>
	     <div class="custom-controls-stacked">
  <label class="custom-control custom-radio">
    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input">
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Anonymous</span>
  </label>
  <form>
  
  <label class="custom-control custom-radio">
    <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Person</span>
  </label>
</div>
<div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>

	     <br>

	     <h3 class="col-md-7">Sex</h3>
	     <div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Transgender
  </label>
</div>

	     <br>

	     <div class="mt-4"></div>
		
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">3</span>
		  <input type="text" class="form-control" name="GenjouristName" placeholder="-by name Genjourist ( Only name)" aria-label="Genjourist Name" aria-describedby="basic-addon1">
		</div>	
		
		<br>

	     <div class="form-group">
		  <label for="comment">Post Content:</label>
		  <textarea class="form-control" name="interviewcontent" rows="10" id="comment"></textarea>
		</div>
		
		<input class="btn btn-primary" type="submit" name="submit" value="submit" id="submit">
	</div>

	<br>





</body>
</html>