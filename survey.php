<?php

    include('config/connect.php');
    include ('login.php');
    include('surveyProcess.php');

?>
<title>Genjour | Survey</title>
<?php
    require_once('includes/routes.php');
    require_once('includes/header.php');


    if (isset($_GET['logout'])) {
      unset($_SESSION['access_token']);
      
    }


?>
<style type="text/css">
  


</style>

<body>
<form method="post">

  <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

<!-- User profile pic -->


<a class="navbar-brand" href="#"><img src="<?php echo $LoginApi->showImg(); ?>" class="rounded-circle"  ></a>

<!-- if user is login then dropdown will appear esle sigin button  -->
  <div class="collapse navbar-collapse mr-5 justify-content-end" id="nav-content">   
    <ul class="navbar-nav">
 <?php

   $username=NULL;
   $username = $LoginApi->showName();

   if ($username == NULL) {
     echo '
      <li>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#signin" name="SignIn">Sign In</button>  
      </li>
   
'; }else{ 

    echo'
  
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">  '.$username.' </a>
          <div class="dropdown-menu ">
            <a class="dropdown-item" href="#">Genjourist</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?logout">Log Out</a>
          </div>
      </li>';

}?>

    </ul>
  </div>
</nav>



<!-- Modal -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="row justify-content-center">
          <a href="<?php echo $LoginApi->getFacebookLoginUrl(); ?>">
            <button  class="btn btn-primary btn-lg mb-4" name="facebook" type="button"><i class="fa fa-facebook" aria-hidden="true"></i> Login with Facebook</button>
          </a>          
        </div>

        <div class="row justify-content-center">
         <a href="<?php echo $LoginApi->getGoogleLoginUrl(); ?>">
            <button class="btn btn-danger btn-lg" name="google" type="button"><i class="fa fa-google-plus" aria-hidden="true"></i> Login with Google</button>
          </a>
          
        </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="container">


      <h1 class="display-3">Survey</h1>
      <p class="lead">Generations' Journal.</p>
      <hr>


  

<!--====================================== Question 1 ====================== -->

	<div class="row">
		<div class="col mt-3 mb-3 text-center">
			<p class="text-center h4 mt-3">
				Do you think Marijuana being legalized would be a good move?
			</p>
      <div class="row">
        <div class="col mt-3">
          
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">For for marijauna</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p class="text-left">
                    Legalisation will Promote good quality cannabis production Mixing will be Reduced (scoring points in India are hidden and due to Less profits, Peddlers mix a  large variety of unknown psycho-active chemicals and harmful chemicals like boot polish and Rat Kills etc.)<br>
                        Legalise will help the government by Taxation and Exports Profits.<br>
                        Business growth will be seen in the Cannabis sector which is closed in our country.<br>
                        <br>
                        Drug black market will be shattered and will control circulation of black money from the country 
                        <br>
                        It’s Not All Bad:-
                        <ul class="text-left">
                          <li>It controls epileptic Seizers.</li>
                          <li>Treats Inflammatory Bowel disease.</li>
                          <li>Relieves Pain and can be used as a productive Sedative.</li>
                          <li>An unknown Chemical is found in cannabis which stops cancer to spread.</li>
                        </ul>
                         <br> 
                          The Distribution for the crop is in the wrong hands in the country. Maybe by legalisation of cannabis, distribution will be right and people of the country who use cannabis will get a good quality product which will be less harmful. Research will be encouraged and more and more benefits of this plant can be seen with time.
                 </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
            For
          </button>
        </div>
        <div class="col mt-4">
          <img src="img/icon/evidence.svg" style="width: 80%; height: 25%;">
        </div>
        <div class="col mt-3">
          <div class="modal fade" id="against_marijauna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Against for marijauna</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="text-left">
                    Apart from all the good news there is bad too:-
                        <ul class="text-left">
                          <li>It blocks memory formation.</li>
                          <li>Increased risks of Depression.</li>
                          <li>Causes Intense Fear, Anxiety, Panics, Distrust and other side effects.</li>
                          <li>Users may experience Psychosis.</li>
                        </ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#against_marijauna">
            Against 
          </button>
        </div>
        
      </div>
      <div class="row justify-content-center">
          
            <label class="custom-control custom-radio">
            <input id="radio1" name="question1" type="radio" class="custom-control-input" value="yes">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
          </label>
          <label class="custom-control custom-radio">
            <input id="radio2" name="question1" type="radio" class="custom-control-input" value="no">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>
                    
      </div>
		</div>
	</div>


