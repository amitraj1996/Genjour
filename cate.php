<?php

	include('routes.php');
	include('header.php');
	include('category-header.php');
	include('config/connect.php');
	$category = $_GET['category'];

	// All post from same category query
	$category_query = "SELECT * FROM journals WHERE post_category = '$category';";
  	$category_sql = $conn->query($category_query);

  	//  Random articles
  	$random = "SELECT * FROM journals WHERE NOT post_category= '$category' ORDER BY RAND() LIMIT 0,4;";
	$random_sql = $conn->query($random);


?>

<div class="container">
	<div class="row mt-2">
		<div class="col-md-8">
			<h4 class="display-4">Category</h4>
			<hr>

		</div>
		<div class="col-md-3 ">
			<h3 class="mt-4">Follow us</h3>
			<hr>
				<a href="#"><button type="button" class="btn btn-primary"><i class="fa fa-facebook " aria-hidden="true"></i></button></a>
				<a href="#"><button type="button" class="btn btn-danger"><i class="fa fa-google-plus  " aria-hidden="true"></i></button></a>
				<a href="#"><button type="button" class="btn btn-info"><i class="fa fa-twitter" aria-hidden="true"></i></button></a>

						<div class="card my-4">
	            <h5 class="card-header">Survey</h5>
	            <div class="card-body">
	              <div class="row">
		            <div class="card-body">
		            	<ul class="list-unstyled">        	        		
		            		<li class="media">
						    
						    <div class="media-body">
						      <h5 class="mt-0 mb-1"><a href="#"> Survey</a></h5>
						    </div>
						  </li>
						</ul>
		            </div>
	              </div>
	            </div>
	          </div>
	          <div class="card my-4">
	            <h5 class="card-header">Interview</h5>
	            <div class="card-body">
	              <div class="row">
		            <div class="card-body">
		            	<ul class="list-unstyled">        	        		
		            		<li class="media">
						    
						    <div class="media-body">
						      <h5 class="mt-0 mb-1"><a href="#"> Interview</a></h5>
						    </div>
						  </li>
						</ul>
		            </div>
	              </div>
	            </div>
	          </div>
		</div>
	</div>
	<div class="row">
		  <div class="col">
		  	<h4 class="display-4">Read Also</h4>
		  	<hr>
		  	<div class="row">
				<div class="card-deck">
				  <div class="card">
				    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
				    <div class="card-body">
				      <h4 class="card-title">Card title</h4>
				      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
				    <div class="card-body">
				      <h4 class="card-title">Card title</h4>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
				    <div class="card-body">
				      <h4 class="card-title">Card title</h4>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
				    <div class="card-body">
				      <h4 class="card-title">Card title</h4>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
 	
				</div>
		  	</div>
		  </div>
	</div>
</div>