<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dermatologist | Hospital</title>
    <link rel="icon" href="img/MediCare_Logo.png" type="image/icon type">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1>Available Time Slots</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>Time</th>
				<th>Name</th>
				<th>Age</th>
				<th>Phone</th>
				<th>Address</th>
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "dermatologist";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM tomorrow";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
            while ($row = $result->fetch_assoc()) {
                if ($row["NAME"] == NULL) {
                    echo "<tr>
                    <td>" . $row["TIME"] . "</td>
                    <td>" . $row["NAME"] . "</td>
                    <td>" . $row["AGE"] . "</td>
                    <td>" . $row["PHONE"] . "</td>
                    <td>" . $row["ADDRESS"] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='dermobook1.php'>Available</a>
                    </td>
                </tr>";
                }
                else{
                    echo "<tr>
                    <td>" . $row["TIME"] . "</td>
                    <td>" . $row["NAME"] . "</td>
                    <td>" . $row["AGE"] . "</td>
                    <td>" . $row["PHONE"] . "</td>
                    <td>" . $row["ADDRESS"] . "</td>
                    <td>
                        <a class='btn btn-danger btn-sm' href='update'>Booked</a>
                    </td>
                </tr>"; 
                }
            }
            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html>