<!-- ===================================== Question 2 ========================-->
<hr>
  <div class="row">
    <div class="col mt-3 mb-3 text-center">
      <p class="text-center h4 mt-3">
        According to you, is providing free health insurance to every citizen a step that the Government should take?
      </p>
      <div class="row">
        <div class="col mt-3">
          
          <div class="modal fade" id="for_q2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">For</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p class="text-left">
                        <ul class="text-left">
                          <li>Value for Life is big and in a country with 1.2 billion Population, Our Human Resource is huge and health the people of the country, Wealthy the country.</li>
                          <li>Private Sector has become dominating in the country, Making Health a business and illegal health practices are taking place in the country.</li>
                          <li>Thought of Medical expense only makes a person sick in this country, it will be a great relief to many people if Health Insurance is provided by the government.</li>
                          <li>India will have “Universal Health Care”.</li>
                        </ul>
                         
                 </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#for_q2">
            For
          </button>
        </div>
        <div class="col mt-4">
          <img src="img/icon/medical-insurance.svg" style="width: 80%; height: 25%;">
        </div>
        <div class="col mt-3">
          <div class="modal fade" id="against_q2" tabindex="-1" role="dialog" aria-labelledby="against_q2Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="against_q2Label">Against</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="text-left">
                    Apart from all the good news there is bad too:-
                        <ul class="text-left">
                          <li>Government will suffer huge losses monetary wise.<br>
                          Heath sector budget has to be increased which will affect other sectors of the country like education, infrastructure, Defence etc.
                          </li>
                          
                        </ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#against_q2">
            Against 
          </button>
        </div>
        
      </div>
      <div class="row justify-content-center">
          
            

          <label class="custom-control custom-radio">
            <input id="radio1" name="question2" type="radio" class="custom-control-input" value="yes">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
          </label>
          <label class="custom-control custom-radio">
            <input id="radio2" name="question2" type="radio" class="custom-control-input" value="no">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>

      </div>
    </div>
  </div>

<!-- ====================================== Question 3 =======================-->
<hr>
  <div class="row">
    <div class="col mt-3 mb-3 text-center">
      <p class="text-center h4 mt-3">
        Do you feel there is a need to change the education system with implementation of new curriculum and teaching techniques?
      </p>
      <div class="row">
        <div class="col mt-3">
          
          <div class="modal fade" id="for_q3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">For</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p class="text-left">
                  Current Education system is failing to teach basic humanity to the people, Children are unable to figure out what they want to do in Life. Mainstream education is blocking the creativity of students making them live conventional lives when every student is an exception.<br>
                  How can Education system be made more effective:-
                        <ul class="text-left">
                          <li>Counselling sessions to be made compulsory.</li>
                          <li>Min Attendance in the schools and Colleges to be removed.</li>
                          <li>Online Education methods to be implemented.</li>
                          <li>Submissions of Term works and homework to be done online.</li>
                          <li>Equal concern to be given to Theoretical and Practical knowledge.</li>
                          <li>Write-ups to be reduced. Write ups should be made self-written (No content should be provided by the organisation).</li>
                          <li>Philosophy should be taught from basic school level.</li>
                          <li>Sports and physical education should be treated equally as other subjects.</li>
                        </ul>
                         
                 </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#for_q3">
            For
          </button>
        </div>
        <div class="col mt-4">
          <img src="img/icon/lecture.svg" style="width: 80%; height: 25%;">
        </div>
        <div class="col mt-3">
          <div class="modal fade" id="against_q3" tabindex="-1" role="dialog" aria-labelledby="against_q2Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="against_q3Label">Against</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="text-left">
                   <ul class="text-left">
                      <li>Changing of curriculum/Implementing new teaching techniques is again a risk, there is no surety that it will bring out good results.</li>
                      <li>Students will raise to be less punctual if attendance is removed.</li>
                      <li>Students will be more dependent on machines and technology.</li>

                   </ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#against_q3">
            Against 
          </button>
        </div>
        
      </div>
      <div class="row justify-content-center">
          
            <label class="custom-control custom-radio">
            <input id="radio1" name="question3" type="radio" class="custom-control-input" value="yes">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
          </label>
          <label class="custom-control custom-radio">
            <input id="radio2" name="question3" type="radio" class="custom-control-input" value="no">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>
          
      </div>
    </div>
  </div>

