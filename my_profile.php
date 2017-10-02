<?php
include 'db_connection.php';
$primary = "pikapikapikachu";

$sql = "SELECT * FROM `profiles` WHERE username = '".$primary."'";

$conn = OpenCon();
$result = $conn->query($sql) or die($conn->error);

$row = $result->fetch_assoc();

CloseCon($conn);
?>

<html>
<body>
	<h1>MY PROFILE</h1>
	<h3>
		<?php echo '@'.$row["username"]."<br>"; ?>
	</h3>
	<?php
		echo $row["full_name"]."<br>";
		if ($row["driver_status"] == 1)
		{
			echo "Driver";
		} else {
			echo "Non-Driver";
		}
		echo "<br>";
		echo $row["email"]."<br>";
		echo $row["phone_number"]."<br>";
	?>

	<h2>PREFERRED LOCATIONS</h2>

	<?php
	$sql = "SELECT locations FROM `driver-locations` WHERE username = '".$primary."'";

	$conn = OpenCon();
	$result = $conn->query($sql) or die($conn->error);

	while ($row = $result->fetch_assoc()) {
		echo $row["locations"]."<br>";
	}

	CloseCon($conn);
	?>

</body>
</html>