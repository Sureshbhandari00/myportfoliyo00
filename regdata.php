<?php

include 'config.php';

  if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $lastname=$_POST["lastname"];
   $email=$_POST["email"];
   $password=  $_POST["password"];
   $cpassword=$_POST["cpassword"];
   $dpassword=md5($password);
    $phone=$_POST["phone"];
    $myfile=$_POST["myfile"];
    $gender=$_POST["gender"];
   $fav_language=$_POST["fav_language"];

   if($password==$cpassword){
    $query=mysqli_query($conn,"SELECT email FROM `ragistration` WHERE email ='$email' AND password='$password' ") or exit(mysqli_error($connecionID));


    $sql="INSERT INTO `ragistration`(`username`,`lastname`,`email`,`password`,`cpassword`,`phone`,`myfile`,`gender`,`fav_language`)
    VALUES('$username','$lastname','$email','$password','$dpassword','$phone','$myfile','$gender','$fav_language')";
   if($conn->query($sql)){
                  $_SESSION['status']='Thank You For Rgistration';
                  header("location:index.php");
                }
                // if(empty($email)){
                //   $_SESSION['status']='Email can not be';
                //   header("location:ragister.php");
                // }
                // if(empty($username)){
                //   $_SESSION['status']='USERNAME Can Not Blank';
                //   header("location:ragister.php");
                // }
                // if(empty($lastname)){
                //   $_SESSION['status']='LastName Can Not Blank';
                //   header("location:ragister.php");
                // }
                
               else{
                $_SESSION['status']='Ragistration Failed';
                header("location:ragister.php");
              }

             }else{
              $_SESSION['status']='Password mismatch';
              header("location:ragister.php");

             } 
             if(empty($username)){
                $_SESSION['status']='USERNAME Can Not Blank';
                header("location:ragister.php");
              }
              if(empty($lastname)){
                $_SESSION['status']='LastName Can Not Blank';
                header("location:ragister.php");
              }
              
              }
  //   if( mysqli_num_rows($select)>0){
  //     $_SESSION['error']='email Already exist';
  //     echo "<div class='alert alert-danger'>Email ALready Exist</div>";
  //     header("location:ragister.php");
  //   } else{
  //   $sql="INSERT INTO `ragistration`(`username`,`lastname`,`email`,`password`,`cpassword`,`phone`,`myfile`,`gender`,`fav_language`)VALUES('$username','$lastname','$email','$password','$dpassword','$phone','$myfile','$gender','$fav_language')";
  //          if( $conn->query($sql)===TRUE){
  //             $_SESSION['success']='Thank You For Rgistration';
  //             header("location:index.php");}
  //          else{
  //             echo 'Error :' .$sql . "<br>" . $conn->error;
  //           }
          
  //   }
  // }
  // else{
  
  //   $_SESSION['error']='<h4>password does not match</h4>';
  //   header("location:ragister.php");
  // }
  //   }


   
  ?>











     
      
            