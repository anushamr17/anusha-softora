<?php

    include "connect.php";
    include "validateuser.php";
	  include "user.php";


    $food_qty = mysqli_real_escape_string($conn, $_POST["quantity"]);

	  $login_email = $_SESSION["loggedin_user"];
    $sql0 =  "SELECT * FROM user WHERE email='".$login_email."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $_SESSION["uid"]=$row0["id"];

    $food_id = $_REQUEST['id'];

    $sql1 =  "SELECT * FROM food_details WHERE id='".$food_id."'";
    $result1 = $conn->query($sql1);;
    $row1 = $result1->fetch_assoc();

    $sql2 =  "SELECT * FROM cart";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();

    $food_name=$row1["foodname"];
    $food_price=$row1["price"];
    $user_id=$_SESSION["uid"];
	$total_amt=$food_price*$food_qty;


     //echo "qty".$food_qty;
     //echo "id".$food_id;
    //echo "name".$food_name;
     //echo "price".$food_price;
     //echo "uid".$user_id;

    $sql3 =  "INSERT INTO cart VALUES ('$food_id', '$food_name', $food_qty, '$food_price', '$user_id' , '$total_amt')";

    if (($conn->query($sql3) === TRUE))
    {
              $err_no = 0;
              die(header("location:./menu.php"));
    }

    else
    {
        $sql4 = "UPDATE cart SET food_quantity = food_quantity + '".$food_qty."' where food_id = '".$food_id."'";
        if (($conn->query($sql4) === TRUE))
        {
                  $err_no = 0;
                  die(header("location:./menu.php"));
        }

    }

?>
