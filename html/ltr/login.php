<?php
session_start();
$con=mysqli_connect('localhost','root','','abhyuday');
if(isset($_POST['confirm']))
{
   header('location:homepage_user.php');
  /*echo "2";
  $email=  $_POST['email'];
	$password= $_POST['password'];
  $_SESSION['email']= $email;
  echo $email;
  $query=$con->prepare("SELECT * FROM `abhyuday` WHERE `email` = ?");
  $query->bind_param("s",$email);
  $query->execute();
  $run= $query->get_result();
  $row=$run->num_rows;
	if($row==1){
    $res=$run->fetch_assoc();
    if($res['password']==$password){
	     header('location:mycourses.php');
     }
     else{
      echo '<script>alert("you entered Wrong password")</script>';
     }
  }
  else {
    echo '<script>alert("you have not yet Registered")</script>';
  }*/
}
?>
