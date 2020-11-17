<?php
include "admin_dashboard.php";
$con=mysqli_connect("localhost","root","","tution_management");
$id=$_GET['id'];
echo $id;
$fees_type="";
$amount="";
$course="";
$subject="";
$res= mysqli_query($con,"select * from fees_type where id='$id'");
while($row=mysqli_fetch_array($res))
{
  $fees_type=$row["fees_type"];
$amount=$row["amount"];
$subject=$row["subject"];
$course=$row["course"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>shine-fees</title>
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
           <center><h1>Edit Student</h1></center>
           </div>
       </div>
     
       <div class="container-body">
       <div class="alert alert-error" id="error" style="display:none">
            Record Updated Successfully!!.
            </div>

            
            <div class="alert alert-success" id="success" style="display:none">
            Record Updated Successfully!
            </div>
            
      <form method="POST" action="">
         <div class="form-group row" >
                <label for="inputPassword3" class="col-sm-2 col-form-label">Fees Type</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword4" name="fees_type" placeholder="Fees Type" value="<?php echo $fees_type; ?>">
                </div>
            </div>
            <div class="form-group row ">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                  <input type="text" name="amount" class="form-control" placeholder="Amount" id="inputPassword3" value="<?php echo $amount; ?>">
                </div>
            </div>
            
            <div class="form-group row">
             <label for="inputEmail4" class="col-sm-2 col-form-label">Standard</label>
             <div class="col-sm-10">
             <select class="form-control" name="course">
                         <option disabled>select</option>
                         <option <?php if ($course=='6th'){ echo "selected";} ?> >6th</option>
                         <option <?php if ($course=='7th'){ echo "selected";} ?>>7th</option>
                         <option <?php if ($course=='8th'){ echo "selected";} ?>>8th</option>
                         <option <?php if ($course=='9th'){ echo "selected";} ?>>9th</option>
                         <option <?php if ($course=='10th'){ echo "selected";} ?>>10th</option>
                         <option <?php if ($course=='11th'){ echo "selected";} ?>>11th</option>
                         <option <?php if ($course=='12th'){ echo "selected";} ?>>12th</option>
                       </select>
                  </div>
           </div>
           <div class="form-group row ">
             <label for="inputPassword4" class="col-sm-2 col-form-label">Subject</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword4" name="subject" placeholder="Subject" value="<?php echo $subject; ?>">
              </div>
           </div>
            <div class="form-group row">
                <center class="col-sm-12">
                  <input  type="submit" name="submit1" class="btn btn-primary">
                </center>	
            </div>
         <form>

       </div>
       <div class="container-footer">
       </div>
     </div>

          

          </form>
        </div>
        </div>
      
        </div>

    </div>
</div>

<?php
if(isset($_POST["submit1"])){
mysqli_query($con,"update fees_type set fees_type='$_POST[fees_type]', amount='$_POST[amount]',
course='$_POST[course]',subject='$_POST[subject]'
 where id='$id'")  or die(mysqli_error($con));

?>

<script type="text/javascript">
        document.getElementById('success').style.display="block";
        setTimeout(function(){
          window.location="add_fees_type.php";
        },2000);
    </script>  

    <?php
}
?>
</body>
</html>
<!--end-main-container-part-->
