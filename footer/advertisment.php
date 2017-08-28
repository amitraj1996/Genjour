<?php
include ('routes.php');
include ('header.php');
 ?>
<!-- slider advertisment-->
<div class="mt-3 ml-3 mr-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/svg/first-slide.svg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/svg/second-slide.svg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/svg/third-slide.svg" alt="Third slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="../img/svg/first-slide.svg" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
 <!-- cards for news -->
 <div class="container">

 	<div class="mt-5 row mb-3">
 		<div class="card-deck">
 		  <div class="card orange">
 		    <img class="card-img-top" src="../img/svg/sample.svg" alt="Card image cap">
 		    <div class="card-body">
 		      <h4 class="card-title">Post title</h4>
 		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
 		    </div>
 		    <div class="card-footer">
 		      <small class="text-muted">Last updated 3 mins ago</small>
 		    </div>
 	  	  </div>
 		  <div class=" card">
 		    <img class="card-img-top" src="../img/svg/sample.svg" alt="Card image cap">
 		    <div class="card-body">
 		      <h4 class="card-title">Post title</h4>
 		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
 		    </div>
 		    <div class="card-footer">
 		      <small class="text-muted">Last updated 3 mins ago</small>
 		    </div>
 		  </div>
 		    <div class="card">
 		    <img class="card-img-top" src="../img/svg/sample.svg" alt="Card image cap">
 		    <div class="card-body">
 		      <h4 class="card-title">Post title</h4>
 		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
 		    </div>
 		    <div class="card-footer">
 		      <small class="text-muted">Last updated 3 mins ago</small>
 		    </div>
 		  </div>
 		  <div class="card">
 		    <img class="card-img-top" src="../img/svg/sample.svg" alt="Card image cap">
 		    <div class="card-body">
 		      <h4 class="card-title">Post title</h4>
 		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
 		    </div>
 		    <div class="card-footer">
 		      <small class="text-muted">Last updated 3 mins ago</small>
 		    </div>
 		  </div>
 		</div>
 	</div>



<?php
	include('footer.php');
?>
