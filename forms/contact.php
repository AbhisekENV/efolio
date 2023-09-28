<?php 
require('../include/db.php');
if(isset($_POST['send_message'])){
  date_default_timezone_set("Asia/Kolkata");
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $que = mysqli_real_escape_string($db,$_POST['query']);
  $datetime= date("H:i:s d-m-Y");
  echo $datetime;
  $message_format= $datetime.'<br> '."From-".$name.'.'.'<br>'.' '."Phone no-".$phone.'.'.'<br>'.' '."email-".$email.'.'.'<br>'.' '."Message-".$que.'.'.'<hr>';
  file_put_contents("message.txt",$message_format,FILE_APPEND | LOCK_EX);
  echo "<script>window.location.href='/MyResume/#contact';</script>";  
}else{
  echo "<script>window.location.href='404';</script>";           
}
?>