<?php
if(isset($_POST["signup"])){
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];
    if($name=="Raunak" && $pass=="12345" || $cpass=="12345"){
        header("location:tabshow.php");
    }
    else{
        echo "Invalid Username or Password";
    }
}

?>