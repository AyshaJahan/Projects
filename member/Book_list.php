<?php
    include ("connection.php");
    include "headerSection.php";
?> 
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
    </head>
    <body>
        
    
        <!-- page content area main -->
        <!-- <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                      
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                       
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title"> -->
                                <h2>List of available Books:</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <form action="" method="post" name="form1" class="navbar-form">
                                <input type="text" name="search" placeholder="Search for books ..."class="form-control"><br>
                                <!-- <button type="submit" name="submit" value="search books" class= "btn btn-default" style="background-color:grey;"> -->
                                <!-- <span class="glyphicon glyphicon-search"> -->
                                    
                                <!-- </span> </button> -->
                                <button type="submit" class="btn btn-info" name="submit">
                                    <span class="glyphicon glyphicon-search"></span> search
                                </button>
                            </form>

                            <?php
if (isset($_POST["submit"])) {
   // $sel = mysqli_query($link, "select * from book where Title like ('%$_POST[search]')");
   $sel = mysqli_query($link, "SELECT * FROM book WHERE Title LIKE '%" . $_POST['search'] . "%'");

    echo "<table>";
    echo "<tr>";
    echo "<th>"; echo "Book id"; echo "</th>";
    echo "<th>"; echo "Book Title"; echo "</th>";
    echo "<th>"; echo "Book Image"; echo "</th>";
    echo "<th>"; echo "Author"; echo "</th>";
    // echo "<th>"; echo "Total Quantity"; echo "</th>";
    echo "<th>"; echo "Available Quantity"; echo "</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($sel)) {
        ?>
        <tr>
            <td> <?php echo $row["book_id"]; ?> </td>
            <td> <?php echo $row["Title"]; ?> </td>
            <td> <img src="books_image/<?php echo $row["Book_image"]; ?>"> </td>

            <td> <?php echo $row["Author_name"]; ?> </td>
            <!-- <td><?php //echo $row["Total_quantity"]; ?> </td> -->
            
            <td> <?php echo $row["Available_quantity"]; ?> </td>
        </tr>
        <?php
    }
} else {
    $sel = mysqli_query($link, "select * from book");
    echo "<table>";
    echo "<tr>";
    echo "<th>"; echo "Book id"; echo "</th>";
    echo "<th>"; echo "Book Title"; echo "</th>";
    echo "<th>"; echo "Book Image"; echo "</th>";
    echo "<th>"; echo "Author"; echo "</th>";
    // echo "<th>"; echo "Total Quantity"; echo "</th>";
    echo "<th>"; echo "Available Quantity"; echo "</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($sel)) {
        ?>
        <tr>
            <td> <?php echo $row["book_id"]; ?> </td>
            <td> <?php echo $row["Title"]; ?> </td>
            <td> <img src="books_image/<?php echo $row["Book_image"]; ?>"> </td>
            <td> <?php echo $row["Author_name"]; ?> </td>
            <!-- <td> <?php //echo $row["Total_quantity"]; ?></td> -->
            <td> <?php echo $row["Available_quantity"]; ?> </td>
        </tr>
        <?php
    }
}
?>


</body>
<?php

//include "FooterSection.php";

?>
</html>

