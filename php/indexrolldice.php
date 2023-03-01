<?php

// Connect to the DB server and select a given DB:
$db = new PDO(
  "mysql:host=localhost;dbname=ecommerce", "root", "root"
);

$my_sql = 'SELECT * FROM inventory';

// If there was no exception, the program continues hereâ€¦
$result = $db->query( $my_sql ); // E.g. SELECT * FROM inventory
if ($result == false) {
   print_r( $db->errorInfo() );  // Use errorInfo after you connect to the database.
   exit();
}

?>

<style>
	table {
		border-collapse: collapse;
	}

	table, td, th {
		border: 1px solid grey;
		padding: 5px;
	}
	
	th:nth-child(2), th:nth-child(3), td:nth-child(2), td:nth-child(3) {
		text-align: right;
	}
</style>


<table>
	<tr>
		<th>Item</th>
		<th>Unit Price</th>
		<th>How Many In Stock</th>
	</tr>
<?php

while ( $row = $result->fetch( PDO::FETCH_ASSOC ) ) {
  // Do something with each $row of dataâ€¦
//	print_r($row);
//	echo "\n";
?>

	<tr>
		<td>
			<a href="details.php?sku=<?= $row['sku'] ?>">
				<?= $row['title'] ?>
			</a>
		</td>

		<td>
			$ <?= number_format( $row['unit_price'], 2 ) ?>
		</td>

		<td>
			<?= $row['in_stock'] ?>
		</td>
	</tr>
<?php

}

?>
</table>

