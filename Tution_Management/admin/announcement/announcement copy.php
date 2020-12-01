<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admission.css">
   <link rel="stylesheet" href="../css/fees.css">
   <link rel="stylesheet" href="../css/student.css">
   <link rel="stylesheet" href="../css/announcement.css">

    <title>Announcement!</title>
	
  </head>
  
  <body>
  <div class="container">
     <div class="container-head">
         <div class="title">
         <center><h1>Announcement</h1></center>
         </div>
     </div>
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
     
          

          <form method="POST" action="">
              <div class="row">
                 <div class="col-4 task">

                    <div class="title-task">
                      <center><h1>Task Portal</h1></center>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label" >Subject</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="subject">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label" >Message</label>
                      <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="comment" >
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group  col-md-2">
                        <center>
                          <input  type="submit"  name="anno" Value="Submit" class="btn btn-primary ">
                        </center>	
                    </div>
              
               </div>
              <div class="col-8">
                  <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">S.No</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Course</th>
                          </tr>
                        </thead>

                      <tbody>
                         <?php
                            $con=mysqli_connect("localhost","root","","tution_management");
                          
                            if (isset($_POST))
                             {

                              if (isset($_POST['search']))
                               {
                                    $STUDENTID=$_POST['STUDENTID'];
                                  $COURSEOPTION=$_POST['COURSEOPTION'];
                                  $query="SELECT * FROM students WHERE student_id='$STUDENTID' or course='$COURSEOPTION' ";
                                  
                                  // else{
                                  //   $query="SELECT * FROM students "; 
                                  //       }
                                  
                                  $query_run=mysqli_query($con,$query) or die(mysqli_error($con));
                                  $sr=1;
                                  while ($row=mysqli_fetch_array($query_run))
                                  {
                                      ?>
                                      <tr>
                                      <td>
                                        <div class="form-check">
                                        <form action="" method="post">
                                                      <!-- <input class="form-check-input" type="checkbox" name="chk[]" value="<?php echo $row['student_id'];?>"> -->
                                                      <input class="form-check-input" type="checkbox" name="annonce[]" value="<?php echo $show['student_id'];?>" id="defaultCheck1">

                                                  </div>
                                              </td>
                                              <td><?php echo $sr;?></td> 
                                              <td><?php echo $row['first_name'];?></td>
                                              <td><?php echo $row['last_name'];?></td>
                                              <td><?php echo $row['course'];?></td>
                                              </tr>				

                                              <?php
                                              $sr++;
                                          }
                                      }
                                          
                                    if(isset($_POST["anno"]))
                                    {
                              
                                      $subject = mysqli_real_escape_string($con, $_POST["subject"]);
                                      $comment = mysqli_real_escape_string($con, $_POST["comment"]);
                                      //$anno=$_POST['annonce'];
                                      $numberOfCheckbox=count($_POST['annonce']);
                                      echo $numberOfCheckbox;
                                      $i=0;
                                        while($i<$numberOfCheckbox)
                                        {
                                            $selectedcheck=$_POST['annonce'][$i];
                                            $query = "INSERT INTO announcement(student_id,subject, message)VALUES ('$selectedcheck','$subject', '$comment')";
                                          mysqli_query($con, $query);

                                          $i++;
                                        }
                                    }
                                }
                                ?>
                                  
                           </form>
                      </tbody>
                   </table>
              </div>
          </form>
    </form>

   </div>
  </div>

</body>
</html> 
<!-- 
<script>
$(document).ready(function(){
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"announcement/insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
});
</script> -->
