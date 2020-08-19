<html>
 <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
            integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>

        <title>Login</title>

        <style>
            .container {

                width: 500px;
                padding: 10px;

            }
        </style>

    </head>

    <body class='text-center'>
           
        <form  action='validate.php'  class='d-flex justify-content-center' method='POST'>
            
            <div class='container'>
                <img class='mb-4' src='unnamed.png' alt='' width='72' height='72'>
                <h1 class='h3 mb-3 font-weight-normal'>Please sign in</h1>
               

               <h5>Username</h5>
                <input type='text' id='inputEmail' name='username' class='form-control' placeholder='Username' required autofocus>
                       <br>
                 <h5>Password</h5>
                <label for='inputPassword' class='sr-only'>Password</label>
                <input type='password' id='inputPassword' name='password' class='form-control' placeholder='Password'>
                <br>

                <button class='btn btn-lg btn-primary btn-block' name='sub' type='submit'>Sign in</button>
                <p class='mt-5 mb-3 text-muted'>&copy; 2020-2021</p>

         <button type='submit' class='btn btn-light'> <a href='index.php'>Sign Up</a></button>

           </div>
        </form>
         
    </body>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
    integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n'
    crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
    integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo'
    crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
    integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6'
    crossorigin='anonymous'></script>
</body>

</html>