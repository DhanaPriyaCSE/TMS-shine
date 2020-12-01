<?php
include('array.php');
//$con=mysqli_connect("localhost","root","","tution_management");

$fee = $_POST['fee'];
$amount = $_POST['amount'];

  $html= $fee -$amount;

echo json_encode($html);
exit;
?>
 