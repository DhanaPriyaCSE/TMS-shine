<?php
include "../admin/admin_dashboard.php";
// $con=mysqli_connect("localhost","root","","tuition");
// if (isset($_POST["send"])) {
// 	$chk=implode(',',$_POST['chk']);
// 	$SUBJECT=$_POST["SUBJECT"];
// 	$MESSAGE=$_POST["MESSAGE"];
// 	$qry="INSERT INTO announcement(chk,SUBJECT,MESSAGE)VALUES('$chk','$SUBJECT','$MESSAGE')";
// 	$query_run=mysqli_query($con,$qry);
// 	if ($query_run) {
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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/admission.css">
<link rel="stylesheet" href="../css/fees.css">
<link rel="stylesheet" href="../css/student.css">
<link rel="stylesheet" href="../css/announcement.css">
</head>
<body>

<!-- template start -->

<center>
<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Announcement</h1></center>
         </div>
     </div>
     <br>
     <div class="container-body">
        <form action="" method="POST">
          <div class="form-row">
              <div class="form-group col-md-3">
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
  <div class="row">
    <div class="col-4 task">
      <form method="POST" action="">
          <div class="title-task">
            <center><h1>Task Portal</h1></center>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label" >Subject</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="SUBJECT">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label" >Message</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" name="MESSAGE" >
              </textarea>
            </div>
          </div>
          <div class="form-group  col-md-2">
                      <center>
                        <input  type="submit"  name="submit" Value="Submit" class="btn btn-primary ">
                      </center>	
          </div>
          
      </form>
    </div>
    <div class="col-8">
    <table class="
     table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Course</th>
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
                <td>
                  <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="chk[]" value="<?php echo $row['student_id'];?>">
                  </div>
              </td>
              <!-- <td><?php echo $row['student_id'];?></td> -->
              <td><?php echo $row['first_name'];?></td>
              <td><?php echo $row['last_name'];?></td>
              <td><?php echo $row['course'];?></td>
              </tr>				

              <?php
              }
            
            ?>
            
            </tbody>
          </table>
    </div>
  </div>
        
<!-- template end -->

<!-- 
<form action="" method="POST" enctype="multipart/form-data">	
<center>
<h1>ANNOUNCEMENT</h1>
</center>	
<input type="text" name="STUDENTID" placeholder="ENTER " class="bar">
<input type="submit" name="submit" value="VIEW ALL DATA" class="search">	
<label class="min">CLASS</label>
<select class="form-control form-control-lg" name="COURSEOPTION">
<option value="">select</option>
<option value="6th">6th</option>
<option value="7th">7th</option>
<option value="8th">8th</option>
<option value="9th">9th</option>
<option value="10th">10th</option>
<option value="11th">11th</option>
<option value="12th">12th</option>
<option value="NEET">NEET</option>
<option value="JEE">JEE</option>
</select><br>
<label class="min">SECTION(optional)</label>
<select class="form-control form-control-lg" name="SECTION">
<option value="">selct</option>
<option value="A">A</option>
<option value="B">B</option>
</select><br>
<input type="submit" class="btn" name="submit" style="margin-left: 30px;">
<div class="row" style="margin-top: 30px;">
<div class="col" style="margin-top: 20px;background-color: #c5eff7;margin-left: 120px;margin-right: 100px;">
<h3 class="task">TASK PORTAL</h3>
<label for="exampleInputsubject" class="sub">SUBJECT</label>
 <input type="text" Class="form-control" id="exampleInputEmail1" name="SUBJECT">
<label for="exampleInputPassword1" class="sub">MESSAGE</label><br>
<textarea class="form-control1" id="exampleInputPassword1" name="MESSAGE" placeholder="enter your message.."></textarea><br><br>
 <input type="submit" style="margin-left: 200px;" name="send" class="btn">
</div>
<div class="col">
<table class="table table-striped table-hover">
<thead class="thead-dark">	
<tr>
<th>#</th>	
<th>STUDENTID</th>	
<th>NAME</th>
<th>COURSEOPTION</th>
</tr><br>
</thead>
</div>
</div>
	<?php
	if (isset($_POST['submit'])) {
		$COURSEOPTION=$_POST['COURSEOPTION'];
		$SECTION=$_POST['SECTION'];
		$query="SELECT STUDENTID,NAME,COURSEOPTION FROM front WHERE COURSEOPTION='$COURSEOPTION' OR SECTION='$SECTION'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)) {
			?>
			<form action="" method="POST">
			<tr>
		<td><div class="form-check">
  <input class="form-check-input" type="checkbox" name="chk[]" value="<?php echo $row['STUDENTID']?>">
 </div></td>
		<td><?php echo $row['STUDENTID'];?></td>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['COURSEOPTION'];?></td>
		</tr>
		</form>

		<?php
		}
	}
}
	?>
	</table>
</form> -->
</body>
</html>