<?php 
include 'config.php';

?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ragister.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- google-fonts -->
    <title>Ragistration-Forms</title>
</head>

<body>

    <div class="container bg-success p-5">
        <div class="row">
            <div class="col-lg-12">

                <form action="admin-login.php" method="POST">
                    <div>
                        <h2 class="text-center text-white  mb-5" style=" border-bottom:1px solid white ">User-Admin
                            Login

                            <h5 class="text-center mb-5" id="em">User must be Login here!
                                If You Already Ragistered ?</h5>
                        </h2>
                    </div>

                    <?php
                  
                  if(isset($_SESSION['status'])){
                    echo "<p style='color:red'>" .$_SESSION['status']. "</p>";
                    echo 'Please Login Again';
                }

                   ?>
                   
                    <div class="mb-3 mt-3"> <label for="email" class="form-label username  text-white"
                            aria-autocomplete="off">Username or Email</label>
                        <input type="text" class="form-control" id="email" name="username" autocomplete='off'>

                    </div>


                    <div class="mb-3"> <label for="lastname" class="form-label lastname  text-white">Password</label>
                        <input type="password" class="form-control" id="last_name" name="password"autocomplete='off'>
                    </div>

                    <button type="submit" class="btn btn-danger" name="login">Login</button>
                 <a class="text-warning btn btn-warning text-white" href="ragister.php">ragister</a>
  </form>

            </div>
        </div>
    </div>
</body>

</html>