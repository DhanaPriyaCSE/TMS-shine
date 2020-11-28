<?php
include "admin_dashboard.php";
$con=mysqli_connect("localhost","root","","tution_management");
$student_id=$_GET['student_id'];
echo $student_id;
$first_name="";
$last_name="";
$ph_no="";
$email="";
$school="";
$dob="";
$fa_name=""; 
$ma_name="";
$gender="";
$address="";          
$parent_no="";
$course="";
$res= mysqli_query($con,"select * from students where student_id='$student_id'");
while($row=mysqli_fetch_array($res))
{
  $first_name=$row["first_name"];
$last_name=$row["last_name"];
$ph_no=$row["ph_no"];
$email=$row["email"];
$school=$row["school"];
$dob=$row["dob"];
$fa_name=$row["father_name"]; 
$ma_name=$row["mather_name"];
$gender=$row["gender"];
$address=$row["address"];
$parent_no=$row["parent_no"];
$course=$row["course"];
}

$fees_type="";
$amount="";
$status="";
$date="";
$fees=mysqli_query($con,"select * from student_fees_details where student_id='$student_id'");
while($row=mysqli_fetch_array($fees))
{
$fees_type=$row["fees_type"];
$amount=$row["amount"];
$status=$row["status"];
$date=$row["date"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>shine-admission</title>
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
            
          <form action=" " method="POST">
          <div class="title">Student details</div>
          <div class="form-row top">
            <div class="form-group col-md-6">
              <label for="inputEmail4">First Name</label>
              <input type="text" class="form-control" id="inputEmail4" name='f_name' placeholder="First Name" value="<?php echo $first_name; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Last Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="l_name" placeholder="Last Name" value="<?php echo $last_name; ?>">
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Phone No.</label>
              <input type="text" class="form-control" id="inputEmail4" name="ph_no" placeholder="Phone No." value="<?php echo $ph_no; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Email</label>
              <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">DOB</label>
              <input type="date" class="form-control" name='DOB' id="inputEmail4" placeholder="DOB" value="<?php echo $dob; ?>">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                   <div class="col-sm">
                         <label class="radio-inline ">
                           <input type="radio" name="gender" value="Male" <?php if ($gender=='Male'){ echo "checked";} ?> >&nbsp;Male
                         </label>
                         <label class="radio-inline ">
                           <input type="radio" name="gender" value="Female" <?php if ($gender=='Female'){ echo "checked";} ?> >&nbsp;Female
                         </label>
                   </div>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Standard</label>
              <div>
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
            <div class="form-group col-md-6">
              <label for="inputPassword4">School Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="school_name" placeholder="School Name" value="<?php echo $school; ?>">
            </div>
         </div>
         <br>
         <div class="title">Personal details</div>
            <div class="form-row top">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Father's Name</label>
                <input type="text" class="form-control" id="inputEmail4" name="fa_name" placeholder="Father's Name" value="<?php echo $fa_name; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Mather's Name</label>
                <input type="text" class="form-control" id="inputPassword4" name="ma_name" placeholder="Mather's Name" value="<?php echo $ma_name; ?>">
              </div>
          </div>
    
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword4">Parents No.</label>
                <input type="text" class="form-control" id="inputPassword4" name="parent_no" placeholder="Parents No." value="<?php echo $ph_no; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Address</label>
                <textarea class="form-control left" rows="5" id="comment" placeholder="enter your address" name="address" >
                <?php echo $address; ?>
                </textarea>
              </div>
          </div>
          <div class="title">Fees details</div>
            <div class="form-row top">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Fees Type</label>
                        <select class="form-control" name="fees_type">
                          <option disabled>select</option>
                          <option <?php if ($fees_type=='Annual'){ echo "selected";} ?> >Annual</option>
                          <option <?php if ($fees_type=='Term'){ echo "selected";} ?>>Term</option>
                          <option <?php if ($fees_type=='Monthly'){ echo "selected";} ?>>Monthly</option>
                        </select>              
                </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Amount</label>
                <input type="text" class="form-control"  id="inputPassword4" name="amount" placeholder="payment amount" value="<?php echo $amount; ?>">
              </div>
          </div>
    
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword4">Fees status</label>
                <div class="col-sm">
                         <label class="radio-inline ">
                           <input type="radio" name="status" value="paid" <?php if ($status=='paid'){ echo "checked";} ?> >&nbsp;Paid
                         </label>
                         <label class="radio-inline ">
                           <input type="radio" name="status" value="pending" <?php if ($status=='pending'){ echo "checked";} ?> >&nbsp;Pending
                         </label>
                         <label class="radio-inline ">
                           <input type="radio" name="status" value="notpaid" <?php if ($status=='notpaid'){ echo "checked";} ?> >&nbsp;Not paid
                         </label>
                   </div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Date</label>
                  <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">&nbsp;

              </div>
          </div>
        
             <div class="form-group row">
                 <center class="col-sm-12">
                   <input  type="submit"  name="submit1" class="btn btn-primary">
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
mysqli_query($con,"update students set first_name='$_POST[f_name]', last_name='$_POST[l_name]',ph_no='$_POST[ph_no]',email='$_POST[email]',
school='$_POST[school_name]', dob='$_POST[DOB]',gender='$_POST[gender]',father_name='$_POST[fa_name]',mather_name='$_POST[ma_name]',
parent_no='$_POST[parent_no]',address='$_POST[address]'  where student_id='$student_id'")  or die(mysqli_error($con));

$result=mysqli_query($con,"select * from student_fees_details where student_id='$student_id'");
if(mysqli_num_rows($result)==1){
$result_update=mysqli_query($con,"update student_fees_details set fees_type='$_POST[fees_type]',
 amount='$_POST[amount]',status='$_POST[status]',date='$_POST[date]'
 where student_id='$student_id'")  or die(mysqli_error($con));
}else{
  mysqli_query($con,"INSERT INTO student_fees_details
   (student_id,fees_type,amount,status,date)
    values('$student_id','$_POST[fees_type]','$_POST[amount]','$_POST[status]','$_POST[date]')") or die(mysqli_error($con));
}
?>

<script type="text/javascript">
        document.getElementById('success').style.display="block";
        setTimeout(function(){
          window.location="view_student.php";
        },3000);
    </script>  

    <?php
}
?>
</body>
</html>
<!--end-main-container-part-->
