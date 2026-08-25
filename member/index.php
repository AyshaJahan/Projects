<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom style for the navbar */
        .navbar {
            background-color: #6db6b9; /* Change the background color to a shade of blue */
        }

        .navbar-brand {
            color: #fff; /* Set the text color to white */
            font-weight: bold;
            font-size: 24px;
        }

        .navbar-toggler-icon {
            background-color: #fff; /* Set the hamburger icon color to white */
        }

        .navbar-nav .nav-link {
            color: #fff; /* Set the link text color to white */
        }

        .navbar-nav .nav-link:hover {
            color: #f0f0f0; /* Change link color on hover */
        }

        .rounded-logo {
            border-radius: 50%; /* Make the logo image round */
        }
        .quote {
        height: 90vh;
        background-color: #c9dff2a9;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        line-height: 1.5;
    }

    .quote p {
        margin: 0;
    }

    .author {
        font-size: 18px;
        font-style: italic;
        margin-top: 10px;
    }
    body {
    background-image: url('background.jpg'); /* Replace 'background.jpg' with your image file path */
    background-size: cover; /* Cover the entire background */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Prevent image from repeating */
    height: 75vh; /* Set the height to 75% of the viewport height */
    

}
   .id{
    float:right;
   }

    </style>
</head>
<body background>
    <?php
    include("connection.php");
    session_start();
    
    if (isset($_SESSION['login_user'])) {
        ?>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo2.jpg" alt="Library Logo" width="50" height="50" class="rounded-logo">
                    <span class="ml-2">The Codex Collection</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Book_list.php">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Borrowed Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        
                       
                    </ul>
                </div>
                <?php
                            echo "ID: " . $_SESSION['login_user'];
                        ?>
                       
            </div>
        </nav>
        <?php
       // echo "ID: " . $_SESSION['login_user'];
    } else {
        ?>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="your-logo-image.png" alt="Library Logo" width="50" height="50" class="rounded-logo">
                    <span class="ml-2">Library Management System</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Book_list.php">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Registration.php">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
    }
    ?>

    <!-- Rest of your homepage content goes here -->
    <!-- <div class="container mt-5">
        <h1>Welcome to the Library Management System</h1>
    
    </div> -->
    <div class="quote">
    <h1>Welcome to THE CODEX COLLECTION</h1>
    <p>The more that you</p>
    <p>read, the more things</p>
    <p>you will know. The more</p>
    <p>that you learn, the more</p>
    <p>places you'll go.</p>
    <p class="author">— Dr. Seuss</p>
</div>


    <!-- Include Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    
