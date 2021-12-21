<!DOCTYPE html >
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
<?php include 'header.php'
?>
<body>
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

<?php
$sql= "SELECT*FROM `Register`";
$result = $conn->query($sql);
?>
<div class="student_records">
<h1>STUDENT RECORD</H1>
	<ul class="student_table" "tb_heading">
	<li>Sno</li>
	<li>Firstname</li>
	<li>Middlename</li>
	<li>Lastname</li>
	<li>DOB</li>
	<li>Address</li>
	<li>Email</li>
	<li>Mobile no</li>
	<li>Action</li>
	</ul>
<?php	if ($result->num_rows > 0) 
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
	<ul class="student_table">
	
	<li><?php echo $row["Sno"]; ?></li>
	<li><?php echo $row["Fname"];?></li>
	<li><?php echo $row["Mname"];?></li>
	<li><?php echo $row["Lname"];?></li>
	<li><?php echo $row["dob"];?></li>
	<li><?php echo $row["Address"];?></li>
	<li><?php echo $row["Email"];?></li>
	<li><?php echo $row["Mobile"];?></li>
	<?php $id= $row["Sno"]; ?>
	<li><a href="edit.php?id=<?php echo $id;?>"><i class="fas fa-edit"></i></a>
	<a href="delete.php?id=<?php echo $id;?>"><i class="fas fa-trash-alt"></i></a></li>
	
	</ul>
	<?php
	
  }else {
  echo "0 results";
}
?>
</div>
</div>

</body>
<style>
.row{width:100%;}
.student_records{margin:20px 0px}
.student_records H1{font-size: 50px;
    TEXT-ALIGN: center;
    color: #19c69f;
    font-weight: 700;}
ul.student_table.tb_heading{
	float: left;
	width:100%;
	list-style-type:none;
padding:0;margin:0;}
ul.student_table li{float:left; width:11%; padding:7px 4px; border:1px solid #ddd; list-style-type:none;}
.tb_heading li{font-weight:700; background-color: #19c69c}
.fas{color:black; background:color="#19c69f"}
	
</style>
</html>
<?php include 'footer.php'
?>