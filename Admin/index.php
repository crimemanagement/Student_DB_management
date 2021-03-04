<?php 
	session_start();
	include("../Connection.php");?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" type="text/css" href="..css/fontawesome/css/all.css">

    <style>



    </style>
</head>

<body>
     <!-- <div class="loginBg">
        <div class="center">
            <img src="../Images/login1.png">
            <h1>Login</h1>
            <form method="POST" action="">
                <div class="txt_field">
                    <input type="text" required name="dbuser" id="dbuser">
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" required name="dbpass">
                    <label>Password</label>
                </div>
                <div class="pass" onclick="alert('Please contact IT Support!!')">Forgot password?</div>
                <button name="Submit"> Submit </button>
                <div class="signup_link" onclick="alert('Please contact Class teacher!!')">
                    Not a member?<a href="#">Signup</a>
                </div>
            </form>
        </div>

    </div>  -->

    <div class="loginBg">
        <div class="form-details">
            <h2>Login</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="email" name="DBUSER" class="form-control"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <input type="password" name="DBPASS" class="form-control" placeholder="Password">
                </div>
                <button name="Submit" class="btn btn-primary">Submit</button> 
            </form>
        </div>
    </div>

    <?php 

if(isset($_POST['Submit']))
    {
      $result=mysqli_query($con,"SELECT * FROM tbl_login WHERE c_username='".$_POST['DBUSER']."' && c_password='".$_POST['DBPASS']."' ");
      
    $n=mysqli_num_rows($result);
     // echo $n;
      
      IF($n>=1)
      {
          WHILE($row = MYSQLI_FETCH_ARRAY($result))
          {
               $Id =$row['c_loginid'];
               $_SESSION["ID"]= $Id;

               $names =$row['c_name'];
               $_SESSION["Name"]= $names;

               $usertype =$row['c_usertype'];
               $_SESSION["UserType"]= $usertype;
          }
        }

        IF ($usertype == 1) 
        {
         $_SESSION["uname"]=$_POST['DBUSER'];
         echo "<script>window.location='dashboard.php';</script>";
        }       
}

 ?>

</body>

</html>