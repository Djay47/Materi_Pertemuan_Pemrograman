<?php
	require_once("db.php");

	$sql = 'SELECT * FROM tblteman';

	// echo $sql;

	$hasil = $koneksi->query($sql);

	// echo '<br>';
	
	// print_r($hasil);

	// echo '<br>';

	// echo $hasil->num_rows;

	// echo '<br>';

	echo '<table border="1px" cellpadding="5px" cellspacing="0">';
		echo "<tr>";
			echo "<th>idteman</th>";
			echo "<th>nama</th>";
			echo "<th>alamat</th>";
			echo "<th>asalsekolah</th>";
		echo "</tr>";

			if($hasil->num_rows > 0)
			{
				while($row = $hasil -> fetch_array())
				{
					echo "<tr>";
						echo "<td>" . $row[0] . "</td>";
						echo "<td>" . $row[1] . "</td>";
						echo "<td>" . $row[2] . "</td>";
						echo "<td>" . $row[3] . "</td>";
					echo "</tr>";
				}
			}
			else
			{
				echo "Kosong<br>";
			}
		
	echo "</table>";
?>