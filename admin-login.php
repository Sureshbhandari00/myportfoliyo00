<?php
include 'config.php';
if (isset($_POST['login'])){
    include 'useractivesession.php'; 
}else{
    header('location:homepage.php');
}
if (isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `ragistration` WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    
    if($row=mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      
        $_SESSION['useractive']=true;
        $_SESSION['useradmin']=$row['username'];
        $_SESSION['id']=$row['id'];
        header("Location:homepage.php");
    }

    }
    // elseif($username||$password==false){
    //     $_SESSION['error']='please Enter Email or Password';
    //     header("Location:index.php");
    
    // }
    
    elseif(empty($username OR $password)){
        $_SESSION['error']='please Enter Valid Details';
        header("Location:index.php");
    }
else{
    $_SESSION['sucesss']='You are Successfully LoggedIn';
        header("Location:homepage.php");

}

}


      // $_SESSION['useractive']=true;