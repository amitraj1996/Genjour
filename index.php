

<!DOCTYPE html>
<html>
<head>
  <title>Genjour | Generations' Journal</title>
  <?php
    include 'includes/routes.php';     
  ?>
</head>
<style type="text/css">


   nav{
    background-color: #f9f9f9;
    -webkit-box-shadow: 0px 3px 7px -1px rgba(0,0,0,0.10);
    -moz-box-shadow: 0px 3px 7px -1px rgba(0,0,0,0.10);
    box-shadow: 0px 3px 7px -1px rgba(0,0,0,0.10);
  }

   #navbarNav > ul > li > a > i,#navbarNav > ul > li > a > i:hover{
    color: black  ;
  }
  
  .col{
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    -moz-box-shadow:0 1px 2px rgba(0,0,0,0.15);
    transition: all 0.2s ease-in-out;
  }

  .col::after{
     opacity: 0;
  border-radius: 5px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  -webkit-box-shadow :0 5px 15px rgba(0,0,0,0.3);
  -moz-box-shadow:0 5px 15px rgba(0,0,0,0.3);
  transition: opacity 0.2s ease-in-out;
  }

  .col:hover{
    transform: scale(1.03, 1.03);
  }


  .col::after{
    opacity: 1;
  }

  @media screen and (max-width: 768px) {
    .display-4 {
        font-size:30px;
    }
}
 
@media screen and (max-width: 568px) {
    .display-4 {
        font-size:2em;
    }

    .footer.BottomFooter{
      font-size: 10px;
    }

}


</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://genjour.com"><img src="img/logo-dark1.svg" height="60"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <a href="#" class="btn btn-outline-info my-2 my-sm-0" role="button" >Log In</a>
    </form>
  </div>
</nav>



  <div class="container">
    <div class="my-5">
    </div>
    <div class="row d-flex justify-content-around ">
      <div class="col-6 col-sm-2 mt-3">
        <a href="http://genjour.com/journal">
          <div class="col">
            <figure class="figure">
            <img src="img/icon/header-icons/journal.svg" class="figure-img img-fluid rounded" alt="JOURNAL" >
            <figcaption class="figure-caption text-center">JOURNAL</figcaption>
          </figure>
          </div>
        </a>  
      </div>
      <div class="col-6 col-sm-2 mt-3">
        <a href="http://genjour.com/interview">
          <div class="col">
            <figure class="figure">
            <img src="img/icon/header-icons/interview.svg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center">INTERVIEW</figcaption>
          </figure>
          </div>
        </a>  
      </div>
      
      <div class="col-6 col-sm-2 mt-3">
        <a href="http://genjour.com/survey">
          <div class="col">
            <figure class="figure">
            <img src="img/icon/header-icons/survey.svg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center">SURVEY</figcaption>
          </figure>
          </div>
        </a>
      </div>
      <div class="col-6 col-sm-2 mt-3">
        <a href="http://genjour.com/magazine">
          <div class="col">
            <figure class="figure">
            <img src="img/icon/header-icons/magazine.svg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center">MAGAZINE</figcaption>
          </figure>
          </div>
        </a>
      </div>
      
      <div class="col-6 col-sm-2 mt-3">
        <a href="http://genjour.com/genjour-tv">
          <div class="col">
            <figure class="figure">
            <img src="img/icon/header-icons/tv.svg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center">GENJOUR TV</figcaption>
          </figure>
          </div>
        </a>
      </div>
      
    </div>
    
      <blockquote class="my-5 blockquote text-center">
        <p class="mb-0">We are those allergic to the widely accepted practice of following the crowd.</p>
        <footer class="blockquote-footer"> <cite title="Source Title">Genjourists</cite></footer>
      </blockquote>
      
      <div class="row justify-content-center">
        <a href="#" role="button" class="btn btn-outline-dark btn-lg">Become a Genjourist</a>
      </div>


  </div>


  <ul class="nav justify-content-center my-4" >
      <li class="nav-item ">
        <a class="nav-link" href="https://www.facebook.com/Genjourmedia/"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://twitter.com/GenjourMedia"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.instagram.com/genjour"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
      </li>
      <li>
        <a class="nav-link" href="https://in.pinterest.com/genjour/pins/"><i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i></a>
      </li>
      <li>
        <a class="nav-link" href="https://plus.google.com/u/0/105599905295491593572"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a>
      </li>
  </ul>




<div class="footer BottomFooter mt-5">
  <div class="container-fluid">
    <div class="d-flex justify-content-end" style="color: white">
      <div class="mr-auto p-2 ">Genjour © 2017</div>
      <div class="p-2 "><a href="">Know More</a>
      </div>
      </div>
  </div>
</div>

</body>
</html>