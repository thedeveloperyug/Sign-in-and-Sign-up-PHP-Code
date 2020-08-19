<!doctype html>
<html lang='en'>

    <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
            integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>

        <link rel='stylesheet' href='style.css'>

       
        <title>Sign up</title>
    </head>
    <body>
        <form action='reg.php' method='POST' class='container flex justify-content-center'>
            <div class='container responsive'>
                
                    <div class='row'>
                        <div class='col-md-12 d-flex justify-content-center'>
                            <h1 id='nme'>Mr.Geek</h1>
                        </div>
                    </div>
                        <div class="container">
                    <div class='row'>
                        <div class='col-md-12'>
                            <label for='firstName'>Username</label>
                            <input type='text' required class='form-control' name='username' placeholder='username'>

                        </div>
                    </div>
                   
                            <br>
                    <div class='form-group'>
                        <label for='exampleInputPassword1'>Password</label>
                        <input type='password' required class='form-control' name='password' id='exampleInputPassword1'
                            placeholder='Password'>
                    </div>
                    
                    <br>
                    <button type='submit' class='btn btn-dark'>Sign Up</button>&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type='submit' class='btn btn-light'> <a href='login.php'> Log in</a></button>
              </div>
            </div>
        </form>





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