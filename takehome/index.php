<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link><link rel="stylesheet" href="css/style.css"></link>
</head>
<body style="margin: 50px;">
    <h1>List of Products</h1>
    <br>
    <table class="table table-info table-hover ">
        <thead>
			<tr class="table-dark">
				<th>ID</th>
				<th>NAME</th>
				<th>PRICE</th>
				<th>UNITS</th>
			</tr>
		</thead>

        <tbody>
            <?php
			
            $conn = mysqli_connect("localhost","root","","newbie_tuts");
            $sql = "SELECT * FROM tbl_product";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>                    
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['price'] . "</td>
                        <td>" . $row['units'] . "</td>
                    </tr>";
                }
            }
            else{
                echo "No results";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>