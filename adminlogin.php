<?php
if(isset($_POST["login"])){
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    if($name=="Raunak" && $pass=="12345"){
        header("location:tabshow.php");
    }
    else{
        echo "Invalid Username or Password";
    }
}

?>