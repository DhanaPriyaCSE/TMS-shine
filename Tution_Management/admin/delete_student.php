<?php
 include "../db/connection.php";
 $student_id=$_GET['student_id'];
 mysqli_query($link,"delete from students where student_id=$student_id");

?>
<script type="text/javascript">
  window.location="view_student.php"

</script>