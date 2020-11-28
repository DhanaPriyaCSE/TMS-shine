<?php
include "admin_dashboard.php";
$con=mysqli_connect("localhost","root","","tution_management");
if (isset($_POST['submit'])) {
  // $STUDENTID=$_POST["STUDENTID"];
  $first_name=$_POST["f_name"];
  $last_name=$_POST["l_name"];
	$ph_no=$_POST["ph_no"];
	$email=$_POST["email"];
	$school=$_POST["school_name"];
	$dob=$_POST["DOB"];
	$fa_name=$_POST["fa_name"]; 
	$ma_name=$_POST["ma_name"];
	$gender=$_POST["gender"];
  $address=$_POST["address"];
  $parent_no=$_POST["parent_no"];
  $course=$_POST["course"];
  
	$reg="INSERT INTO students(first_name,last_name,ph_no,email,dob,gender,course,school,father_name,mather_name,address,parent_no)
  VALUES('$first_name','$last_name','$ph_no','$email','$dob','$gender','$course','$school','$fa_name','$ma_name','$address','$parent_no')";
	$query_run=mysqli_query($con,$reg) or die(mysqli_error($con));
	// if($query_run)
	// {
	// echo '<script>alert("ADMISSION SUCCESSFUL")</script>';
  //   } 
  //   else
  //   {
  //   	echo '<script>alert("ADMISSION  NOT SUCCESSFUL")</script>';

  //   }
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title>shine-admission</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/admission.css">
<link rel="stylesheet" href="../css/fees.css">

</head>
<body>
  
<h2>Shine Tuition center</h2>
     
     <div class="container">
      
       <div class="container-head">
           <div class="title">
           <center><h1>Admission</h1></center>
           </div>
       </div>
     
       <div class="container-body">
          <form action=" " method="POST">
          <div class="title">Student details</div>
          <div class="form-row top">
            <div class="form-group col-md-6">
              <label for="inputEmail4">First Name</label>
              <input type="text" class="form-control" id="inputEmail4" name='f_name' placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Last Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="l_name" placeholder="Last Name">
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Phone No.</label>
              <input type="text" class="form-control" id="inputEmail4" name="ph_no" placeholder="Phone No.">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Email</label>
              <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Email">
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">DOB</label>
              <input type="date" class="form-control" name='DOB' id="inputEmail4" placeholder="DOB">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                   <div class="col-sm">
                         <label class="radio-inline ">
                           <input type="radio" name="gender">&nbsp;Male
                         </label>
                         <label class="radio-inline ">
                           <input type="radio" name="gender">&nbsp;Female
                         </label>
                   </div>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Standard</label>
              <div>
                       <select class="form-control" name="course">
                         <option disabled>select</option>
                         <option>6th</option>
                         <option>7th</option>
                         <option>8th</option>
                         <option>9th</option>
                         <option>10th</option>
                         <option>11th</option>
                         <option>12th</option>
                       </select>
                   </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">School Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="school_name" placeholder="School Name">
            </div>
         </div>
         <br>
         <div class="title">Personal details</div>
          <div class="form-row top">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Father's Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="fa_name" placeholder="Father's Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Mather's Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="ma_name" placeholder="Mather's Name">
            </div>
         </div>
    
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Parents No.</label>
              <input type="text" class="form-control" id="inputPassword4" name="parent_no" placeholder="Parents No.">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Address</label>
              <textarea class="form-control" rows="5" id="comment" placeholder="enter your address" name="address"></textarea>
            </div>
         </div>
        
             <div class="form-group row">
             <!-- <a href="add_fees.php" > -->
                  <center class="col-sm-12">
                        <button  type="button" Value="Next" id="next" class="btn btn-primary" > Next</button>
                  </center>	
              <!-- </a> -->
             </div>
          <form>
       </div>
       <div class="container-footer">
       </div>
     </div>
 
     <script type="text/javascript">
    alert($email); 
    document.getElementById('next').onclick= function(){
    location.href="../admin/add_fees.php";
  }
</script>
</body>
</html>
