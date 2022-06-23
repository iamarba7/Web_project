<?php
    require 'connect.php';
    session_start();
    if(isset($_SESSION['email'])){   
    }
if(isset($_POST['create'])){
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $yearOfEnrolment=$_POST['yearOfEnrolment'];
    $yearOfGradu=$_POST['yearOfGradu'];
    $HnameEnrol=$_POST['HnameEnrol'];
    $HnameGradu=$_POST['HnameGradu'];
    $famousteacherGradu=$_POST['famousteacherGradu'];
    $email=$_POST['email'];
    $occupation=$_POST['occupation'];
    $phone=$_POST['phone'];
    $result=$_POST['result'];
    $physicaladdress=$_POST['physicaladdress'];
    $postaladdress=$_POST['postaladdress'];
   
    $select = " SELECT * FROM alumniusers WHERE email = '$email' ";
    $results = mysqli_query($con, $select);
    if(mysqli_num_rows($results) > 0){

        $error[] = 'user exists!';
    
     }else{
        $insert = "INSERT INTO alumniusers(firstname, middlename, yearOfEnrolment,yearOfGradu,HnameEnrol,HnameGradu,famousteacherGradu,email,occupation,phone,result,physicaladdress,postaladdress) VALUES('$firstname','$middlename','$yearOfEnrolment','$yearOfGradu','$HnameEnrol','$HnameGradu','$famousteacherGradu','$email','$occupation','$phone','$result','$physicaladdress','$postaladdress')";
        mysqli_query($con, $insert);
        $success[] = 'Alumni  registration successfully';
     };   
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/ml.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <div class="banner">

            <div class="header">
                <img src="images/icon.png">
            </div>

            <div class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
               
                <li><a href="about.php">About us</a></li>
                <li><a href="alumni.php">Alumni</a></li>
              
                <li><a href="staff.php">Staff</a></li>
                <li><a href="contacts.php">Contact us</a></li>
            
              
            </ul>
            </div>
        <style>
            table,th,td
            {
                border:1px solid blue;;
                border-collapse:collapse;
                margin:10px;
            }
            th,td{
                padding:5px;
            }
            </style>
    </head>
    <body>
        <div>
         
  <div class="container">
                <div class="row">
                    <div class="col-xs-15 col-xs-offset-0">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
    <form   action="alumni.php"  method="post" autocomplete="off" id="form">
        <p><i><b>Register for Alumni.</b></i></p>
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<h3 class="error-msg" style="color:crimson;text-align:center;">'.$error.'</h3>';
         };
      }else
      {   
         };
      ?>
                <label for="firstname"><b>First Name </b></label>
                <input type="text"  name="firstname" required><br>
                
                <label for="middlename"><b>Middle Name </b></label>
                <input type="text" name="middlename" required><br>
                
                <label for="yearOfEnrolment"><b>Year Of Enrolment </b></label>
                <input type="number" min="1980" max="2022"  name="yearOfEnrolment" required><br>
                
                <label for="yearOfGradu"><b>Year of Graduation </b></label>
                <input type="number"  min="1984" max="2022" name="yearOfGradu" required><br>
                
                <label for="HnameEnrol"><b>Headmaster/HeadMistres Name At Year Of Enrolment </b></label>
                <input type="text" name="HnameEnrol" required><br>
                
                <label for="HnameGradu"><b>Headmaster/HeadMistres Name At Year Of Graduation </b></label>
                <input type="text"  name="HnameGradu" required><br>
               
                <label for="famousteacherGradu"><b>The Name Of The Famous Teacher at Graduation Time  </b></label>
                <input type="text" name="famousteacherGradu" required><br>
           
            <div class="right">
  
                <label for="email"><b>Email</b></label>
                <input type="email"  id="email" name="email" onkeydown="ValidateEmail()" required>
               <span id="text"></span>
               <br>
                <label for="result"><b>Your Result </b></label>
                <select id="result" name="result">
                    <option value="empty">Choose Your Result</option>
                    <option value="one">ONE</option>
                    <option value="two">TWO</option>
                    <option value="three">THREE</option>
                    <option value="four">FOUR</option>
                    <option value="zero">ZERO</option>
                    </select><br>

                    <label for="occupation"><b>Occupation </b></label>
                <input type="text"   name="occupation" required><br>
                
                <label for="phone"><b>Phone Number </b></label>
                <input type="text"  name="phone" required><br>

                <label for="physicaladdress"><b>Physical Address </b></label>
                <input type="text" name="physicaladdress" required><br>

                <label for="postaladdress"><b>Postal Address </b></label>
                <input type="text"  name="postaladdress" required><br>
                
            </div>
        </div>
        <button type="submit" onclick="ValidateEmail(document.form.text)" class="registerbtn" name="create"><b>Register</b></button>
        </div>
        </class>  
    </form> 
<script>
    function ValidateEmail()
{
    var emailError = document.getElementById("email").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var textError = document.getElementById("text");
    if(emailError.match(mailformat))
    {
    textError.innerHTML = "Valid Email Address";
    textError.style.color = "#0000ff";
    return true;
    }
    else
    {
    textError.innerHTML = "Invalid Email Address";
    textError.style.color = "#ff0000";
    return false;
    }
}
</script>
<br><br>
<h1 style="text-align:center;"> Registered in Alumni Page. </h1>
    <table class="Table">
      <tr>
        <th>id</th>
        <th>firstname</th>
        <th>middlename</th>
        <th>Year Of Enrolment</th>
        <th>Year Of Graduation</th>
        <th>Email</th>
        <th>Occupation</th>
        <th>Phone</th>
        <th>Physical Address</th>
        <th>Postal Address</th>
      </tr>  
      <?php
$conn=mysqli_connect("localhost","root","","hustler");
$sql="SELECT* FROM alumniusers";
$result=$conn->query($sql);

if($result->num_rows>0)
{
   while($row=$result->fetch_assoc()) 
   {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["middlename"]."</td><td>".$row["yearOfEnrolment"]."</td><td>".$row["yearOfGradu"]."</td><td>".$row["email"]."</td><td>".$row["occupation"]."</td><td>".$row["phone"]."</td><td>".$row["physicaladdress"]."</td><td>".$row["postaladdress"]."</td></tr>";
   }
}else{
    echo "no result found";
}
$conn->close();
      ?>
    </table>
    <br><br><br><br><br>

    </body>
</html>
