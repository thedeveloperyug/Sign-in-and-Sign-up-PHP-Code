<?php

$con = mysqli_connect('localhost','root','','userlogin','3308');
if($con){
    echo "connection seccessful ";
}
else{
    echo "faild to connect.";
}


$name= $_POST['username'];
$pass=$_POST['password'];

 $qy = "INSERT INTO signin VALUES (null,'$name','$pass')";

$result = mysqli_query ($con,$qy);

if($result){
    session_start();
   header('location:login.php');
  echo  " data inserted";
}
else{
 
 echo  " data not inserted";

}

?>