<?php
    require 'connect.php';
    session_start();
    if(isset($_SESSION['email'])){
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
     
    <div class="header">
                <img src="images/icon.png">
                <li><a href="home.php">Home</a></li>
            </div>
    </head>
    <body>
        <div>
       
            <div class="container">
            <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                            <div class="panel-heading">
                        <p>Register Here.</p>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="surname" placeholder="Sur Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phonenumber" placeholder="phonenumber" required="true">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="dob" placeholder="dob" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="facebook" placeholder="facebook" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="twitter" placeholder="Twitter" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="instagram" placeholder="Instagram" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </body>
</html>
