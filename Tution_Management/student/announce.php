<?php
include "home.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>student announcement</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
         <center><h1>Student Announcement</h1></center>
         </div>
     </div>
     <div class="container-body">
        <form action="" method="POST">
          
          <br>
          <!-- table start -->
          
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>STUDENTID</th>
                <th>SUBJECT</th>  
                <th>MESSAGE</th>  
              </tr>
            </thead>
            <tbody>
              <?php
      $con=mysqli_connect("localhost","root","","tuition");
      
        $query="SELECT * FROM announcement";
        $result=mysqli_query($con,$query);
        $counter=0;
        if (mysqli_num_rows($result)>0) {
        while ($row=mysqli_fetch_array($result)) {
          ?>
          <tr>
          <td><?php echo $row['chk'];?>
          <input type="hidden" name="chk" value="<?php echo $row['chk'];?>">  
          </td>
          <td><?php echo $row['SUBJECT'];?>
          <input type="hidden" name="SUBJECT" value="<?php echo $row['SUBJECT'];?>">  
          </td>
          <td><?php echo $row['MESSAGE'];?>
          <input type="hidden" name="MESSAGE" value="<?php echo $row['MESSAGE'];?>">
          </td> 
          </tr>
        <?php
         $counter++;
        }
        }
        else {
            
            echo "no record found";
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