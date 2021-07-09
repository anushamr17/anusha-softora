
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
  <meta charset="utf-8">
  <title>Food Villa</title>


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <!-- W3Schools -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- CSS -->
  <link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">


  <!-- Icons -->
  <script src="https://kit.fontawesome.com/67ab68277d.js" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="logout_action.php"><span class="food">FoodVilla</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#" data-toggle="modal" data-target="#modalLRForm">Sign Up</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="index.php#foot">Contact Us</a>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>
  <div class="indexrow1">
    <div class="indextitle">
      <h1 class="indextitlehead">Food Villa</h1><br />
      <span class="indextitledesc">Calories?I think you mean delicious points.</span><br><br>

    </div>
  </div>
  <div class="indexrow2">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 23rem;">
            <img src="images/north.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>NORTH INDIAN</b></h5>
              <p class="card-text">The North Indian cuisine includes roti,paratha and naans which all are forms of wheat-based breads which is consumed with sabzi or curry.</p>
              <div class="col value">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 23rem;">
            <img src="images/chinese.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>CHINESE</b></h5>
              <p class="card-text">Colour,smell and taste are the three traditional aspects used to describe Chinese food.Check out for mouth watering foods in this category.</p>
              <div class="col value">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 23rem;">
            <img src="images/dessert.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>DESSERTS</b></h5>
              <p class="card-text">The final course of a meal.Check out the menu for an amazing variety of pastries,pudding and ice-creams. </p>
              <div class="col value">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row indexrow3 " id="features">
      <div class="col indexc3">
        <i class="fas fa-concierge-bell fa-7x"></i><br /><br />
        <h3 class="adv">Appetizing Food</h3>

      </div>
      <div class="col indexc3">
        <i class="fas fa-luggage-cart fa-7x"></i><br /><br />
        <h3 class="adv">Free Delivery</h3>
      </div>
      <div class="col indexc3">
        <i class="fas fa-check-square fa-7x"></i><br /><br />
        <h3 class="adv">Excellent Quality</h3>

      </div>
   </div>

<div class="row indexrow4" id="foot">

     <div class="col-lg-6 touch">
      <form action="mailto:foodvilla@gmail.com" method="post" enctype="text/plain">
        <h2 class="contacthead">Contact Us</h2>
		    <hr class="hrcont"/>
        <div class="mb-3">
          <label for="formControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control feed" id="formControlInput1">
        </div>
        <div class="mb-3">
          <label for="formControlTextarea1" class="form-label">Message</label>
          <textarea class="form-control feed" id="formControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-outline-light submit-1 w3-animate-opacity " value="Submit">Submit</button>
        </div>
      </form>
    </div>

	 <div class="col-lg-6 reach">
     <div class="add">
       <h2 class="addhead">Address</h2>
 	    <hr class="hrline"/><br />
       <div class="addcontent">
         #41, 8th cross CineTech Mall, Hinduja Apartments
         <br />Giri layout,Rajajinagar, Bengaluru, Karnataka
         <br />Pin Code: 560010
       </div>
     </div>
     <div class="add">
       <h2 class="social">Social</h2>
  	   <hr class="hrsoc"/><br />
       <i class="fab fa-instagram-square"></i>&nbsp&nbsp&nbsp<i class="fab fa-twitter-square"></i>&nbsp&nbsp&nbsp<i class="fab fa-facebook-square"></i>&nbsp&nbsp&nbsp<i class="fab fa-linkedin"></i>&nbsp&nbsp&nbsp<i class="fab fa-google-plus-square"></i>
        <br /><h4 style="color: #afafaf">Phone no: +91 99352 36465<h4/>
  	  </div>
     </div>
   </div>

  <div class="row indexrow4">
  <hr style="color:white;">
<footer class="page-footer">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <span> foodvilla</span>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


   <!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content" id="logreg">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
			 <form action="login_action.php" method="post">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" name="uemail" id="modalLRInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="upass" id="modalLRInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button type="submit" class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
			  </form>
            </div>
          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
			<form action="register_action.php" method="post">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" name="remail" id="modalLRInput12" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="rpass" id="modalLRInput13" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="repass" id="modalLRInput14" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>
             </form>
            </div>

          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->
</body>
</html>

<?php
    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['diffPwd'])) {
      $message = "Passwords do not match, try again!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['usedEmail'])) {
      $message = "Email is already used, try again!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['regex'])) {
      $message = "Enter email and password in proper format.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

?>
