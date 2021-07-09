<?php

    include "validateuser.php";
	  include "user.php";

	  $login_email = $_SESSION["loggedin_user"];
    $sql0 =  "SELECT * FROM user WHERE email='".$login_email."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $sql1 =  "SELECT * FROM food_types";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $sum=0;

    $pos=strpos($login_email,"@");
    $username=substr($login_email, 0, $pos);


?>


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
          <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout_action.php">Logout</a>
        </li>
      </ul>
    </div>
	 <span class="navbar-text welcome">
      <?php echo $username; ?>
      </span>
  </div>
</nav>
<!--Carousel Wrapper-->
<div class="menurow1">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img src="images/food.jpg" class="img-fluid" alt="First slide" width="500%" />
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <div class="menu">
        <span class="menutitledesc"><center>Excellence taste in Every Bite</span>
      </div>
    </div>
</div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="images/momos.jpg" class="img-fluid" alt="Second slide" width="500%" />
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="images/d4.jpg" class="img-fluid" alt="Third slide" width="500%" />
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!--/.Slides--
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="container">
    <div class="row">
      <div class="col-lg-9 menucol">
        <div class="menurow2">
          <div class="row categoryrow1" id="ni">
            <span class="headni">North Indian</span>
			
            <?php
            $sql2 =  "SELECT * FROM food_details WHERE type_id=1";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                	<?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>
           

              <span class="content">
               <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row namerow">
                    <div class="col-7" id="menufetch">
                      <span class="name"><b><?php echo $arr_all[$i+$j-2]['foodname']; ?></b> </span><br/>
                      &nbsp&nbsp&nbsp&nbsp<i class="fas fa-rupee-sign"></i><span class="price"><?php echo $arr_all[$i+$j-2]['price']; ?></span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control qunatityno" value="0" min="0" max="100" required/><br/>
						<button type="submit" class="btn btn-outline-success addni">ADD</button>
                      </div>
                </div>
                </form>
              </span>
               <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>
            
          </div>

          <div class="row categoryrow2" id="chi">
            <span class="headchi">Chinese</span>
            <?php
            $sql2 =  "SELECT * FROM food_details WHERE type_id=2";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                  <?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>
            

              <span class="content">
              <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row namerow">
                    <div class="col-7" id="menufetch">
                      <span class="name"><b> <?php echo $arr_all[$i+$j-2]['foodname']; ?></b> </span><br />
                        &nbsp&nbsp&nbsp&nbsp<i class="fas fa-rupee-sign"></i><span class="price"> <?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control quantityno" value="0" min="0" max="100" required/><br/>
						<button type="submit" class="btn btn-outline-success addchi">ADD</button>
                      </div>  
                </div>
                </form>
              </span>

                  <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>

          </div>

          <div class="row categoryrow3" id="des">
            <span class="headdes">Desserts</span>
             <?php
            $sql2 =  "SELECT * FROM food_details WHERE type_id=3";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                	<?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>
            

              <span class="content">
			  <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row namerow">
                    <div class="col-7" id="menufetch">
                      <span class="name"><b> <?php echo $arr_all[$i+$j-2]['foodname']; ?></b> </span><br />
                        &nbsp&nbsp&nbsp&nbsp<i class="fas fa-rupee-sign"></i><span class="price"> <?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control quantitytyno" value="0" min="0" max="100" required/><br/>
						<button type="submit" class="btn btn-outline-success adddes">ADD</button>
                      </div> 
                </div>
                </form>
              </span>

                  <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>

          </div>

        </div>
      </div>
<div class="row menufoot">
            <div class="col-4" style="margin:auto;">
                     <a href="cart.php"><button type="submit" class="btn btn-dark proceed">PROCEED</button></a>
                  </div>     
    </div>
</body>
</html>