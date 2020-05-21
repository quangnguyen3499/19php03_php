<h2>News page</h2>
<table>
	<tr>
		<th>No.</th>
		<th>Title</th>
		<th>Description</th>
	</tr>
	<?php 
		while ($row = $myNews->fetch_assoc()) {
			$id = $row['id'];
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "</tr>";
		}
	?>
</table>