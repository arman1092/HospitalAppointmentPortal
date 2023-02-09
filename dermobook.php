<!DOCTYPE html>
<html>
<head>
    <title>Dermatologist | Hospital</title>
    <link rel="icon" href="img/MediCare_Logo.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylesheetReg.css">
</head>
<body>
<form method="post">
<div class="wrapper">
    <div class="container">
        <center><h1>Register Here</h1></center>
        <hr>
        <label>Time</label> 
        <input type="text" name="time" placeholder= "Your Preferred Time" size="10" required /> 

        <label>Name</label> 
        <input type="text" name="name" placeholder= "Your Name" size="15" required /> 

        <label>Age</label> 
        <input type="text" name="age" placeholder= "Your Age" size="2" required /> 
    
        <label>Phone</label>
        <input type="text" name="phone" placeholder="Phone No." size="10" required> 

        <label>Address</label>
        <input type="text" name="address" placeholder= "Your Address" size="15" required /> 

        </hr>
        <center>
        <div class="registerbtn">
            <center><input type="submit" name="submit" value="submit"></center>     
        </div>
        </center>
    </div>
</div>
</form>

<?php
if(isset($_POST["submit"])){
    $time=$_POST["time"];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $phone=$_POST["phone"];
    $ad=$_POST["address"];
    $con=mysqli_connect("localhost","root","","dermatologist");
    $temp=0;
    $query = "SELECT * FROM `today` WHERE TIME='".$time."'";
    $r=mysqli_query($con,$query);
    if((mysqli_fetch_array($r)["NAME"])==null){
        $update = "UPDATE `today` SET `name`='".$name."',address='".$ad."',age='".$age."',phone='".$phone."' WHERE time = '".$time."'";
        mysqli_query($con, $update);
        echo '<script>alert("Booked Successfully, Please Come On Time.")</script>';
    }
    else{
        echo '<script>alert("Already Booked, Please Book For Some Other Time.")</script>';
    }
    
}
?>
</body>  
</html>  