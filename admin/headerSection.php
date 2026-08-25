<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        /* Reset some default styles */
        body, ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        /* Styles for the top navigation bar */
        .navbar {
            background-color: #333;
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
            background-color: #ddd;
            color: black;
        }

        /* Styles for the homepage content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Books</a>
        <a href="members_list.php">Members</a>
        <a href="#">Borrowed Books</a>
        <a href="#">About Us</a>
    </div>

    <div class="container">
        <h1>Welcome to the Library Management System</h1>
    </div>
</body>
</html>