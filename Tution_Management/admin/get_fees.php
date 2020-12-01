<?php
include('array.php');
$con=mysqli_connect("localhost","root","","tution_management");

$subject = $_POST['subject'];
$course = $_POST['course'];
$fees_type = $_POST['fees_type'];

$sql = "SELECT amount FROM fees_type WHERE subject ='$subject' &&  course = '$course' && fees_type='$fees_type' ";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));

while($row = mysqli_fetch_array($result)) {
  $html= $row['amount'];

}
echo json_encode($html);
exit;
?>
 