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
			<h4 class="display-4">
				<?php
				if(isset($_GET['category']))
				{
		      		echo $_GET['category'];
		      	}

				?>
			</h4>
			<hr>
			<ul class="list-unstyled">
		  		<?php
		  			while ($row = $category_sql->fetch_assoc()) {
		  		?>

				  <li class="media">
				    <img class="d-flex mr-3" src="<?php echo $row['img_url']; ?>" alt="Generic placeholder image" style="height: 64px;width: 64px">
				    <div class="media-body">
				      <h5 class="mt-0 mb-1"><a href="post.php?post_id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?></a></h5>

				      <?php 
				      	$body = $row['post_content'];
				      	echo substr($body, 0,155)."...";
				       ?>
			            <footer class="blockquote-footer text-right">by Genjourist <cite title="Source Title"><?php echo $row['genjourist_name']; ?></cite></footer>
							
				    </div>
				  </li>

		  		<?php
		  			}
		  		?>
			</ul>
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
	<div class="row mb-5">
		  <div class="col">
		  	<h4 class="display-4">Read Also</h4>
		  	<hr>
		  	<div class="row">
				<div class="card-deck">
				<?php
			   	 while($row = $random_sql->fetch_assoc()){
			   ?>
				  <div class="card">
				    <img class="card-img-top" src="<?php echo $row['img_url']?>" alt="Card image cap">
				    <div class="card-body">
				      <h4 class="card-title"><a href="post.php?post_id=<?php echo $row['post_id']; ?>"> <?php echo $row['post_title']; ?></a></h4>
				      <p class="card-text">
				      	<?php
				      		$body = $row['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <?php
				  	}
				  ?>
				</div>
		  	</div>
		  </div>
	</div>
</div>


    <?php
    // FOOTER 
    	include('footer.php');
    ?>