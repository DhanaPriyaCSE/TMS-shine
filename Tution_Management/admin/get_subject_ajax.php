<?php
include('array.php');
$con=mysqli_connect("localhost","root","","tution_management");

$course = $_POST['course'];

$html = '<option value="">Select subject</option>';

foreach ($subject[$course] as $key => $value) {
	$html .= '<option value="'.$value.'">'.$value.'</option>';
} 
echo json_encode($html);
exit;
?>
