<?php
include ("connection.php");

session_start();
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
if (isset($_SESSION['login_user'])) {
    ?>
    <nav class="navbar navbar-Inverse">
        <div class="container-fluid">
            <h2><font color="black">The Codex Collection</font></h2>
            <a href="#">Home</a>
            <a href="Book_list.php">Books</a>
            <a href="#">Borrowed Books</a>
            <a href="logout.php">Logout</a>
            <a href="#">About Us</a>
        </div>
    </nav>
    <?php
    echo "ID : ";
    echo $_SESSION['login_user'];
} 
else
{
   ?>
    <nav class="navbar navbar-Inverse">
        
        <div class="container-fluid">
        <h2 ><font color="skyblue">Library Management System </font></h2>
        
            <a href="#">Home</a>
            <a href="Book_list.php">Books</a>
            
            <a href="Registration.php"> Sign in </a>
            
            <a href="member/login.php">Login</a>
          
            <a href="#">About Us</a>
        
        </div>
    </nav>
    <?php
}
?>
</html>
