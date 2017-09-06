<?php
	include('config/connect.php');
	$post_id = $_GET['post_id'];
	$current_category = "SELECT post_category from journals where post_id = $post_id;";
	$current_category_sql = $conn->query($current_category);

		while($row = $current_category_sql->fetch_assoc())
		{
			$store_category = $row['post_category'];
		}

		
		$random = "SELECT * FROM journals WHERE post_category='$store_category' AND NOT post_id = $post_id ORDER BY RAND() LIMIT 0,3;";

		$random_sql = $conn->query($random);


?>
          <div class="card my-4">
            <h5 class="card-header">More From <?php echo $store_category; ?></h5>
            <div class="card-body">
            	<ul class="list-unstyled">
            	<?php 
            		while ($rows = $random_sql->fetch_assoc()) {
            	?>
				  <li class="media">
				    <img class="d-flex mr-3" src="<?php echo $rows['img_url']; ?>" style="height: 64px; width: 64px" alt="Generic placeholder image">
				    <div class="media-body">
				      <h5 class="mt-0 mb-1"><a href="post.php?post_id=<?php echo $rows['post_id']; ?>"><?php echo $rows['post_title']; ?></a></h5>

				      	<?php
				      		$body = $rows['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?> 
				    </div>
				  </li>
				  <?php
				  	}
				  ?>

				</ul>
            </div>
          </div>
