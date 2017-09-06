<?php

	include('routes.php');
	include('header.php');
	include('category-header.php');
	include('config/connect.php');


	// TOP 4 articles query
  	$top4 = "SELECT * FROM journals ORDER BY post_counter DESC LIMIT 4;";
  	$top4_sql = $conn->query($top4);

  	while ($row = $top4_sql->fetch_assoc()) {
  		$trending[]=$row;
  	}

  	// variable assign for most viewed posts
  	$s1=$trending[0];
  	$s2=$trending[1];
  	$s3=$trending[2];
  	$s4=$trending[3];

  	$s1_id = $s1['post_id'];
  	$s2_id = $s2['post_id'];
  	$s3_id = $s3['post_id'];
  	$s4_id = $s4['post_id'];

  	// 20 random post id
  	$random = "SELECT * FROM journals WHERE NOT post_id=$s1_id AND NOT post_id=$s2_id AND NOT post_id = $s3_id AND NOT $post_id = $s4_id ORDER BY RAND() LIMIT 22;";
  	$random_sql = $conn->query($random);

  	while ($rows = $random_sql->fetch_assoc()) {
		$data[] = $rows;
  	}
  	
  	// variable assign for individual posts 	
  	$a=$data[0];
  	$b=$data[1];
  	$c=$data[2];
  	$d=$data[3];
  	$e=$data[4];
  	$e=$data[5];
  	$f=$data[6];
  	$g=$data[7];
  	$h=$data[8];
  	$i=$data[9];
  	$j=$data[10];
  	$k=$data[11];
  	$l=$data[12];
  	$m=$data[13];
  	$n=$data[14];
  	$o=$data[15];
  	$p=$data[16];
  	$q=$data[17];
  	$r=$data[18];
  	$s=$data[19];
  	$t=$data[20];
  	$u=$data[21];
  	


?>
    <!-- Main section -->




    
	<!-- END OF 4 col top post -->
	<!-- Slider -->

	<div class="mt-0">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	  </ol>
	  <div class="carousel-inner">

	    <div class="carousel-item active">
	      <img class="d-block w-100" src="img/slider/slider11.png"  alt="First slide">
	        <div class="carousel-caption d-none d-md-block">
			    <h3><a href=""post.php?post_id=<?php echo $s1['post_id']; ?>"><?php echo $s1['post_title']?></a></h3>
			    <p><?php
		      		$body = $s1['post_content'];
		      		echo substr($body, 0,35)."...";
		      	?></p>
			</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slider/slider11.png" alt="Second slide">
	      <div class="carousel-caption d-none d-md-block">
			    <h3><a href=""post.php?post_id=<?php echo $s2['post_id']; ?>"><?php echo $s2['post_title']?></a></h3>
			    <p><?php
		      		$body = $s2['post_content'];
		      		echo substr($body, 0,30)."...";
		      	?></p>
			</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slider/slider11.png" alt="Third slide">
	      <div class="carousel-caption d-none d-md-block">
			    <h3><a href=""post.php?post_id=<?php echo $s3['post_id']; ?>"><?php echo $s3['post_title']?></a></h3>
			    <p><?php
		      		$body = $s3['post_content'];
		      		echo substr($body, 0,35)."...";
		      	?></p>
			</div>
	    </div>
	    <div class="carousel-item ">
	      <img class="d-block w-100" src="img/slider/slider11.png" alt="First slide">
	      <div class="carousel-caption d-none d-md-block">
			    <h3><a href=""post.php?post_id=<?php echo $s4['post_id']; ?>"><?php echo $s4['post_title']?></a></h3>
			    <p><?php
		      		$body = $s4['post_content'];
		      		echo substr($body, 0,35)."...";
		      	?></p>
			</div>
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

