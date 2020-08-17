
<?php
include "config.php";
if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($con,$_POST["email"]);
    $pass = mysqli_real_escape_string($con,$_POST["password"]);

    if ($email != "" && $pass != ""){

        $sql_query = "select count(*) as cntUser,name,email from users where email='".$email."' and password='".$pass."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){

            $_SESSION['username'] =$row['name'];
            $_SESSION['email'] =$row['email'];

            header('Location: profile.php');
        }else{
             $_SESSION['errorMessage'] = "Invalid username and password";
             
             header("Location: index.php");
             exit();
        }

    }

}
?>