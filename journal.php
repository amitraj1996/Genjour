<?php

	include('routes.php');
	include('header.php');
	include('category-header.php');
	include('config/connect.php');

?>
    <!-- Main section -->

    <!-- Four col cards -->
<div class="container">

	<div class="mt-5 row">
		<div class="card-deck">
		  <div class="card orange">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Post title</h4>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
	  	  </div>  
		  <div class=" card">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Post title</h4>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>
		    <div class="card">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Post title</h4>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
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

	<!-- Slider -->

	<div class="mt-3">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="img/svg/first-slide.svg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/svg/second-slide.svg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/svg/third-slide.svg" alt="Third slide">
	    </div>
	    <div class="carousel-item ">
	      <img class="d-block w-100" src="img/svg/first-slide.svg" alt="First slide">
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
		<!-- 3 col artcils -->
		<div class="row mt-3">

				<div class="col-md-4">
					<div class="card mb-3">
					  <img class="card-img-top" src="img/svg/245x260.svg" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title">Card title</h4>
					    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					 </div>
					</div>
				</div>

            <div class="col-md-5">
	            <div class="card">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
	     
	            <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
	            <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>	           
	             <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
   			</div>

   			<div class="col-md-3">
   				<div id="chartContainer" style="height: 300px; width: 100%;"></div>
   			</div>

		</div>

	<!-- 4 col -->
	
		<div class="mt-3 row">
		<div class="card-deck">
		  <div class="card orange">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Post title</h4>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
	  	  </div>  
		  <div class=" card">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Post title</h4>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>
		    <div class="card">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Post title</h4>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
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

			<!-- 3 col artcils -->
		<div class="row mt-3">

				<div class="col-md-2">
					<div class="card mb-3">
					  <img class="card-img-top" src="img/svg/245x260.svg" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title">Card title</h4>
					    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					 </div>
					</div>
				</div>

            <div class="col-md-5">
	            <div class="card">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
	     
	            <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
	            <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>	           
	             <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
   			</div>

 <div class="col-md-5">
	            <div class="card">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
	     
	            <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
	            <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>	           
	             <div class="card mt-2">
	              <div class="row ">
	                        <div class="col col-md-4">
	                          <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
	                        </div>
	                      <div class="col col-md-8">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">This is a wider card with supporting text below as </p>
					   </div>
	                    </div>
	                  
	                </div>
	            </div>
   			</div>

		</div>
	<div class="mt-5">
		
	</div>

</div>


    <!-- Optional JavaScript -->
    <script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer",
			{
				title:{
					text: "Do you think Marijuana being legalized would be a good move?"
				},     
		                animationEnabled: true,     
				data: [
				{        
					type: "doughnut",
					startAngle: 60,                          
					toolTipContent: "{legendText}: {y} - <strong>#percent% </strong>", 					
					showInLegend: true,
					dataPoints: [
						{y: 99, indexLabel: "yes #percent%", legendText: "Yes" },
						{y: 60, indexLabel: "No #percent%", legendText: "No" },
								
					]
				}
				]
			});
			chart.render();
			}
		</script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></<script type="text/javascript"></script>>
</body>
</html>

<?php
include('footer.php');
?>