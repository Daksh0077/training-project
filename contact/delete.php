<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentrecord";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if 
 
($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<?php echo $id =$_GET['id']; ?>



<?php 




$remove="DELETE FROM `Register` WHERE Sno=$id";
$result = $conn->query($remove);



if($result){
echo "data deleted successfully!!";
}
else{
echo "error in delete query";
}



$conn->close();

                     
?>
</body>
</html>