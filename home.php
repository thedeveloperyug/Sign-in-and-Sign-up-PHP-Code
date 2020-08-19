<?php

session_start();


?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css'>

<title>Title</title>
</head>
<body>

    <h2 class='text-center'> Hello <?php if($_SESSION) { echo $_SESSION['name'];} else { echo 'You have been logged out';} ?> !</h2>
<?php if($_SESSION) {
     echo  "<h2 class='text-center'> <a href='logout.php'>Logout</a></h2>";
}
   else { 
       echo  "<h2 class='text-center'> <a href='login.php'>Login</a></h2>";
   }
    ?> 

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>