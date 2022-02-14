<?php
$hostname = "http://localhost/web-application";

$conn = mysqli_connect("localhost","root","","task-hackathon") or die("Connection failed : " . mysqli_connect_error());

if (isset($_POST['id'])) {
	$id-$_POST['id'];
	$query = mysqli_query($conn,"select * from ag_cities where stateID = 'id' ");
	while ($row = mysqli_fetch_array($query)) {
		$id=$row['id'];
		$ag_cities=$row['ag_cities'];
		echo "<option value'$id']>city</option>";
	}
}

?>
