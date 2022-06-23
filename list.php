<?php
    require 'connect.php';
    session_start();
    if(isset($_SESSION['email'])){   
    }
    ?>
    <!DOCTYPE html>
    <html>
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
<h1 style="text-align:center;">Registered in Alumni Page. </h1>
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
      </body>
</html>

      <?php
$conn=mysqli_connect("localhost","root","","hustler");
$sql="SELECT* FROM alumni";
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
   
 