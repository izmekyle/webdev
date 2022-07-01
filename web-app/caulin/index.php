
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Ian Nico Caulin</title>
</head>

<body>
	<div class="container">
		<h1>Products</h1>
		<table id="table" class="table table-hover table-dark">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>PRICE</th>
					<th>UNITS</th>
				</tr>
			<tbody>	

				<?php
					require 'connection.php';
					if (isset($_POST['buttonImport'])) {
						copy(
							$_FILES['displayTable']['tmp_name'],
							'data/' . $_FILES['displayTable']['name']
						);
						$products = simplexml_load_file('data/' . $_FILES['demo']['name']);
						foreach ($products as $products) {
							$stmt = $conn->prepare('insert into
								products(ID, NAME, PRICE, UNITS)
								values(:ID, :NAME, :PRICE, :UNITS)');
							$stmt->bindValue('ID', $products->ID);
							$stmt->bindValue('NAME', $products->NAME);
							$stmt->bindValue('PRICE', $products->PRICE);
							$stmt->bindValue('UNITS', $products->UNITS);
							$stmt->execute();
						}
					}
					$stmt = $conn->prepare('select * from products');
					$stmt->execute();
				?>

				<?php while ($products = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
					<tr>
						<td><?php echo $products->ID; ?></td>
						<td><?php echo $products->NAME; ?></td>
						<td><?php echo $products->PRICE; ?></td>
						<td><?php echo $products->UNITS; ?></td>
					</tr>
				<?php 
				}
				 ?>
			</tbody>
		</table>
	</div>
</body>

</html>