<?php
    require 'connect.php';
    session_start();
    $firstname= mysqli_real_escape_string($con,$_POST['firstname']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=register.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=register.php" />
        <?php
    }
    $middlename= mysqli_real_escape_string($con,$_POST['middlename']);
    $surname= mysqli_real_escape_string($con,$_POST['surname']);
    $phonenumber=mysqli_real_escape_string($con,$_POST['phonenumber']);
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
    $facebook= mysqli_real_escape_string($con,$_POST['facebook']);
    $twitter= mysqli_real_escape_string($con,$_POST['twitter']);
    $instagram= mysqli_real_escape_string($con,$_POST['instagram']);
    
    $duplicate_user_query="select id from registration where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=register.php" />
        <?php
    }else{
        $user_registration_query="insert into registration(firstname,middlename,surname,email,password,facebook,twitter,instagram,phonenumber,dob) values ('$firstname','$middlename','$surname','$email','$password','$facebook','$twitter','$instagram','$phonenumber','$dob')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con); 
        //header('location: index.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="1;url=alumni.php" />
        <?php
    }
    
?>