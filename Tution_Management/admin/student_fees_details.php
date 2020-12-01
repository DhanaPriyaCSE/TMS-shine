<?php
include "nav.php";
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
     <br>
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
                <th scope="col">Total Fees</th>
                <th scope="col">Paid Amount</th>
                <th scope="col">Remaining Amount</th>
                
              </tr>
            </thead>
            <tbody>
            <?php
	$con=mysqli_connect("localhost","root","","tution_management");
    
    
    if (isset($_POST['search'])) {
      $STUDENTID=$_POST['STUDENTID'];
    $COURSEOPTION=$_POST['COURSEOPTION'];
       if($STUDENTID != " "){
          $query=" SELECT S.student_id, S.first_name, F.total_fees,F.paying_amount,F.remaining_amount
          FROM students S
          INNER JOIN fees_structure F ON S.student_id=F.student_id where S.student_id='$STUDENTID' or S.course='$COURSEOPTION'";
          }else{
            echo "No Record Found";
          }
    }
    else{
      $query=" SELECT S.student_id, S.first_name, F.total_fees,F.paying_amount,F.remaining_amount
    FROM students S
    INNER JOIN fees_structure  F ON S.student_id=F.student_id";
           }
    
		$query_run=mysqli_query($con,$query) or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query_run)) {
			?>
			<tr>
     
		<td><?php echo $row['student_id'];?></td>
		<td><?php echo $row['first_name'];?></td>
		<td><?php echo $row['total_fees'];?></td>
    <td><?php echo $row['paying_amount'];?></td>
    <td><?php echo $row['remaining_amount'];?></td>
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
</center>
</body>
</html>