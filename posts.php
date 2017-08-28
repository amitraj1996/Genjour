<?php

	include('routes.php');
	include('header.php');
	include('category-header.php');

?>

<div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">The Great Indian Problem</h1>

          <!-- Author -->
          <p class="lead">
            by Genjourist 
            <a href="#">Priyashi Bubna</a>
          </p>

          <hr>

          <!-- Category and shares -->
          <p>
          	<button type="button" class="btn btn-dark">Economics</button>
          	<br> <h5>Share to:</h5>
          	<?php
          		include('functions/sharing.php');
          	?>
          	
          </p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="img/rupees.jpg" alt="">

          <hr>

          <!-- Post Content -->
          <p>A year ago, nobody had probably heard of this term and suddenly it’s the worst thing that could probably happen to an economy.  The year 2016 was the worst case scenario for India’s Twin Balance Sheet problems. It’s everywhere, this term. And for a layman, it’s just one the problems that the government is facing and nothing that can affect his way of living. Except of course, he is wrong. This twin balance sheet issue is affecting us all and we don’t even know it. The fact that loans are difficult to come by is just the beginning. It is going to affect every single person who is dependent on the economy.  And to understand its implication, it is important to understand the problem.</p>

          <p><b>What is twin balance sheet problem?</b></p>

          <p>A balance sheet of the company summarises the assets and liabilities of an individual/ institution at any point of time. Twin Balance Sheet problem is twofold, wherein an overleveraged company (a company carrying too much debt) is unable to pay the interest from its loan thereby also increasing bad debts for the bank. It stresses the balance sheet of both the business and the bank.  This leads to a situation where banks are wary of extending further loans and this in turns affect the investments of the economy further, thus leading to cycling situation.</p>

          <p>The reason for India twin balance sheet problem can be traced to early 2000s wherein due to a favourable economic situation, the banks extended huge loans to the infrastructure sector, particularly the steel sector. But the global financial crisis of 2007 reduced the growth rate for the sector wherein the overall demand was low. This led to revenue losses from investment. In such a situation, RBI increased interest rate further fearing inflation. The current situation is that the infrastructure companies have no revenue to repay the interest or the principle amount and banks bad debts are on a rise constantly.</p>

          <p>How could it possibly affect a citizen? In 2016, 80% of the bad debts or NPA (non performing assets) came from the Micro, Small, Medium Enterprise sector (MSMEs). It indicates that the problem is not only deepening but also widening. This will lead to tightening of bank lending and will force a lot of small companies out of business. While there is little effect on the agricultural or household sector lending, the small businesses have been badly hit hampering both the growth rate and the employment rate overall.</p>

          <p>This situation may also lead to disintermediation of banking sector wherein with the tightening of bank credit, market borrowers will start looking for alternatives like capital market for their fund requirement. It will then lead to banks losing their borrowers and their markets. However, this is only possible for big companies because there is still no proper mechanism for MSMEs to raise fund from capital market in the country.</p>

          <p>While the situation still hasn’t grown into an economic crisis because most NPAs are with PSBs (Public Sector Banks) which are backed by the government, it will lead to a huge burden on the government who will have to repay it. Effective rehabilitation and restricting of the infrastructure sector at this point seems like the only option which will stress the reserves of the government and the RBI.</p>

          <p>Twin Balance Sheet problem has the potential to turn into a virus if problem antidote is not injected into the economy.</p>





          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
            		<div class="fb-comments" data-href="https://www.facebook.com/Genjourmedia/posts/1132589170174377?comment_id=1133343416765619" data-numposts="5"></div>
            </div>
           
          </div>




        </div>

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