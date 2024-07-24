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
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col">
                <form action="regdata.php" method="POST">
                    <h4 class="text-center text-white  mb-5" style=" border-bottom:1px solid white ">Ragistration Form
                    </h4>

                    <?php
                  
                  if(isset($_SESSION['status'])){
                    echo "<p style='color:red'>" .$_SESSION['status']. "</p>";
                   ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> 
                        
                        <?php echo "<p style='color:red'>" .$_SESSION['status']. "</p>";?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <?php
                    unset ($_SESSION['status']);
              }
        ?>


                    <div class="mb">
                        <label for="exampleInputPassword1" class="form-label text-white">Enter Your Names</label>
                        <input type="names" class="form-control" id="user_email" name="username"
                            placeholder="Enter Your Names">
                    </div>


                    <div class="mb"> <label for="lastname" class="form-label lastname  text-white">LastName</label>
                        <input type="text" class="form-control" id="last_name" name="lastname" autocomplete="off">

                    </div>


                    <div class="mb">
                        <label for="exampleInputPassword1" class="form-label text-white">Email</label>
                        <input type="email" class="form-control" id="user_email" name="email">
                    </div>

                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                        <input type="password" class="form-control" id="user_password" name="password"
                            autocomplete="off">
                    </div>

                    <div class="mb-1">
                        <label for="cPassword1" class="form-label text-white">Confirm Password</label>
                        <input type="cpassword" class="form-control" id="cpassword" name="cpassword" autocomplete="off">
                    </div>


                    <div class="mb-1">
                        <label for="phoneno" class="form-label text-white">Enter Your Contact Number</label>
                        <input type="number" class="form-control" id="phoneno" name="phone">
                    </div>


                    <div>
                        <label for="myfile" class="form-label text-white mt-4 ">Select files:</label>
                        <input class="form-label text-white" type="file" id="myfile" name="myfile" multiple><br>

                    </div><br>


                    <div class="row">
                        <div class="col-lg-5">
                            <h5 class="text-white ">Gender:
                                <input type="radio" name="male"> Male
                                <input type="radio" name="female">Female
                            </h5>

                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col-lg-5 w-100">
                            <h5 class="text-white ">Programs
                                <input type="radio" name="fav_language"> HTML
                                <input type="radio" name="fav_language"> CSS
                                <input type="radio" name="fav_language"> JAVASCRIPT

                            </h5>

                        </div>
                    </div>



                    <div class="row">
                        <div class="mt-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-white" for="exampleCheck1" name="checkout">Check me
                                out</label>
                        </div>



                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>


                </form>

            </div>
        </div>
    </div>
</body>

</html>