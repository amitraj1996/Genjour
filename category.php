<?php
	
	include('routes.php');
	include('header.php');
	include('category-header.php');
	include('config/connect.php');
	$category = $_GET['category'];
	$category_post = "SELECT * FROM journals WHERE post_category = $category;";
	$category_post_sql = $conn->query($category_post);

	while ($row = $category_post_sql->fetch_assoc()) {
		echo $row['post_id'];
	}

?>

<div class="container">
<div class="mt-1"></div>
	<h3 class="display-4">
		<?php
		if(isset($_GET['category'])){
  			              		echo $_GET['category'];
  			              	}
			
		?>
	</h3>
	<hr>
  <div class="row mt-3">
		<div class="card-columns">
		  <div class="card">
		    <img class="card-img-top" src="img/svg/245x260.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Card title that wraps to a new line</h4>
		      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		    </div>
		  </div>
		  <div class="card p-3">
		    <blockquote class="blockquote mb-0 card-body">
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		      
		        <small class="text-muted">
		          Someone famous in <cite title="Source Title">Source Title</cite>
		        </small>
		      
		    </blockquote>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="img/svg/245x260.svg" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title">Card title</h4>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card p-3 text-center">
		    <blockquote class="blockquote mb-0">
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
		      <small class="text-muted">
		          Someone famous in <cite title="Source Title">Source Title</cite>
		        </small>
		    </blockquote>
		  </div>

		  <div class="card text-center">
		    <div class="card-body">
		      <h4 class="card-title">Card title</h4>
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>

		  <div class="card">
		    <img class="card-img" src="img/svg/245x260.svg" alt="Card image">
		  </div>

		  <div class="card p-3 text-right">
		    <blockquote class="blockquote mb-0">
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		      <small class="text-muted">
		          Someone famous in <cite title="Source Title">Source Title</cite>
		        </small>
		    </blockquote>
		  </div>

		  <div class="card">
		    <div class="card-body">
		      <h4 class="card-title">Card title</h4>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>

		</div>
	</div>
      <!-- /.row -->


      		          <!-- Recommended -->

          <div class="card my-4">
            <h5 class="card-header">Also Read</h5>
            <div class="card-body">
				<div class="card-group">
				  <div class="card">
				    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
				    <div class="card-body">
				      <h4 class="card-title">Card title</h4>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="img/svg/sample.svg" alt="Card image cap">
				    <div class="card-body">
				      <h4 class="card-title">Card title</h4>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>
            </div>
          </div>


    </div>

    <?php
    	include('footer.php');
    ?>