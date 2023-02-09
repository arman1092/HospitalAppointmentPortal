<html>
    <head>
        <title>Appointments | Hospital</title>
        <link rel="icon" href="img/MediCare_Logo.png" type="image/icon type">

        <style>

    .parent{
        display: flex;
    } 
    
    .btn1 .btns{
        display: block;
        left: 7%;
        top: 10%;
        background: -webkit-linear-gradient(left, #a6a6a6, #62635f);
        color: black;
        font-size: large;
        margin: 15px;
        padding: 16px 30px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        a:focus{background-color: blue};
    }

    .btn1 .btns:hover {
        background-color: black;
        color:white;
    }
        </style>
    </head>

    <body background = "img/bg.jpg">
        <div class="parent">
            <div class="btn1">
                <form method="post">
                    <button name="s1" class="btns">Dentist</button>
                    <button name="s2" class="btns">Physician</button>
                    <button name="s3" class="btns">Orthopaedician</button>
                    <button name="s4" class="btns">Dermatologist</button>
                    <button name="s5" class="btns">Opthalmologist</button>
                    <button name="s6" class="btns">Surgeon</button>
                </form>
            </div>
               <div class="action1.php">
                <?php
                echo "<center>";
                echo "<b>TODAY'S APPOINTMENTS</b>";
                if(isset($_POST["s1"])){
                    echo " <b>FOR DENTIST</b>";
                    include("admindent.php");
                }
                if(isset($_POST["s2"])){
                    echo " <b>FOR PHYSICIAN</b>";
                    include("adminphy.php");
                }
                if(isset($_POST["s3"])){
                    echo " <b>FOR ORTHOPAEDICS</b>";
                    include("adminortho.php");
                }
                if(isset($_POST["s4"])){
                    echo " <b>FOR DERMATOLOGIST</b>";
                    include("admindermo.php");
                }
                if(isset($_POST["s5"])){
                    echo " <b>FOR OPTHALMOLOGIST</b>";
                    include("adminopthal.php");
                }
                if(isset($_POST["s6"])){
                    echo " <b>FOR SURGEON</b>";
                    include("adminsurg.php");
                }
                echo "</center>";

                echo "<center>";
                echo "<b>TOMORROW'S APPOINTMENTS";
                if(isset($_POST["s1"])){
                    echo " <b>FOR DENTIST</b>";
                    include("admindent1.php");
                }
                if(isset($_POST["s2"])){
                    echo " <b>FOR PHYSICIAN</b>";
                    include("adminphy1.php");
                }
                if(isset($_POST["s3"])){
                    echo " <b>FOR ORTHOPAEDICS</b>";
                    include("adminortho1.php");
                }
                if(isset($_POST["s4"])){
                    echo " <b>FOR DERMATOLOGIST</b>";
                    include("admindermo1.php");
                }
                if(isset($_POST["s5"])){
                    echo " <b>FOR OPTHALMOLOGIST</b>";
                    include("adminopthal1.php");
                }
                if(isset($_POST["s6"])){
                    echo " <b>FOR SURGEON</b>";
                    include("adminsurg1.php");
                }
                echo "</center>";
                ?>
               </div>
        </div>
    </body>
</html>