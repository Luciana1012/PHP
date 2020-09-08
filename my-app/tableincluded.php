<table width='30%' border=0>

	<td>Product Code</td>
	<td>Product Name </td>
	<td>Product Price </td>
	<td>Product sold at </td>

	</tr>

	<?php include("config.php");

	$sql = "SELECT * FROM information_table";
	$result = mysqli_query($conn, $sql);

	while($res = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$res['id']."</td>";
	echo "<td>".$res['product_name']."</td>";
	echo "<td>".$res['price']."</td>";
	echo "<td>".$res['store']."</td>";

	}
	?>

</table>