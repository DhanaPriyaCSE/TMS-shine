<?php


$servername = "localhost";
$database = "offums";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
else{
  echo "connected sucessfully";
}

if(isset($_POST["anno"]))
{

$subject = mysqli_real_escape_string($conn, $_POST["subject"]);
$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
$query = "INSERT INTO comment(comment_subject, comment_text)VALUES ('$subject', '$comment')";
if(mysqli_query($conn, $query)){
  echo " sucessfull ";
}
}

?>
