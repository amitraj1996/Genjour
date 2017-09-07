<?php
	include('config/connect.php');
	$post_id = $_GET['post_id'];

	//Currrent genjourist name 
	$genjourist = "SELECT genjourist_name FROM journals WHERE post_id = $post_id ;";
	$genjourist_sql= $conn->query($genjourist);
	while ($row = $genjourist_sql->fetch_assoc()) {
		$current_genjourist =  $row['genjourist_name'];
	}

	//Current genjourist articles
	$genjourist_article = "SELECT * FROM journals WHERE genjourist_name = '$current_genjourist' AND NOT post_id = $post_id ORDER BY RAND() LIMIT 0,3 ";
	$genjourist_article_sql = $conn->query($genjourist_article);

	//Current genjourist articles count
	$count = "SELECT COUNT(genjourist_name) FROM journals WHERE genjourist_name='$current_genjourist'";
	$count_sql = $conn->query($count);
	$row = mysqli_fetch_row($count_sql);
	$genjourist_count=$row[0];
	



?>

<?php
	
	if($genjourist_count<2)
            		{
       
       //EMPTY add here MORE BY OTHER GENJOURIST     			
?>
	

	

 <?php           			
            		}else{

?>
		<div class="card my-4">
            <h5 class="card-header">More By This Genjourist</h5>
            <div class="card-body">
              <div class="row">
            <div class="card-body">
            	<ul class="list-unstyled">
            	<?php
            		while ($row = $genjourist_article_sql->fetch_assoc()) {
            	    ?>
            		<li class="media">
				    <img class="d-flex mr-3" src="<?php echo $row['img_url']?>" alt="Generic placeholder image" style="height: 64px;width: 64px"	>
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
				}
            	?>

				</ul>
            </div>

              </div>
            </div>
          </div>