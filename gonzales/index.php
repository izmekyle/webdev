<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>sdsdsd</title>
	<style>

		.mapano{
			height: 200px;
			width: 400px;
			display: block;
  margin-left: auto;
  margin-right: auto;

		}
	</style>
</head>

<body> <?php
		include("connection.php");
		$query = mysqli_query($con, "SELECT * FROM product");
		?>

	<div class="mapano">

		<table id="table" class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>PRICE</th>
					<th>UNITS</th>
				</tr>
				<thead>


					<?php
					foreach ($query as $row1) {
					?>
						<tr>
							<td><?php echo $row1['ID'] ?></td>
							<td><?php echo $row1['NAME'] ?></td>
							<td><?php echo $row1['PRICE'] ?></td>
							<td><?php echo $row1['UNITS'] ?></td>

						</tr>


					<?php

					}
					?>
					</tbody>
		</table>



	</div>
</body>

</html>