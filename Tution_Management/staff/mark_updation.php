<?php
include "nav.php";
// $con=mysqli_connect("localhost","root","","tuition");
$flag=0;
if (isset($_POST['submit'])) {
		foreach ($_POST['totalmark'] as $id => $totalmark) {
		$STUDENTID=$_POST["STUDENTID"][$id];
		$NAME=$_POST["NAME"][$id];
		$COURSEOPTION=$_POST["COURSEOPTION"][$id];
		$date=date("yy-m-d H:i:s");
		$earnmark=$_POST['earnmark'][$id];
		$totalmark=$_POST['totalmark'][$id];
		$SUBJECTS=$_POST['SUBJECTS'];
			$result=mysqli_query($con,"INSERT INTO mark_records(STUDENTID,NAME,COURSEOPTION,EARNMARK,TOTALMARK,date,SUBJECTS)VALUES('$STUDENTID','$NAME','$COURSEOPTION','$earnmark','$totalmark','$date','$SUBJECTS')");
		if ($result) {
			$flag=1;
		}
	}
	
}
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

<!-- <style type="text/css">
	table {
  border-bottom: 1px solid black;
  border-collapse: collapse;
}
</style> -->
</head>
<body>

<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Mark Updation</h1></center>
         </div>
     </div>
     <br>

     <div class="container-body">
    <form>
       
  <div class="row">
    <div class="col-sm-2 back">
            <div class="form-group row">
               <center class="col-sm-12">
                 <input  type="submit" name="back" value="Back" class="btn btn-primary btn1">
               </center>	
           </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group row " >
                      <!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label> -->
                 <div class="col-sm-10">
                     <select class="form-control" name="CLASS">
                       <option >--Select by Class--</option>
                       <option value="6TH">6th</option>
                        <option value="7TH">7th</option>
                        <option value="8TH">8th</option>
                        <option value="9TH">9th</option>
                        <option value="10TH">10th</option>
                        <option value="11TH">11TH STD</option>
                        <option value="12TH">12TH STD</option>
                        <option value="NEET">NEET</option>
                        <option value="JEE">JEE</option>
                     </select>
                 </div>
           </div>
    </div>
    <div class="col-sm-2">
         <div class="form-group row">
               <center class="col-sm-12">
               <input type="submit" name="filter_value" class="btn btn-primary" value="filter">
               </center>	
           </div>
    </div>
  </div>

           
           <div class="form-group  row" >
               <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>
                 <div class="col-sm-10">
                     <select class="form-control" name="SUBJECT">
                        <option >--Select Subject to upload Mark--</option>
                        <option value="TAMIL">TAMIL</option>
                        <option value="ENGLISH">ENGLISH</option>
                        <option value="MATHS">MATHS</option>
                        <option value="SCIENCE">SCIENCE</option>
                        <option value="SOCIAL">SOCIAL</option>
                        <option value="COMPUTERSCIENCE">COMPUTERSCIENCE</option>
                        <option value="BIO-PHYSICS">BIO-PHYSICS</option>
                        <option value="BIO-CHEMISTRY">BIO-CHEMISTRY</option>
                        <option value="BIO-ZOOLOGY">BIO-ZOOLOGY</option>
                        <option value="BIO-BOTANY">BIO-BOTONAY</option>
                        <option value="HISTORY">HISTORY</option>
                        <option value="ECONOMICS">ECONOMICS</option>
                        <option value="BUSINESS MATHS">BUSINESS MATHS</option>
                        <option value="COMMERCE">COMMERCE</option>
                     </select>
                 </div>
           </div>

           <table class="table table-striped table-bordered" id="table_field" style="border-bottom: 1px solid black;">
		<h3><div class="text-center">Date:<?php echo date("yy-m-d");?></div></h3>
		<thead class="thead-dark">
			<tr>
			<th>ID</th>
			<th>NAME</th>	
			<th>COURSEOPTION</th>	
			<th>MARK ACHIEVED</th>
			<th> TOTAL MARK</th>
			
			
			</tr>

		</thead>

		<tbody>
			<?php
			if (isset($_POST['filter_value'])) {
				$COURSEOPTION=$_POST['COURSEOPTION'];
        $query="SELECT * FROM front WHERE COURSEOPTION='$COURSEOPTION'";
      // }else{
      //   $query="SELECT * FROM front";
      // }
				$result=mysqli_query($con,$query);
				$counter=0;
				if (mysqli_num_rows($result)>0) {
				while ($row=mysqli_fetch_array($result)) {
					?>
					<tr>
					<td><?php echo $row['STUDENTID'];?>
					<input type="hidden" name="STUDENTID[]" value="<?php echo $row['STUDENTID'];?>">	
					</td>
					<td style="color: blue;"><?php echo $row['NAME'];?>
					<input type="hidden" name="NAME[]" value="<?php echo $row['NAME'];?>">	
					</td>
					<td style="color: green;"><?php echo $row['COURSEOPTION'];?>
					<input type="hidden" name="COURSEOPTION[]" value="<?php echo $row['COURSEOPTION'];?>">
					</td>	
					<td><input required type="text" name="earnmark[<?php echo $counter; ?>]" class="form-control"></td>
					<td><input required type="text" name="totalmark[<?php echo $counter; ?>]" class="form-control"></td>
					</tr>
				<?php
				 $counter++;
				}
        }
      }
				// else {
						
				// 		echo "no record found";
				// 	}	
				

			?>

		
