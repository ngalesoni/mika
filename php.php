
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kabialo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
	
if(isset($_POST['submit'])){
	echo "<table border width='50%' style='border-collapse:collapse;'><a href='show.php'>Show</a> all registered members 
	<tr>
	<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Food</th>
		<th>Quote</th>
		<th>Education</th>
		<th>Time</th>
	</tr>";
	$Fname =  $_POST['Fname'];
	$Lname =  $_POST['Lname'];
	$Gender =  $_POST['Gender'];
	$Food =  $_POST['Food'];
	$Quote =  $_POST['Quote'];
	$Education =  $_POST['Education'];
	$Time =  $_POST['Time'];

	$sql="INSERT INTO `members` (`Fname`, `Lname`, `Gender`, `Food`, `Quote`, `Education`, `Time`) VALUES ('$Fname','$Lname','$Gender','$Food','$Quote','$Education','$Time')";
	if (mysqli_query($conn,$sql))
	echo "<p> The following Data has been posted to Database</p>";
	echo "<tr>
				<td>$Fname</td>
				<td>$Lname</td>
				<td>$Gender</td>
				<td>$Food</td>
				<td>$Quote</td>
				<td>$Education</td>
				<td>$Time</td> </tr>";
}
?>
</table>