
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
<?php echo " hii";
$sql= "SELECT*FROM `Register`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
{
       . $row["Sno"]. " - First name: " . $row["Fname"]. "- Middle name: " . $row["Mname"].  "- Last name: " . $row["Lname"]."- DOB: " . $row["dob"]. "- Address: " . $row["Address"]."- Email " . $row["Email"]. "- Mobile no " . $row["Mobile"]."<br>";
}
} else {
  echo "0 results";
}
$conn->close();
?>