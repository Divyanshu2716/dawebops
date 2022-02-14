<?php
$conn = mysqli_connect("localhost","root","","task-hackathon") or die("Connection failed : " . mysqli_connect_error());


$state_id =  $_POST['stateID'];

$city = "SELECT * FROM ag_cities WHERE stateID = $state_id";
$city_qry = mysqli_query($conn, $city);


$output = '<option value="">Select City</option>';
while ($city_row = mysqli_fetch_assoc($city_qry)) {
    $output .= '<option value="' . $city_row['id'] . '">' . $city_row['name'] . '</option>';
}
echo $output;
