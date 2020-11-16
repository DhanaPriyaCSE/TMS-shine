<?php
include "../db/connection.php";
if(isset($_POST['register'])){
$username=mysqli_real_escape_string($link,$_POST['username']);
$email=mysqli_real_escape_string($link,$_POST['email']);
$password=mysqli_real_escape_string($link,$_POST['password']);
$repassword=mysqli_real_escape_string($link,$_POST['repassword']);
$role=mysqli_real_escape_string($link,$_POST['role']);
// echo "it works";
// echo $username;
// echo $email;
// echo $password;
// echo $role;

  $check_exist_user=mysqli_query($link,"select * from registration where username='$username'") ;
  if($res=mysqli_num_rows($check_exist_user) > 0){
    echo "alredy exist";
    ?>
    
    <script type="text/javascript">
        document.getElementById('username').style.display="block";
  </script>
    <?php
  }
  else{
    $check_exist_email=mysqli_query($link,"select * from registration where email='$email'");
    if($res=mysqli_num_rows($check_exist_email) > 0){
      ?>
      <script type="text/javascript">
          document.getElementById('email').style.display="block";
    </script>
      <?php
    }
    else{
      $check_valid=mysqli_query($link,"select * from registration where email='$email' && password='$password' ");
      if($res=mysqli_num_rows($check_valid) > 0){
        ?>
        <script type="text/javascript">
            document.getElementById('username_password').style.display="block";
      </script>
        <?php
      }
      else{

        if($password!=$repassword){
          ?>

          <script type="text/javascript">
              document.getElementById('password').style.display="block";
        </script>
          <?php
        }
        else{
            $res=mysqli_query($link,"insert into registration(username,email,password,role) values('$username','$email','$password','$role')") or die(mysqli_error($link));
         
          ?>

          <script type="text/javascript">
              document.getElementById('success').style.display="block";
        </script>
          <?php
          
          header("Location:dasboard.php");

        }
      }
    }

  }
  
} 
?>