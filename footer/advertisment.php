<?php
include ('routes.php');
include ('header.php');
 ?>
<!-- slider advertisment-->

	<div class="mt-3 ml-4 mr-4">
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
	      <img class="d-block w-100" src="../img/svg/first-slide.svg" alt="First slide">
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
  <!-- some packages related to advertisment -->
<div class="container-fluid row text-center "">
<div class="card border-warning mb-3 ml-3 mr-3" style="max-width: 35rem;">
  <div class="card-header">Header</div>
  <div class="card-body text-warning">
    <h4 class="card-title">Warning card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card border-info mb-3 ml-3 mr-3"style="max-width: 35rem;">
  <div class="card-header">Header</div>
  <div class="card-body text-info">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="container-fluid row text-center">
<div class="card border-light mb-3" style="max-width: 35rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Light card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card border-dark mb-3" style="max-width: 35rem;">
  <div class="card-header">Header</div>
  <div class="card-body text-dark">
    <h4 class="card-title">Dark card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div>
<!-- start of footer file -->
<?php
	include('footer.php');
?>
