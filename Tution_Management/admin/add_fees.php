<!-- <?php
include "nav.php";
$con=mysqli_connect("localhost","root","","tution_management");
if (isset($_POST['submit'])) {
	$STUDENTID=$_POST['STUDENTID'];
	$PAIDAMOUNT=$_POST['PAIDAMOUNT'];
	$DATE=$_POST['DATE'];
	$FEETYPE=$_POST['FEETYPE'];
	$FEESTATUS=$_POST['FEESTATUS'];
	$query="INSERT INTO fee(STUDENTID,PAIDAMOUNT,paiddate,FEETYPE,FEESTATUS)VALUES('$STUDENTID','$PAIDAMOUNT','$DATE','$FEETYPE','$FEESTATUS')";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "inserted successfully";
	}
	else
	{
		echo "not inserted successfully";
	}
}
?>-->
<!--
<!DOCTYPE html>
<html>

<head>
	<title>add fee</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/fees.css">
</head>

<body>
<h2>Shine Tuition center</h2>
     
    <div class="container">
     
      <div class="container-head">
          <div class="title">
          <center><h1>Fees Management</h1></center>
          </div>
      </div>
      <br>
      <div class="container-body">
         <form>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Student Id:</label>
                <div class="col-sm-10">
                  <input type="text" name="student_id" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                  <input type="text" name="paid_amount" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                  <input type="date" name="paid_date" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row" >
                <label for="inputPassword3" class="col-sm-2 col-form-label">Fees Type</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="Fees_type">
                        <option disabled>select</option>
                        <option value="ANNUVAL">Annual</option>
                        <option value="MONTHLY">Monthly</option>
                        <option value="TERM">Term</option>
                      </select>
                  </div>
            </div>
            <div class="form-group row" >
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Fees status</label>
                  <div class="col-sm-10">
                        <label class="radio-inline col-sm-2">
                          <input type="radio" name="fees_status" checked> &nbsp;Paid
                        </label>
                        <label class="radio-inline col-sm-2">
                          <input type="radio" name="fees_status">&nbsp;Pending
                        </label>
                        <label class="radio-inline col-sm-2">
                          <input type="radio" name="fees_status">&nbsp;Not Paid
                        </label>
                  </div>
            </div>
            <div class="form-group row">
                <center class="col-sm-12">
                  <input  type="submit" name="submit" class="btn btn-primary">
                </center>	
            </div>
         <form>
      </div>
      <div class="container-footer">
      </div>
    </div>
</body>
</html> -->



<?php

include "nav.php";
$con=mysqli_connect("localhost","root","","tution_management");

  $course='';
	$subject='';
	$fees_type='';
  $total_fees='';
  $paying_amount='';
  $remaining_amount='';
  $status='';
  if (isset($_POST['search'])) {
    $student_id=$_POST['student_id'];
    echo($student_id);
$query=mysqli_query($con,"select * from fees_structure where student_id='$student_id'") 
or die(mysqli_error($con));
while($row=mysqli_fetch_array($query)){
  $course=$row['course'];
	$subject=$row['subject'];
	$fees_type=$row['fees_type'];
  $total_fees=$row['total_fees'];
  $paying_amount=$row['paying_amount'];
  $remaining_amount=$row['remaining_amount'];
  $status=$row['status'];

}
  }
// if (isset($_POST['submit'])) {
// 	// $student_id=$_POST['student_id'];
// 	$course=$_POST['course'];
// 	$subject=$_POST['subject'];
// 	$fees_type=$_POST['fees_type'];
//   $total_fees=$_POST['total_fees'];
//   $paying_amount=$_POST['paying_amount'];
//   $remaining_amount=$_POST['remaining_amount'];
//   $status=$_POST['status'];
// 	$query="INSERT INTO fees_structure(course,subject,fees_type,total_fees,paying_amount,remaining_amount,status)VALUES('$course','$subject','$fees_type','$total_fees','$paying_amount','$remaining_amount','$status')";
// 	$result=mysqli_query($con,$query);
// 	if ($result) {
// 		echo "inserted successfully";
// 	}
// 	else
// 	{
// 		echo "not inserted successfully";
// 	}
// }
?>
<!DOCTYPE html>
<html>

<head>
	<title>add fee</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/fees.css">
</head>

