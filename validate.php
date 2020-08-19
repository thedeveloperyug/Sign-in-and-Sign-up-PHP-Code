<?php
  session_start();
$con = mysqli_connect('localhost','root','','userlogin','3308');
if($con){

    echo "connection successful";
}
else{
    echo "faild to connect.";
}
mysqli_select_db($con,`userlogin`);

if(isset($_POST['sub'])){
$name=$_POST['username'];
$pass=$_POST['password'];
}


 $sql = "SELECT * FROM `signin` WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($con,$sql);



if ($num = mysqli_num_rows($result) === 1) {
    // session_start();
  header('location:home.php');
  $_SESSION['name'] = $name;
  }
else{

header('location:login.php');


}

?>