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
    <title>members_list</title>
</head>
<body>
    <h2>List of the library members :</h2>
<div>
<div>
    <?php
    $selection = mysqli_query($link, "SELECT * FROM member");
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr>";
    echo "<th style='border: 1px solid #000; padding: 8px;'>Name</th>";
    echo "<th style='border: 1px solid #000; padding: 8px;'>ID</th>";
    echo "<th style='border: 1px solid #000; padding: 8px;'>Email</th>";
    echo "<th style='border: 1px solid #000; padding: 8px;'>Mobile</th>";
    echo "<th style='border: 1px solid #000; padding: 8px;'>Dept</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($selection)) {
        echo "<tr>";
        echo "<td style='border: 1px solid #000; padding: 8px;'>" . $row["name"] . "</td>";
        echo "<td style='border: 1px solid #000; padding: 8px;'>" . $row["id"] . "</td>";
        echo "<td style='border: 1px solid #000; padding: 8px;'>" . $row["email"] . "</td>";
        echo "<td style='border: 1px solid #000; padding: 8px;'>" . $row["mobile"] . "</td>";
        echo "<td style='border: 1px solid #000; padding: 8px;'>" . $row["dept"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>


</div>
<?php
include ("FooterSection.php");
?>
</body>
</html>