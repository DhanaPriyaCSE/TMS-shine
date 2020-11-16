<?php
include "../registration/headers.php";
include "/registration/connection.php";
?>

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
          <a href="index.html" class="tip-bottom"><i class="icon-home"></i>
            Fees Details
          </a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
      <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="widget-box">
          <div class="widget-title"> 
             <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>fees Details</h5>
          </div>
          <div class="widget-content nopadding">
          <form action="" name="form1" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Fees Type :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name"  name="firstname"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Amount :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" name="lastname" />
              </div>
            </div>
        
            
            <div class="alert alert-danger" id="error" style="display:none">
          This User Already Exist! Try Another.
          </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success" >Save</button>
            </div>
            
            <div class="alert alert-success" id="success" style="display:none">
            Record Inserted Successfully!!.
            </div>
            

          </form>
        </div>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Fees Type</th>
                  <th>Amount</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>


              <?php
                $res =mysqli_query($link,"select * from user_registration");
                while($row=mysqli_fetch_array($res)){
                  ?>
                  <tr >
                  <td><?php echo $row['firstname']; ?></td>
                  <td><?php echo $row['lastname']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['role']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td> <a href="edit_user.php?id=<?php echo $row['id']; ?>" style="color:green" class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> </td>
                  <td> <a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
                </tr>
 
               <?php
                }
            ?>
                
              </tbody>
            </table>
          </div>
      
    </div>
  </div>
</div>

<?php

if(isset($_POST['submit1'])){
  $count=0;
  $res = mysqli_query($link,"select * from user_registration where username='$_POST[username]'");
  $count=mysqli_num_rows($res);
  if($count > 0){
    ?>
    <script type="text/javascript">
        document.getElementById('success').style.display="none";
        document.getElementById('error').style.display="block";

  </script>
    <?php
  }
  else{
    // $firstname=mysqli_real_escape_string($link,$_POST['fistname']);
    // $lastname=mysqli_real_escape_string($link,$_POST['lastname']);
    // $username=mysqli_real_escape_string($link,$_POST['username']);
    // $password=mysqli_real_escape_string($link,$_POST['password']);
    // $role=mysqli_real_escape_string($link,$_POST['role']);
  
    mysqli_query($link,"insert into user_registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[role]','active')");
     
    //$query=mysqli_query($link,"insert into user_registration ('firstname','lastname','username','password','role','status') values ('$firstname','$lastname','$username','$password','$role','active')");
     
   // $query=mysqli_query($link,"INSERT INTO user_registration ( 'firstname', 'lastname', 'username', 'password', 'role', 'status') VALUES ('$firstname','$lastname','$username','$password','$role','active')");
    echo $query;
    
    ?>
     <script type="text/javascript">
        document.getElementById('error').style.display="none";
        document.getElementById('success').style.display="block";
        setTimeout(function(){
          window.location.href=window.location.href;
        },3000);
    </script> 

    <?php
 
  }
}

?>
<!--end-main-container-part-->

<?php
include "footer.php";                    
?>