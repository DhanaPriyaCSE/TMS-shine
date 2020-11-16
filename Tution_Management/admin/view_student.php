<?php
include "admin_dashboard.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>serach student details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/admission.css">
<link rel="stylesheet" href="../css/fees.css">
<link rel="stylesheet" href="../css/student.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
">
</head>
<body>
<center>
<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Search Student</h1></center>
         </div>
     </div>
     <div class="container-body">
        <form action="" method="POST">
          <div class="form-row">
              <div class="form-group col-md-3">
                    <div>
                          <select class="form-control" name="COURSEOPTION">
                            <option >--Select Course--</option>
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
              <div class="form-group col-md-2">
                OR
              </div>
              <div class="form-group col-md-3">
                <input type="text" class="form-control" id="inputEmail4" name="STUDENTID" placeholder="Search By Id">
              </div>
              <div class="form-group  col-md-2">
                    <center>
                      <input  type="submit"  name="search" Value="search" class="btn btn-primary ">
                    </center>	
              </div>
          </div>
          <br>
          <!-- table start -->
          
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Course</th>
                <th scope="col">Email</th>
                <th scope="col">Ph No</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
	$con=mysqli_connect("localhost","root","","tution_management");
    
    
    if (isset($_POST['search'])) {
      $STUDENTID=$_POST['STUDENTID'];
    $COURSEOPTION=$_POST['COURSEOPTION'];
    $query="SELECT * FROM students WHERE student_id='$STUDENTID' or course='$COURSEOPTION' ";
    }
    else{
      $query="SELECT * FROM students "; 
           }
    
		$query_run=mysqli_query($con,$query) or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query_run)) {
			?>
			<tr>
     
		<td><?php echo $row['student_id'];?></td>
		<td><?php echo $row['first_name'];?></td>
		<td><?php echo $row['last_name'];?></td>
    <td><?php echo $row['course'];?></td>
    <td><?php echo $row['email'];?></td>
		<td><?php echo $row['ph_no'];?></td>
		<td><a href="edit_student.php?student_id=<?php echo $row['student_id']; ?>" class="edit"> <i class="fa fa-pencil "></i>&nbsp;Edit</a></td>
		<td><a href="delete_student.php?student_id=<?php echo $row['student_id']; ?>" class="delete"> <i class="fa fa-trash "></i>&nbsp;Delete</a></td>
		
		</tr>				

		<?php
		}
	
	?>
            
            </tbody>
          </table>
          <!-- table end -->
        <form>
     </div>

   </div>
<!-- 
	<h1>SEARCH STUDENT DETAILS</h1>
	<form action="" method="POST">
	<input type="text" name="STUDENTID" placeholder="ENTER STUDENTID TO SEARCH"/><br/>
	<input type="submit" name="search" value="SEARCH DATA">	
	<table>
<tr>
<th>STUDENTID</th>	
<th>NAME</th>
<th>PHONENUMBER</th>
<th>EMAILID</th>
<th>SCHOOLNAME</th>	
<th>DATEOFBIRTH</th>
<th>FATHERNAME</th>
<th>MOTHERNAME</th>	
<th>GENDER</th>
<th>CASTE</th>
<th>ADDRESS</th>
<th>COURSEOPTION</th>							
</tr><br>
	</form>
	<?php
	$con=mysqli_connect("localhost","root","","tuition");
    if (isset($_POST['search'])) {
		$STUDENTID=$_POST['STUDENTID'];
		$query="SELECT * FROM front WHERE STUDENTID='$STUDENTID'";
		$query_run=mysqli_query($con,$query);
		while ($row=mysqli_fetch_array($query_run)) {
			?>
			<form action="" method="POST">
			<tr>
		<td><?php echo $row['STUDENTID'];?></td>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['PHONENUMBER'];?></td>
		<td><?php echo $row['EMAILID'];?></td>
		<td><?php echo $row['SCHOOLNAME'];?></td>
		<td><?php echo $row['DATEOFBIRTH'];?></td>
		<td><?php echo $row['FATHERNAME'];?></td>
		<td><?php echo $row['MOTHERNAME'];?></td>
		<td><?php echo $row['GENDER'];?></td>
		<td><?php echo $row['CASTE'];?></td>
		<td><?php echo $row['ADDRESS'];?></td>
		<td><?php echo $row['COURSEOPTION'];?></td>
		</tr>				
		</form>
		<?php
		}
	}
	?> -->
</center>
</body>
</html>