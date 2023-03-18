<form method="post">
	<input type="text" name="buah" placeholder="Buah" required>
	<input type="text" name="deskripsi" placeholder="Deskripsi" required>
	<input type="number" name="harga" placeholder="Harga" required>
	<button type="submit" name="submit">Simpan</button>
</form>

<?php
	require_once("db.php");

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "DELETE FROM tblbuah WHERE idbuah = $id";

		$koneksi -> query($sql);
	}

	if(isset($_POST["submit"]))
	{
		$buah = $_POST["buah"];
		$deskripsi = $_POST["deskripsi"];
		$harga = $_POST["harga"];
		
		$sql = "INSERT INTO tblbuah (namabuah, deskripsi, hargabuah) VALUES ('$buah', '$deskripsi', $harga)";

		$koneksi -> query($sql);
	}

	$sql = 'SELECT * FROM tblbuah';

	// echo $sql;

	$hasil = $koneksi->query($sql);

	// echo '<br>';
	
	// print_r($hasil);

	// echo '<br>';

	// echo $hasil->num_rows;

	// echo '<br>';

	echo '<table border="1px" cellpadding="5px" cellspacing="0">';
		echo "<tr>";
			echo "<th>idbuah</th>";
			echo "<th>namabuah</th>";
			echo "<th>deskripsi</th>";
			echo "<th>harga</th>";
			echo "<th>gambar</th>";
			echo "<th>hapus</th>";
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
						echo "<td>" . $row[4] . "</td>";
						echo '<td><a href="?id=' . $row[0] . ' ">hapus</a></td>';
					echo "</tr>";
				}
			}
			
	echo "</table>";
?>