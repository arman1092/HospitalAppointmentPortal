<?php
$con = mysqli_connect("localhost", "root", "", "dental");

// fetch files
$sql = "select time, name, age, phone, address from `today`";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table{
            margin-left: 100px;
        }
        
        table th{
            font-size: large;
            background-color: grey;
        }
        table{
            border: 1px solid white;
        }
        table td{
            border:1px solid white;
        }
        

        </style>
    <title>Admin Database | Hospital</title>
    <link rel="icon" href="img/MediCare_Logo.png" type="image/icon type">

    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>
    
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover" width="70%" align="center" border="1" cellspacing="0" cellpadding="10" >
                <thead>
                    <tr align="center" border="1px">
                        <th>S. No.</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr align="center"border="1px" bgcolor="darkgrey">
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>