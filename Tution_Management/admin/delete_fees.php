<?php
 include "../db/connection.php";
 $id=$_GET['id'];
 mysqli_query($link,"delete from fees_type where id=$id");

?>
<script type="text/javascript">
  window.location="add_fees_type.php"

</script>