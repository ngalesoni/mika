Registered members
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kabialo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

			$sql = "SELECT *FROM members";
			$result = $conn->query($sql);
			if(mysqli_num_rows($result) > 0){
				
			echo "<table border style=' border-collapse: collapse;width:50%;'>
					<thead class='thead-dark'>
					<tr>
						<th scope='col'>First Name</th>
						<th scope='col'>Last Name</th>
						<th scope='col'>Gender</th>
						<th scope='col'>Food</th>
						<th scope='col'>Quote</th>
						<th scope='col'>Education</th>
						<th scope='col'>Time</th>
					</tr>
				</thead><tbody>";
			while($rows = $result->fetch_assoc()){
			echo "<tr>
						<td scope='col'>$rows[Fname]</td>
						<td scope='col'>$rows[Lname]</td>
						<td scope='col'>$rows[Gender] </td>
						<td scope='col'>$rows[Food] </td>
						<td scope='col'>$rows[Quote]</td>
						<td scope='col'>$rows[Education]</td>
						<td scope='col'>$rows[Time] </td>
					</tr>";
		}}
		else
		{
			echo "Nothing to show";
		}
	?>
</table>

<p><a href="form.php">Back to Form</a></p>