<?php
include ("connection.php");
include ("headerSection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <h2>Books :</h2>
    <form name = "form1" action="" method="post" enctype="multipart/form-data">
        <table border= "3">
            <tr>
                <td><input type="text" class="form-control" placeholder="Book id " name = "bookid"required ></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" placeholder="Book Title" name="title" required ></td>
            </tr>
            <tr>
                
                <td>
                    book image: <br>
                    <input type="file"  name="file1" required >
                </td>
             
            </tr>
            <tr>
                <td><input type="text" class="form-control" placeholder="author name " name="author" required ></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" placeholder="Book quantity" name="total_quantity" required ></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" placeholder="Available quantity" name="available_quantity" required ></td>
            </tr>
            <tr>
                <td><input type="submit" class="button" value="add this book" name="submit" required ></td>
            </tr>
        </table>
    </form>

<?php
 if(isset($_POST["submit"]))
 {
   // $time = md5(time());
    //$img = $_FILES["file1"]["name"];
    //$location = "./books_image".$time.$img ;
    // $location1 = "books_image".$time.$img ;
    // move_uploaded_file($_FILES["file1"]["tmp_name"],$location);
    $ext= explode(".",$_FILES['file1']['name']);
    $c=count($ext);
    $ext=$ext[$c-1];
    $date=date("D:M:Y");
    $time=date("h:i:s");
    $image_name=md5($date.$time);
    $image=$image_name.".".$ext;
	 
    mysqli_query($link, "insert into book values ('$_POST[bookid]','$_POST[title]','$image','$_POST[author]','$_POST[total_quantity]','$_POST[available_quantity]')");

    if($image !=null){
        move_uploaded_file($_FILES['file1']['tmp_name'],"books_image/$image");
        }
?>

    <script type = "text/javascript">
        alert("books added successfully");
    </script>
<?php


}



?>


</body>
</html>