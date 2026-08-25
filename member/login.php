<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href = "login.css">  -->
    <title>Member Login Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif,'Trebuchet MS',
    'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
form {
    background-color: #ffffff;
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 10px rgba(0,0,0,0.3);
    
     }

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #000000;
    border-radius: 4px;
    box-sizing: border-box;
}

.submit {
  background-color: #10022f;
  width: 30%;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  
  
}

.submit:hover {
  opacity: 0.8;
 color: #7339f0;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}
 
a {
color: #090217;
text-transform: capitalize;
text-decoration: none;
font-size: 12px;
}
a:hover{
  color: #00ffbf;
}
.navbar {
    background-color: #10022f;
    overflow: hidden;
    padding: 20px
    display: block;
    overflow: hidden;
        }

 .navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
        }

.navbar a:hover {
     background-color:#13094b71;
     color: white;
        }

    </style>

<br>

<!-- <div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div> -->

<br>

<body class="login">

<div class="login_wrapper">
<div class="navbar">
        <a href="#">Home</a>
        <a href="#">About Us</a>
    </div>

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1 align="center">User Login Form</h1>
            <div class="imgcontainer">
             <img src="MyLibrary.jpg" alt="Avatar" class="avatar">
            </div>

            <div>
                <label for="MemberId"><b>MemberID</b></label><br>
                <input type="text" name="id" class="form-control" placeholder="Enter your member id" required=""/>
                <label for="password"><b>Password</b></label><br>
                <input type="password" name="password" class="form-control" placeholder=" Enter your Password" required=""/>
            </div>
            <div>

                <input class="submit" type="submit" name="login" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="Registration.php"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>

<?php

 if(isset($_POST["login"]))
 {
    $count = 0 ;
    $relation = mysqli_query($link,
                            " select * from member where id ='$_POST[id])' and passwords='$_POST[password]'");
    $count = mysqli_num_rows($relation);
 
    if($count == 0)
    {
        ?>
    <div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white">Invalid</strong> Username Or Password.
    </div>
<?php
    }
    else
    {
        ?>
<script type="text/javascript">
     window.location = "demo.php";   
</script>
<?php

    }
}

?>


</div>




</body>
</html>