<!-- ====================================== Question 4 =======================-->
<hr>
  <div class="row">
    <div class="col mt-3 mb-3 text-center">
      <p class="text-center h4 mt-3">
        What are your views on the legalization of Gay Marriages?
      </p>
      <div class="row">
        <div class="col mt-3">
          
          <div class="modal fade" id="for_q4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">For</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p class="text-left">
                 <ul class="text-left">
                    <li>A person has full right to choose/Love anyone from opposite /same sex.</li>
                    <li>There are so many LGBT’s living silently. Secretly living with their partners and can’t roam around freely and live as they love to.</li>
                    <li>More and more Gay parades are being witnessed by the citizen of the country. Can’t we see they are protesting for something?(Last seen in Lucknow,2017)</li>
                    <li>Who are we to stop them from doing what they want when they are not hurting anyone.</li>
                  </ul>
                         
                 </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#for_q4">
            For
          </button>
        </div>
        <div class="col mt-4">
          <img src="img/icon/gays.svg" style="width: 80%; height: 25%;">
        </div>
        <div class="col mt-3">
          <div class="modal fade" id="against_q4" tabindex="-1" role="dialog" aria-labelledby="against_q4Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="against_q4Label">Against</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="text-left">
                   <ul class="text-left">
                    <li>It’s a crime under section 377 of Indian Panel Code.</li>
                    <li>Illegal and therefore can have a penalty of life imprisonment.</li>
                    <li>SOCIETY doesn’t Allow / support it.</li>
                  
                   </ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#against_q4">
            Against 
          </button>
        </div>
        
      </div>
      <div class="row justify-content-center">
          
            <label class="custom-control custom-radio">
            <input id="radio1" name="question4" type="radio" class="custom-control-input" value="yes">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
          </label>
          <label class="custom-control custom-radio">
            <input id="radio2" name="question4" type="radio" class="custom-control-input" value="no">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>
          
      </div>
    </div>
  </div>


<!-- ====================================== Question 5 =======================-->
<hr>
 <div class="row">
    <div class="col mt-3 mb-3 text-center">
      <p class="text-center h4 mt-3">
        Would encouraging more and more children to join the forces lead to an increase in the defence at the borders and thus help achieve peace in the nation?
      </p>
      <div class="row">
        <div class="col mt-3">
          
          <div class="modal fade" id="for_q5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">For</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p class="text-left">
                  <ul class="text-left">
                    <li>Motivation and perseverance from a young age does promise able soldiers.</li>
                    <li>Larger the defence of a nation, harder it is for others to penetrate imposing strength.</li>
                    <li>If the defence of a nation is so strong that it is capable of doing enough damage to offset any benefits which the other side might expect from the attack. Since the risks are far higher than the likely benefits, it is highly unlikely for anybody to attack.</li>
                  </ul>
                 </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#for_q5">
            For
          </button>
        </div>
        <div class="col mt-4">
          <img src="img/icon/soldier.svg" style="width: 80%; height: 25%;">
        </div>
        <div class="col mt-3">
          <div class="modal fade" id="against_q5" tabindex="-1" role="dialog" aria-labelledby="against_q4Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="against_q5Label">Against</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="text-left">
                   <ul class="text-left">
                   
                    <li>Flawless security is impractical because any single defense can always be overcome by an attacker with sufficient resources and motivation.</li>
                    <li>Larger defence forces don't necessarily promise the nation's peace.</li>
                    <li>While deterrence of a great number might work for a while, it is a very unstable approach for if the feared situation does arise, it would produce the feared consequence.</li>
                    <li>Encouraging more people to join the defense would imply that there is a problem at the country's borders that diplomacy of the state cannot solve which would in turn undermine the governence.                   
                    </li>
                  
                   </ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#against_q5">
            Against 
          </button>
        </div>
        
      </div>
      <div class="row justify-content-center">
          
            <label class="custom-control custom-radio">
            <input id="radio1" name="question5" type="radio" class="custom-control-input" value="yes">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
          </label>
          <label class="custom-control custom-radio">
            <input id="radio2" name="question5" type="radio" class="custom-control-input" value="no">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>
          
      </div>
    </div>
  </div>

<!-- ====================================== Questions END HERE  =======================-->

  

  <div class="row justify-content-center mb-5">
    
<?php

$CurrentEmail=$LoginApi->showEmail();

    $sql = "SELECT * FROM survey WHERE email = '$CurrentEmail' " ;

    $result = mysqli_query($conn,$sql); 
    $count = mysqli_num_rows($result);

if ($username==NULL) {
  echo'
  <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#signin" name="SignIn">Submit</button>  
    
  ';

}elseif ($count>0) {
  echo'
  <button class="btn btn-success btn-lg" type="button"  name="SignIn">Thank You</button> 
  ';
}

else{
  echo '
     <form method="post">
          <button type="submit" name="submit" class="btn btn-info btn-lg" >Submit</button>
          </form>
  ';
}

?>

   
  </div>

</div>

</form>


<!-- ======================================Error Modal  =======================-->


 


<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
<?php
  include('includes/footer.php');
?>
