<?php

include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/event.css">
</head>
<body>
<center>
<div class="container">
  <h2>Event Details</h2>
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2">Description:</label>
      <div class="col-sm-10">
        <div>
        <?php
                   $records = mysqli_query($con, "SELECT detail From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['detail'] ."'>" .$data['detail'] ."</option>"; 
                          }
                ?>
              </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Events:</label>
      <div class="col-sm-10">          
        <?php
                   $records = mysqli_query($con, "SELECT events From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['events'] ."'>" .$data['events'] ."</option>"; 
                          }
                ?>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Department:</label>
      <div class="col-sm-10">          
        <?php
                   $records = mysqli_query($con, "SELECT dept From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['dept'] ."'>" .$data['dept'] ."</option>"; 
                          }
                ?>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Event Theme:</label>
      <div class="col-sm-10">          
        <?php
                   $records = mysqli_query($con, "SELECT theme From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['theme'] ."'>" .$data['theme'] ."</option>"; 
                          }
                ?>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact Details:</label>
      <div class="col-sm-10">          
        <?php
                   $records = mysqli_query($con, "SELECT contact From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['contact'] ."'>" .$data['contact'] ."</option>"; 
                          }
                ?>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Last Day Of Resitration:</label>
      <div class="col-sm-10">          
        <?php
                   $records = mysqli_query($con, "SELECT ldate From event"); 
                       while($data = mysqli_fetch_array($records))
                          {
                            echo "<option value='". $data['ldate'] ."'>" .$data['ldate'] ."</option>"; 
                          }
                ?>
      </div>
    </div>
    
    
  </form>
</div>
</center>
</body>
</html>
