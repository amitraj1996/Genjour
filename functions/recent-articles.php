<?php
	include('config/connect.php');
	$post_id = $_GET['post_id'];
	$recent = "SELECT * FROM journals WHERE NOT post_id = $post_id ORDER BY post_id DESC LIMIT 0,3;";
	$recent_sql = $conn->query($recent);

?>

          <div class="card my-4">
            <h5 class="card-header">Recent Articles</h5>
            <div class="card-body">
              <div class="row">
            <div class="card-body">
            	<ul class="list-unstyled">
            	<?php
            		while($row = $recent_sql->fetch_assoc())
            		{
            	?>
				  <li class="media">
				    <img class="d-flex mr-3" src="<?php echo $row['img_url']?>" alt="Generic placeholder image" style="height: 64px;width: 64px">
				    <div class="media-body">
				      <h5 class="mt-0 mb-1"><a href="post.php?post_id=<?php echo $row['post_id']; ?>"> <?php echo $row['post_title']; ?></a></h5>
				      <?php
		      		$body = $row['post_content'];
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
            </div>
          </div>