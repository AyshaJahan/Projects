<?php
include("connection.php");
include("headerSection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Change Password</title>
    <style>
        body {
            background-color: #f4f4f4;
        }

        .wrapper {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }

        .wrapper h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-default {
            background-color: #007BFF;
            color: #fff;
        }

        .btn-default:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class='wrapper'>
        <div>
            <h1>Change Password</h1>
        </div>
        <div>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="id" class="form-control" placeholder="Type your id" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="New password" required>
                </div>
                <button type="submit" class="btn btn-default">Update</button>
            </form>
        </div>
    </div>
</body>

</html>
