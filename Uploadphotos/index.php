<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>



 

    
<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
 Select Image: <br />
 
 <input type="file" name="image" class="ed"><br />
 Caption<br />
 <input name="caption" type="text" class="ed" id="brnu" />
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </form>





<br />
Photo Archieve
<br />
<br />
<?php
include('config.php');

$mysqli = new mysqli("localhost", "root", "", "photoupload");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM photos");

while($row = $result->fetch_assoc()) {
    echo '<div id="imagelist">';
    echo '<p><img src="'.$row['location'].'"></p>';
    echo '<p id="caption">'.$row['caption'].' </p>';
    echo '</div>';
}

$mysqli->close();
?>

</body>
</html>