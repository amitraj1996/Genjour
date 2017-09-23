<?php
@$b=$_POST['question1'];
@$c=$_POST['question2'];
@$d=$_POST['question3'];
@$e=$_POST['question4'];
@$f=$_POST['question5'];

 
if(isset($_POST['submit']))
{


	
	if (empty($_POST['question1']) || empty($_POST['question2']) || empty($_POST['question3']) || empty($_POST['question4']) || empty($_POST['question5']) ) {
		echo '       
                    
					<div id="overlay" class="overlay">
                 		<div class="popup" style="background-color: #337AB7">
                        
                        <center>
                          <h2 style="color: #fff" >Please choose all the questions.</h2>
                        </center>
                     
		                 </div>
		              </div>
                     
		                ';
	} 


	else 
	{
			$s="INSERT INTO survey (profile_id,name,email,profile_img_url,profile_url,q1,q2,q3,q4,q5)
			 values(
			 	'$profile_id',
			 	'$name',
			 	'$email',
			 	'$profile_img_url',
			 	'$profile_url',
			 	'$b','$c','$d','$e','$f'
			 )";
			
			if ($conn->query($s) === TRUE)  {

				echo ' 
						<div id="overlay" class="overlay">
                 		<div class="popup" style="background-color: #337AB7">
                        
                        <center>
                          <h2 style="color: #fff" >Thank you.</h2>
                        </center>
                     
		                 </div>
		              </div>
				  ';

			    //header( "refresh:2;url=http://genjour.com" );

			} else {
			    echo "Error: " . $s . "<br>" . $conn->error;
			}
	}



}

//--------------------------------------TOTAL NO of ROWS--------------------------------
  	$sql3 = "Select count(*) from survey";

		if ($result3=mysqli_query($conn,$sql3))
		  {
		  // Fetch one and one row
		  while ($row3=mysqli_fetch_row($result3))
		    {
		      //echo"Total ". $row3[0]. "<br>"; 
		      $total = $row3[0]; // saving number in a variable
		    }
		  // Free result set
		  mysqli_free_result($result3);
		}

//---------------------------------------QUESTION 1 queries---------------------------------

  	$sql1 = "select count(*) from survey where q1='yes'";

		if ($result1=mysqli_query($conn,$sql1))
		  {
		  // Fetch one and one row
		  while ($row1=mysqli_fetch_row($result1))
		    {
			   //echo "Number of yes for quesition 1 - ". $row1[0]. "<br>";
			   $first_yes = $row1[0]; //saving number in variable
				//echo "Percentage of yes for quesition 1 - ".$first_yes. "% <br>";
		    }

		    	$first_of_yes = ($first_yes/$total)*100;

		  // Free result set
		  mysqli_free_result($result1);
		}
 	


    

  	$sql2 = "select count(*) from survey where q1='no'";

		if ($result2=mysqli_query($conn,$sql2))
		  {
		  // Fetch one and one row
		  while ($row2=mysqli_fetch_row($result2))
		    {

		      //echo "Number of no for quesition 1 - ". $row2[0]. "<br>";
		    }
		  // Free result set
		  mysqli_free_result($result2);
		}
  	

//----------------------------------------QUESTION 2 queries--------------------

		$sql21 = "select count(*) from survey where q2='yes'";

 	  	if ($result21=mysqli_query($conn,$sql21))
		  {
		  // Fetch one and one row
		  while ($row21=mysqli_fetch_row($result21))
		    {

			   //echo "Number of yes for quesition 2 -  ". $row21[0]. "<br>";
				$second_yes = $row21[0]; //saving number in variable
		    }

			$second_of_yes = ($second_yes/$total)*100;
		  // Free result set
		  mysqli_free_result($result21);
		}

		$sql22 = "select count(*) from survey where q2='no'";

 	  	if ($result22=mysqli_query($conn,$sql22))
		  {
		  // Fetch one and one row
		  while ($row22=mysqli_fetch_row($result22))
		    {

			   //echo "Number of no for quesition 2 - ". $row22[0]. "<br>";
	
		    }
		  // Free result set
		  mysqli_free_result($result22);
		}
  	

//----------------------------------------QUESTION 3 queries--------------------

		$sql31 = "select count(*) from survey where q3='yes'";

 	  	if ($result31=mysqli_query($conn,$sql31))
		  {
		  // Fetch one and one row
		  while ($row31=mysqli_fetch_row($result31))
		    {

			   //echo "Number of yes for quesition 3 -  ". $row31[0]. "<br>";
				$third_yes = $row31[0]; //saving number in variable
		    }

		    //calculation percentage of third question	
		    $third_of_yes = ($third_yes/$total)*100;

		  // Free result set
		  mysqli_free_result($result31);
		}

		$sql32 = "select count(*) from survey where q3='no'";

 	  	if ($result32=mysqli_query($conn,$sql32))
		  {
		  // Fetch one and one row
		  while ($row32=mysqli_fetch_row($result32))
		    {

			   //echo "Number of no for quesition 3 - ". $row32[0]. "<br>";
	
		    }
		  // Free result set
		  mysqli_free_result($result32);
		}


//----------------------------------------QUESTION 4 queries--------------------

		$sql41 = "select count(*) from survey where q4='yes'";

 	  	if ($result41=mysqli_query($conn,$sql41))
		  {
		  // Fetch one and one row
		  while ($row41=mysqli_fetch_row($result41))
		    {

			   //echo "Number of yes for quesition 4 -  ". $row41[0]. "<br>";
				$fourth_yes = $row41[0];
		    }
		    	$fourth_of_yes = ($fourth_yes/$total)*100;
		  // Free result set
		  mysqli_free_result($result41);
		}

		$sql42 = "select count(*) from survey where q4='no'";

 	  	if ($result42=mysqli_query($conn,$sql42))
		  {
		  // Fetch one and one row
		  while ($row42=mysqli_fetch_row($result42))
		    {

			   //echo "Number of no for quesition 4 - ". $row42[0]. "<br>";
	
		    }
		  // Free result set
		  mysqli_free_result($result42);
		}

//----------------------------------------QUESTION 5 queries--------------------

		$sql51 = "select count(*) from survey where q5='yes'";

 	  	if ($result51=mysqli_query($conn,$sql51))
		  {
		  // Fetch one and one row
		  while ($row51=mysqli_fetch_row($result51))
		    {

			   //echo "Number of yes for quesition 5 -  ". $row51[0]. "<br>";
				$fifth_yes = $row51[0];
		    }
		    	$fifth_of_yes = ($fifth_yes/$total)*100;
		  // Free result set
		  mysqli_free_result($result51);
		}

		$sql52 = "select count(*) from survey where q5='no'";

 	  	if ($result52=mysqli_query($conn,$sql52))
		  {
		  // Fetch one and one row
		  while ($row52=mysqli_fetch_row($result52))
		    {

			   //echo "Number of no for quesition 5 - ". $row52[0]. "<br>";
	
		    }
		  // Free result set
		  mysqli_free_result($result52);
		}




	
  	//$conn->close();

?>
