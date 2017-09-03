<?php
  include('config/connect.php');
	include('routes.php');

  include('header.php');
  include('category-header.php');
  $post_id = $_GET['post_id'];
  $counter = "UPDATE journals SET post_counter=post_counter+1 WHERE post_id=$post_id";
  $conn->query($counter);

  //
  $query = "SELECT * from journals where post_id = $post_id";
  $journals =$conn->query($query);

  //

  while($row = $journals->fetch_assoc()){

echo'<meta name="description" content="'.$row['post_title'].'" /> 
<meta name="Keywords" content="'.$row['post_tags'].'" />';

?>
  
<div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">
          <?php
            
            echo $row['post_title'];
          ?>
          </h1>

          <!-- Author -->
          <p class="lead">
            by Genjourist 
            <a href="#"><?php echo $row['genjourist_name']; ?></a>
          </p>

          <hr>

          <!-- Category and shares -->
          <p>
          	<button type="button" class="btn btn-dark"><?php echo $row['post_category']?></button>
          	<br> <h5>Share to:</h5>
          	<?php
          		include('functions/sharing.php');
          	?>
          	
          </p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?php echo $row['img_url'];?>" alt="">

          <hr>

          <!-- Post Content -->
          <?php echo $row['post_content']; ?>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
            		<div class="fb-comments" data-href="https://www.facebook.com/Genjourmedia/posts/1132589170174377?comment_id=1133343416765619" data-numposts="5"></div>
            </div>
           
          </div>




        </div>
<?php
  }
?>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Popular Widget -->
		<?php
		include('functions/same-category.php');
		?>

          <!-- Latest Widget -->
		<?php
		include('functions/top-posts.php');
		?>

          <!-- More by this genjourist -->
		<?php
		include('functions/same-genjourists.php');
		?>          

        </div>

      </div>
      <!-- /.row -->


      		          <!-- Recommended -->

		<?php
		include('functions/recommended.php');
		?>  


    </div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=585527498502433";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></<script type="text/javascript"></script>


<?php
	include('footer.php');
	//include('functions/counter.php')
?>