</table>
<input type="submit" value="SAVE RESULTS" name="submit" class="btn btn-warning">
           <br>
        <form>
     </div>
     <div class="container-footer">
     </div>
   </div>

<!-- 
<div class="panel panel-default container">
<div class="panel-heading">
	<h1 style="text-align: center;">MARK UPDATION</h1>
</div>	
<div class="panel-body">
	
	<a href="staffhome.php" class="btn btn-primary">BACK</a><br><br>
	<?php if($flag) { ?>
	<div class="alert alert-success">	
	mark inserted successfully	
	</div>
<?php }?>
	<form action="" method="POST" id="add_name" class="add_name">
	<select class="form-control form-control-lg" name="COURSEOPTION" style="width: 130px;margin-left: 900px;margin-top: -60px;">
<option value="">select</option>
<option value="6TH STD">6TH STD</option>
<option value="7TH STD">7TH STD</option>
<option value="8TH STD">8TH STD</option>
<option value="9TH STD">9TH STD</option>
<option value="10TH STD">10TH STD</option>
<option value="11TH STD">11TH STD</option>
<option value="12TH STD">12TH STD</option>
<option value="NEET">NEET</option>
<option value="JEE">JEE</option>
</select>
	<input type="submit" name="filter_value" class="btn btn-primary" value="filter" style="margin-left: 1032px;margin-top: -80px;padding: 9px;width: 75px;height: 45px;">
	<select class="form-control form-control-lg" name="SUBJECTS">
<option value="">select</option>
<option value="TAMIL">TAMIL</option>
<option value="ENGLISH">ENGLISH</option>
<option value="MATHS">MATHS</option>
<option value="SCIENCE">SCIENCE</option>
<option value="SOCIAL">SOCIAL</option>
<option value="COMPUTERSCIENCE">COMPUTERSCIENCE</option>
<option value="BIO-PHYSICS">BIO-PHYSICS</option>
<option value="BIO-CHEMISTRY">BIO-CHEMISTRY</option>
<option value="BIO-ZOOLOGY">BIO-ZOOLOGY</option>
<option value="BIO-BOTANY">BIO-BOTONAY</option>
<option value="HISTORY">HISTORY</option>
<option value="ECONOMICS">ECONOMICS</option>
<option value="BUSINESS MATHS">BUSINESS MATHS</option>
<option value="COMMERCE">COMMERCE</option>
</select><br>	
	<table class="table table-striped table-bordered" id="table_field" style="border-bottom: 1px solid black;">
		<h3><div class="text-center">Date:<?php echo date("yy-m-d");?></div></h3>
		<thead class="thead-dark">
			<tr>
			<th>ID</th>
			<th>NAME</th>	
			<th>COURSEOPTION</th>	
			<th>MARK ACHIEVED</th>
			<th> TOTAL MARK</th>
			
			
			</tr>

		</thead>

		<tbody>
			<?php
			if (isset($_POST['filter_value'])) {
				$COURSEOPTION=$_POST['COURSEOPTION'];
				$query="SELECT * FROM front WHERE COURSEOPTION='$COURSEOPTION'";
				$result=mysqli_query($con,$query);
				$counter=0;
				if (mysqli_num_rows($result)>0) {
				while ($row=mysqli_fetch_array($result)) {
					?>
					<tr>
					<td><?php echo $row['STUDENTID'];?>
					<input type="hidden" name="STUDENTID[]" value="<?php echo $row['STUDENTID'];?>">	
					</td>
					<td style="color: blue;"><?php echo $row['NAME'];?>
					<input type="hidden" name="NAME[]" value="<?php echo $row['NAME'];?>">	
					</td>
					<td style="color: green;"><?php echo $row['COURSEOPTION'];?>
					<input type="hidden" name="COURSEOPTION[]" value="<?php echo $row['COURSEOPTION'];?>">
					</td>	
					<td><input required type="text" name="earnmark[<?php echo $counter; ?>]" class="form-control"></td>
					<td><input required type="text" name="totalmark[<?php echo $counter; ?>]" class="form-control"></td>
					</tr>
				<?php
				 $counter++;
				}
				}
				else {
						
						echo "no record found";
					}	
				}

			?>

		
</table>
<input type="submit" value="SAVE RESULTS" name="submit" class="btn btn-warning">
</form>
</div>
<div class="panel-footer"></div>	
</div>
</div>  -->
</body>
</html>