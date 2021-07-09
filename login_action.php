<?php
    include "connect.php";

    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

	  $login_email = mysqli_real_escape_string($conn, $_POST["uemail"]);
    $login_pwd = mysqli_real_escape_string($conn, $_POST["upass"]);

    $sql0 =  "SELECT * FROM user WHERE email='".$login_email."' AND password='".$login_pwd."'";
    $result = $conn->query($sql0);
    $row = $result->fetch_assoc();

    if ($row) {
        $_SESSION["loggedin_user"] = $row["email"];
        $_SESSION['isUserValid'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:./menu.php");
    }
    else {

        $sql1 =  "SELECT * FROM admin WHERE email='".$login_email."' AND password='".$login_pwd."'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        if($row1) {
          $_SESSION["loggedin_user"] = $row1["email"];
          $_SESSION['isUserValid'] = true;
          $_SESSION['LAST_ACTIVITY'] = time();
          header("location:customer.php");
        }
        else {
          session_destroy();
          die(header("location:./index.php?loginFailed=true"));
        }
	}
?>
