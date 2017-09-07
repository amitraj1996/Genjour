<?php
	include('config/connect.php');
	$post_id = $_GET['post_id'];
	$recom = "SELECT * FROM journals WHERE NOT post_id = $post_id ORDER BY RAND() LIMIT 0,4;";
	$recom_sql = $conn->query($recom);

?>

	<div class="container">
		          <div class="card my-4">
            <h5 class="card-header">Also Read</h5>
            <div class="card-body">
				<div class="card-deck">
				<?php
					while($row1 = $recom_sql->fetch_assoc()){
						?>

						  <div class="card">
						    <img class="card-img-top" src="<?php echo $row1['img_url']?>" alt="Card image cap" >
						    <div class="card-body">
						      <h4 class="card-title"> <a href="post.php?post_id=<?php echo $row1['post_id']; ?>"> <?php echo $row1['post_title']; ?></a></h4>
						      <p class="card-text">
						      	
						      	<?php
						      		$body = $row1['post_content'];
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