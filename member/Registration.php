<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel= "stylesheet" href= "Registration.css"> -->
    <title>Member Registration Form </title>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}
form {
    background-color: #ffffff;
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 10px rgba(0,0,0,0.3);
}
input[type=text], input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
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
    box-align: center;
    
  }
  
.submit :hover {
    opacity: 0.8;
    color: #341777ce;
  }
  
h2 {
    text-align: center;
    color: #333333;
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
    font-size: 14px;
    }
    a:hover{
      font-size: 15px;
      color: #10022f;
    }
    
    .navbar {
            background-color:  #10022f;
            overflow: hidden;
            display: block;
            overflow: hidden;
            width: 100%;
            height: 50%;
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
            background-color: #13094b71;
            color: white;
        }

    
    
    </style>
</head>

<br>

<!-- <div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console" align = "center">Library Management System</h1>
</div> -->


<body class="login" style="margin-top: -20px;">


<div class="navbar">
        <a href="#">Home</a>
        <a href="#">About Us</a>
    </div>
    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>Member Registration Form</h2><br>

                    <div class="imgcontainer">
                      <img src="MyLibrary.jpg" alt="Avatar" class="avatar">
                    </div>
                    <div>
                        <label for="name"><b>Name</b></label>
                        <input type="text" class="form-control" placeholder="Enter your name" name="name" required=""/>
                    
                        <label for="member_id"><b>Member ID</b></label>
                        <input type="text" class="form-control" placeholder="Enter your id" name="id" required=""/>
                    
                        <label for="email"><b>Email</b></label>
                        <input type="email" class="form-control" placeholder="Enter the Email address" name="email" required=""/>
                    
                        <label for="mobile_no"><b>Mobile No.</b></label>
                        <input type="text" class="form-control" placeholder="Enter your mobile number" name="contact" required=""/>
                
                        <label for="dept"><b>Department</b></label>
                        <input type="text" class="form-control" placeholder="Enter the Department name" name="dept" required=""/>
                    
                        <label for="passwords"><b>Password</b></label>
                        <input type="password" class="form-control" placeholder=" Enter your Password" name="password" required=""/>
                    </div>
                    
                        <input class="submit " type="submit" name="submit" value="Register">
                        <p class="change_link">Already have an account?
                        <a href="login.php"> Login here </a>
                        </p>
                    


                </form>
            </section>
<?php
   include "connection.php";
    if(isset($_POST["submit"]))
    {
     
       
        $query="insert into member values
        (
           '$_POST[name]', 
           '$_POST[id]', 
           '$_POST[email]', 
           '$_POST[contact]', 
           '$_POST[dept]', 
           '$_POST[password]'

        )";
        if(mysqli_query($link,$query))
        {
            echo "Registration Completed !";
        }

        


    }

?>
    </div>

    
</body>
</html>
<!--  -->