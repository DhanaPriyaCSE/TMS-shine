<?php
include "home.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>serach student details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/admission.css">
<link rel="stylesheet" href="css/fees.css">
<link rel="stylesheet" href="css/student.css">
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
                      <input type="date" class="form-control" id="start_date" 
                      name="start_date" placeholder="start_date">
                    </div>
                    <div class="form-group col-md-3">
                      <input type="date" class="form-control" id="end_date" name="end_date" placeholder="end_date">
                    </div>
                    <div class="form-group  col-md-2">
                          <center>
                            <input  type="submit" id="search"  name="search" Value="search" class="btn btn-primary ">
                          </center> 
                    </div>
                </div>
            

          <table class="table table-bordered ">
            <thead>
              <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Start time</th>
                <th >End time</th>
                <th style="padding-left: 100px">Date</th>
              </tr>
            </thead>
          <tbody>
            <?php
  $con=mysqli_connect("localhost","root","","tuition");
    
    
    if (isset($_POST['search'])) {
      $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $query="SELECT * FROM timetable WHERE order_date between '$start_date' 
    and '$end_date' ";
    }
    else{
      $query="SELECT * FROM timetable "; 
           }
    
    $query_run=mysqli_query($con,$query) or die(mysqli_error($con));
    while ($row=mysqli_fetch_array($query_run)) {
      ?>
      <tr>
     
    <td ><?php echo $row['order_id'];?></td>
    <td><?php echo $row['order_student_name'];?></td>
    <td><?php echo $row['order_stime'];?></td>
    <td><?php echo $row['order_etime'];?></td>
    <td><?php echo $row['order_date'];?></td>
    </tr>       

    <?php
    }
  
  ?>
            
            </tbody>
              <form>
         </div>
    </div>
</body>

</html>