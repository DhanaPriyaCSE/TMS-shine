<?php

include_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/event.css">

</head>
<body>
<center>
  <!--second page-->
<div class="container">
  <!-- <form method="POST" action=""> -->
    <nav class="navbar navbar-sm navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="even_reg.php">Register</a>
    </nav>

   <!--  <div class="container">
      <div class="card-header">
         <div class="title">
         <!- <center> -->
          <!-- <h1>
          <div class="form-group col-md-6">
             <label for="inputEmail4"><?php
                         $records = mysqli_query($con, "SELECT title From event"); 
                             
                                  while($data = mysqli_fetch_array($records))
                                  {
                                       echo "<option value='". $data['title'] ."'>" .$data['title'] ."</option>"; 
                                    }
                      ?> 
              </label>
           </div> 
         </h1>-->
         <!-- </center> -->
        <!--  </div>
      </div> -->
  <!-- <div class="row">
    <div class="col-sm">
      <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
          <div class="col-sm-10">
            
          </div>
      </div>
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
   -->
<center>
    <div class="container-head">
        
         <div class="title">
         <!-- <center> -->
          <h1>
          <div class="form-group col-md-6">
             <label for="inputEmail4"><?php
                         $records = mysqli_query($con, "SELECT title From event"); 
                             
                                  while($data = mysqli_fetch_array($records))
                                  {
                                       echo "<option value='". $data['title'] ."'>" .$data['title'] ."</option>"; 
                                    }
                      ?>  </label
           </div>
         </h1><!-- </center> -->
         </div>   
     </div>
  </center>

        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">CATEGORY :</label>
             
             <div class="event">
                <?php
                    $records = mysqli_query($con, "SELECT category From event"); 
                        while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['category'] ."'>" .$data['category'] ."</option>"; 
                          }
                ?>         
           </div>
           </div>

          <div class="form-group">
             <label for="inputEmail4">ORGANIZER :</label>
            <div class="event">
                <?php
                   $records = mysqli_query($con, "SELECT organizer From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['organizer'] ."'>" .$data['organizer'] ."</option>"; 
                          }
                ?>
              </div>
            </div>
          </div>

          <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">START DATE :</label>
             
             <div class="event">
                <?php
                    $records = mysqli_query($con, "SELECT sdate From event"); 
                        while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['sdate'] ."'>" .$data['sdate'] ."</option>"; 
                          }
                ?>         
           </div>
           </div>

          <div class="form-group">
             <label for="inputEmail4">END DATE :</label>
            <div class="event">
                <?php
                   $records = mysqli_query($con, "SELECT edate From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['edate'] ."'>" .$data['edate'] ."</option>"; 
                          }
                ?>
              </div>
            </div>
          </div>

          <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">STATE :</label>
             
             <div class="event">
                <?php
                    $records = mysqli_query($con, "SELECT state From event"); 
                        while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['state'] ."'>" .$data['state'] ."</option>"; 
                          }
                ?>         
           </div>
           </div>

          <div class="form-group">
             <label for="inputEmail4">CITY :</label>
            <div class="event">
                <?php
                   $records = mysqli_query($con, "SELECT city From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['city'] ."'>" .$data['city'] ."</option>"; 
                          }
                ?>
              </div>
            </div>
          </div>

          
        <form>
          
     </div></br></br></br>


<?php
include "one.php";
?>

</body>
</html>