<body>
<h2>Shine Tuition center</h2>
     
    <div class="container">
     
      <div class="container-head">
          <div class="title">
          <center><h1>Fees Management</h1></center>
          </div>
      </div>
      <br>
      <div class="container-body">
    
         
         <form method="POST" action="">
         <div class="form-row">
              <div class="form-group col-md-5">
                <input type="text" class="form-control" id="inputEmail4" name="student_id" placeholder="Search By Id">
              </div>
              <div class="form-group  col-md-2">
                    <center>
                      <input  type="submit"  name="search" Value="search" class="btn btn-primary ">
                    </center>	
              </div>
          </div>
         <div class="form-group row">
              <label for="inputEmail4" class="col-sm-2 col-form-label">Standard</label>
              <div class="col-sm-10">
                       <select class="form-control" name="course" id="course" required autofocus>
                         <option <?php if ($course=='$course'){ echo "selected";} ?> >select</option>
                         <!-- <option>6th</option>
                         <option>7th</option>
                         <option>8th</option>
                         <option>9th</option>
                         <option>10th</option>
                         <option>11th</option>
                         <option>12th</option> -->
                       <?php
                         $query=mysqli_query($con,"SELECT * From classes");
                         while($row=mysqli_fetch_array($query)){
                           echo "<option value='".$row['class']."'>".$row['class']."</option>";
                         }
                         ?>
                       </select>
                   </div>
            </div>
            <div class="form-group row" >
                <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="subject" id="subject">
                        <option disabled>select</option>
  
                      </select>
                  </div>
            </div>
         <div class="form-group row" >
                <label for="inputPassword3" class="col-sm-2 col-form-label">Fees Type</label>
                  <div class="col-sm-10">

                  <!-- <select name="fees_type">
                   <option>Select</option>
                      <?php
                          $res = mysqli_query($link, "select * from company_name");
                          while ($row = mysqli_fetch_array($res)) {
                              echo "<option>";
                              echo $row["company_name"];
                              echo "</option>";
                          }
                          ?>  
                  </select> -->
                       <select class="form-control" name="fees_type" id="fees_type">
                        <option disabled>select</option>
                        <option value="ANNUVAL">Annual</option>
                        <option value="MONTHLY">Monthly</option>
                        <option value="TERM">Term</option>
                      </select>
                  </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label"> Total Fees</label>
                <div class="col-sm-10">
                  <input type="text" name="total_fees" class="form-control" id="fee" readonly >
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                  <input type="text" name="paying_amount" value="0"  class="form-control" id="amount">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Remaining Amount</label>
                <div class="col-sm-10">
                  <input type="text" name="remaining_amount" class="form-control" id="remain" >
                </div>
            </div>

            <div class="form-group row" >
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Fees status</label>
                  <div class="col-sm-10">
                        
                          <input type="radio" name="status" value="paid">    
                          <label class="radio-inline col-sm-2">
                          paid</label> 
                          <input type="radio" name="status" value="paid">                   
                         <label class="radio-inline col-sm-2">pending
                          </label>
                         
                          <input type="radio" name="status" value="notpaid" checked>
                        <label class="radio-inline col-sm-2">Not paid</label>
                          
                        
                  </div>
            </div>
            <div class="form-group row">
                <center class="col-sm-12">
                  <input  type="submit" name="submit" class="btn btn-primary">
                </center>	
            </div>
         <form>
      </div>
      <div class="container-footer">
      </div>
    </div>
</body>
</html>



<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script language="javascript" type="text/javascript">
$(document).ready(function(){
  $("#course").change(function(){
  //  alert("hello");
    var course = $(this).val();
    // alert(course);
    
    $.ajax({
      url: 'get_subject_ajax.php',
      type: 'POST',
      data: 'course='+course,
      success: function(data){
        var subject = $.parseJSON(data);
        $('#subject').html(subject);
      }
    });
  });

  $("#subject").change(function(){
   // alert("hello");
    var subject = $(this).val();
    var course = $('#course').val();
  });

  $("#fees_type").on('change',function(){
    //  alert("hello");  
    var fees_type = $(this).val();
    var subject = $('#subject').val();
    var course = $('#course').val();
    
    $.ajax({
      url: 'get_fees.php',
      type: 'POST',
      data: 'subject='+subject+'&course='+course+'&fees_type='+fees_type,
      success: function(data){
        var fee = $.parseJSON(data);
        // alert(fee);
        $('#fee').val(fee);
      }
    });
  });

 $("#amount").change(function(){
    //  alert("hello");
    var fee = $('#fee').val();
    // alert(fee);
    var amount = $(this).val();
    $.ajax({
      url: 'get_remaining.php',
      type: 'POST',
      data: 'fee='+fee+'&amount='+amount,
      success: function(data){
        var remaining = $.parseJSON(data);
        // alert(fee);
        $('#remain').val(remaining);
      }
    });
    
  });

  
});


</script>