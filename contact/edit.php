<html >
<head>

<title>Halpes</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css" integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php include 'header.php';

?>
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
<?php  $id= $_GET['id'];?>
<?php
if(isset($_POST['submit']))
{ 

echo $fname=$_POST["fname"];
echo $mname=$_POST["mname"];
echo $lname=$_POST["lname"];
echo  $dob=$_POST["date"];
echo  $address=$_POST["Address"];
echo  $email=$_POST["email"];
echo  $mobile=$_POST["mobileno"];
        
$updat="UPDATE Register SET Fname= '$fname', Mname= '$mname', Lname= '$lname', dob= '$dob', Address= '$address', Email= '$email', Mobile= '$mobile' WHERE Sno= $id";
$result = $conn->query($updat);
if($result){
?>
<script>
alert("data update properly");
</script>
<?php
}
else{
?>
<script>
alert("data is not inserted");
</script>
<?php
}
?>
<?php
	
  }else {
  echo "0 results";
}
?>
<?php
$sql= "SELECT * FROM `Register` WHERE Sno=$id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {?>
<form action="" method="post">
<label> Student Name       </label><br />
<input type="text" name="fname" value="<?php echo $row["Fname"];?>"  />
<input type="text" name="mname" value="<?php echo $row["Mname"]; ?>" />
<input type="text" name="lname" value="<?php echo $row["Lname"]; ?>" /><br>
<label> Birthday</label><br />
<input type="date" name="date" class="date" value="<?php echo $row["dob"]; ?>" /><br />
<label>Address</label><br />
<input type="text" name="Address" class="address1" value="<?php echo $row["Address"]; ?>" /><br />
<label> Student Email</label><br />
<input type="email" class="mail" name="email" value="<?php echo $row["Email"]; ?>" /><br />
<label> Mobile Number</label><br />
<input type="tel" name="mobileno" class="mobile" value="<?php echo $row["Mobile"]; ?>" /><br />
<input type="submit" name="submit" class="submit" value="update"/>
</form>
<?php   }?>
<?php include 'footer.php'
?> 
</body>
</html>
<style>
form {text-align: center;}

</style>