<div class="container">
<!-- Four col cards -->
	<div class="mt-5 row">
		<div class="card-deck">

		  <div class="card">
		    <img class="card-img-top" src="<?php echo $a['img_url']?>" alt="Card image cap" >
		    <div class="card-body">
		      <h4 class="card-title"> <a href="post.php?post_id=<?php echo $a['post_id']; ?>"> <?php echo $a['post_title']; ?></a></h4>
		      <p class="card-text">
		      	
		      	<?php
		      		$body = $a['post_content'];
		      		echo substr($body, 0,80)."...";
		      	?>

		      </p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
	  	  </div>

	  	  <div class="card">
		    <img class="card-img-top" src="<?php echo $b['img_url']?>" alt="Card image cap" >
		    <div class="card-body">
		      <h4 class="card-title"> <a href="post.php?post_id=<?php echo $b['post_id']; ?>"> <?php echo $b['post_title']; ?></a></h4>
		      <p class="card-text">
		      	
		      	<?php
		      		$body = $b['post_content'];
		      		echo substr($body, 0,80)."...";
		      	?>

		      </p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
	  	  </div>

	  	  <div class="card">
		    <img class="card-img-top" src="<?php echo $c['img_url']?>" alt="Card image cap" >
		    <div class="card-body">
		      <h4 class="card-title"> <a href="post.php?post_id=<?php echo $c['post_id']; ?>"> <?php echo $c['post_title']; ?></a></h4>
		      <p class="card-text">
		      	
		      	<?php
		      		$body = $c['post_content'];
		      		echo substr($body, 0,80)."...";
		      	?>

		      </p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
	  	  </div>

	  	  <div class="card">
		    <img class="card-img-top" src="<?php echo $d['img_url']?>" alt="Card image cap" >
		    <div class="card-body">
		      <h4 class="card-title"> <a href="post.php?post_id=<?php echo $d['post_id']; ?>"> <?php echo $d['post_title']; ?></a></h4>
		      <p class="card-text">
		      	
		      	<?php
		      		$body = $d['post_content'];
		      		echo substr($body, 0,80)."...";
		      	?>

		      </p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
	  	  </div>

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
				<!-- 4 block least hit posts -->
            <div class="col-md-5">
	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $f['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $f['post_id']; ?>"> <?php echo $f['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $f['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>
	          <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $g['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $g['post_id']; ?>"> <?php echo $g['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $g['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>
	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $h['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $h['post_id']; ?>"> <?php echo $h['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $h['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>
	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $i['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $i['post_id']; ?>"> <?php echo $i['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $i['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
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
		    <img class="card-img-top" src="<?php echo $j['img_url'];?>" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title"><a href="post.php?post_id=<?php echo $j['post_id']; ?>"> <?php echo $j['post_title']; ?></a></h4>
		      <p class="card-text">
		      			<?php
				      		$body = $i['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
			  </p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
	  	  </div>  
		  <div class=" card">
		    <img class="card-img-top" src="<?php echo $k['img_url'];?>" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title"><a href="post.php?post_id=<?php echo $k['post_id']; ?>"> <?php echo $k['post_title']; ?></a></h4>
		      <p class="card-text">
		      	<?php
		      		$body = $k['post_content'];
		      		echo substr($body, 0,80)."...";
				?>
		      </p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>
		    <div class="card">
		    <img class="card-img-top" src="<?php echo $l['img_url'];?>" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title"><a href="post.php?post_id=<?php echo $l['post_id']; ?>"> <?php echo $l['post_title']; ?></a></h4>
		      <p class="card-text"><?php
		      		$body = $l['post_content'];
		      		echo substr($body, 0,80)."...";
				?></p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">Last updated 3 mins ago</small>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="<?php echo $m['img_url'];?>" alt="Card image cap">
		    <div class="card-body">
		      <h4 class="card-title"><a href="post.php?post_id=<?php echo $m['post_id']; ?>"> <?php echo $m['post_title']; ?></a></h4>
		      <p class="card-text"><?php
		      		$body = $m['post_content'];
		      		echo substr($body, 0,80)."...";
				?></p>
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
	            
	            <div class="card mt-0">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $n['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $n['post_id']; ?>"> <?php echo $n['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $n['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>
	            
	     
	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $o['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $o['post_id']; ?>"> <?php echo $o['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $o['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>
	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $p['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $p['post_id']; ?>"> <?php echo $p['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $p['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>	           
	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $q['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $q['post_id']; ?>"> <?php echo $q['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $q['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>
   			</div>

 <div class="col-md-5">
	           
	            <div class="card mt-0">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $r['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $r['post_id']; ?>"> <?php echo $r['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $r['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>
	            
	     
	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $s['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $s['post_id']; ?>"> <?php echo $s['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $s['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>

	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $t['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $t['post_id']; ?>"> <?php echo $t['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $t['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
	            </div>	 

	            <div class="card mt-3">
				<ul class="list-unstyled">
		             <li class="media">
				    <img class="d-flex align-self-start mt-3 mr-3 ml-2" src="<?php echo $u['img_url'];?>" alt="Generic placeholder image" style="height: 100px; width: 100px;">
				    <div class="media-body">
				      <h5 class="mt-2 mb-1"><a href="post.php?post_id=<?php echo $u['post_id']; ?>"> <?php echo $u['post_title']; ?></a></h5>
				     <p class="card-text">
				      	<?php
				      		$body = $u['post_content'];
				      		echo substr($body, 0,80)."...";
				      	?>
				      </p>
				    </div>
				  </li>
				</ul>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></<script type="text/javascript"></script>
</body>
</html>

<?php
include('footer.php');
?>