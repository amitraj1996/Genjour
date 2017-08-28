<?php
  include('config/connect.php');

  // fetching categories from database

  $query = "SELECT * FROM categories";
  $categories =  $conn->query($query);

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <a class="navbar-brand" href="#">  
                <img src="img/svg/nav-icons/journal.svg" width="35" height="35" alt=""> 
            </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">


            <?php
            //category in header 
              while($row = $categories ->fetch_assoc()){

            ?>
              
              <?php 
                if(isset($_GET['category'] == $row["category_name"];)){
              ?>
              <li class="nav-item active">
                <a class="nav-link" href="category/<?php echo $row["category_name"]; ?>"><?php echo $row["category_name"]; ?></a>
              </li>             
              <?php }
                else{

                  ?>
                  <li class="nav-item active">
                  <a class="nav-link" href="category/<?php echo $row["category_name"]; ?>"><?php echo $row["category_name"]; ?></a>
                  </li>
                  <?php
                }
                } 

              ?>
    </ul>
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <li class="nav-item">
              <a class="nav-link p-2" href="#">
              <img src="img/svg/nav-icons/shuffle-arrows.svg " width="25" height="25" alt="">
              </a>
            </li> 
          </ul>

    <form class="form-inline my-2 my-lg-0" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>