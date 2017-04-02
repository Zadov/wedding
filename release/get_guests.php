<?php 
	
	include_once 'bd.php';

	$sql_guests = "SELECT * FROM list ORDER BY name_id ASC";
	if ($query_guest = $mysqli->query($sql_guests)) {
		$i = 1;
		echo '<table border="1" cellspacing="0">';
		while ($row_name = $query_guest->fetch_assoc()) {
			echo "<tr>
			<td>".$i++."</td>
			<td>".$row_name['name']."</td>
			<td>".$row_name['surname']."</td>
			<td>".$row_name['willbe']."</td>
			<td>".$row_name['comment']."</td>
			</tr>";
		}
		echo "</table>";
		$query_guest->close();
	}


	$mysqli->close();
 ?>

 <a href="index.php">Домой</a>