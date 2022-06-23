<?php
    include('connect.php');
    //$conn = new mysqli('localhost', 'root', '', 'Hustler');

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $creds = "SELECT email,pass FROM Registration WHERE email='$email' AND pass='$pass'";
    $results = mysqli_query($conn,$creds);

    
    if($results){       
        while( $data = mysqli_fetch_assoc($results)){
            if(($data['email'] == $email) && ($data['pass'] == $pass)){
                session_start();
                $_SESSION['email'] = $email;
                header("location:http://localhost/PROJECT/alumni.php");
            }
            /*else{
                echo "Wrong password or email";
                */
            }
            if(empty($_SESSION['email'])){
              die("Wrong password or email");
            }
        }
    
    
?>