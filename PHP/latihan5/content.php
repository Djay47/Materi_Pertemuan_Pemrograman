<?php 

	$page = ["index.php","#","#","#"];
	
	$menu = ["Home", "Kontak", "Sejarah", "Jurusan"];
	
	$judul = ["Apel", "Jeruk", "Mangga", "Durian"];
	
	$deskripsi =
	[
		"Apel adalah...",
		"Jeruk adalah..",
		"Mangga adalah...",
		"Durian adalah..."
	];

	$link =
	[
		"home" => "<a href='#'>home</a>",
		"kontak" => "<a href='#'>kontak</a>",
		"sejarah" => "<a href='#'>sejarah</a>",
		"jurusan" => "<a href='#'>jurusan</a>"
	];

	// echo $link["home"];
	
	/*
	foreach($link as $key => $value)
	{
		echo "<li>$value</li>";
	}
	*/

	// $nilai = 80;
	
	/*
	if($nilai < 0 || $nilai > 100)
	{
		echo "Nilai tidak valid!";
	}
	else if($nilai == 70 )
	{
		echo "KKM!";
	}
	else if($nilai > 70 )
	{
		echo "Diatas KKM";
	}
	else
	{
		echo "Dibawah KKM!";
	}
	*/
	
	/*
	if($nilai >= 0 && $nilai <= 100 )
	{
		if($nilai == 71)
		{
			echo "KKM";
		}
		else if($nilai > 71 && $nilai < 80 )
		{
			echo "C";
		}
		else if($nilai >= 80 && $nilai < 90)
		{
			echo "B";
		}
		else if($nilai >= 90 && $nilai <= 100)
		{
			echo "A";
		}
	}
	else
	{
		echo "Nilai Tidak Valid";
	}
	*/

	/*
	$tanggal = 2;
	$bulan = 1;

	if($tanggal >= 1 && $tanggal <= 32 && $bulan >= 1 && $bulan <= 12)
	{
		// Januari
		if($bulan == 1)
		{
			if($tanggal >= 1 && $tanggal <= 19)
			{
				echo "Zodiak: Capricorn";
			}
			else if($tanggal >= 20 && $tanggal <= 31)
			{
				echo "Zodiak: Aquarius";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Februari
		if($bulan == 2)
		{
			if($tanggal >= 1 && $tanggal <= 18)
			{
				echo "Zodiak: Aquarius";
			}
			else if($tanggal >= 19 && $tanggal <= 29)
			{
				echo "Zodiak: Pisces";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Maret
		if($bulan == 3)
		{
			if($tanggal >= 1 && $tanggal <= 20)
			{
				echo "Zodiak: Pisces";
			}
			else if($tanggal >= 21 && $tanggal <= 31)
			{
				echo "Zodiak: Aries";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// April
		if($bulan == 4)
		{
			if($tanggal >= 1 && $tanggal <= 20)
			{
				echo "Zodiak: Aries";
			}
			else if($tanggal >= 21 && $tanggal <= 30)
			{
				echo "Zodiak: Taurus";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Mei
		if($bulan == 5)
		{
			if($tanggal >= 1 && $tanggal <= 20)
			{
				echo "Zodiak: Taurus";
			}
			else if($tanggal >= 21 && $tanggal <= 31)
			{
				echo "Zodiak: Demini";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Juni
		if($bulan == 6)
		{
			if($tanggal >= 1 && $tanggal <= 20)
			{
				echo "Zodiak: Gemini";
			}
			else if($tanggal >= 21 && $tanggal <= 30)
			{
				echo "Zodiak: Cancer";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Juli
		if($bulan == 7)
		{
			if($tanggal >= 1 && $tanggal <= 20)
			{
				echo "Zodiak: Cancer";
			}
			else if($tanggal >= 21 && $tanggal <= 31)
			{
				echo "Zodiak: Leo";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Agustus
		if($bulan == 8)
		{
			if($tanggal >= 1 && $tanggal <= 21)
			{
				echo "Zodiak: Leo";
			}
			else if($tanggal >= 22 && $tanggal <= 31)
			{
				echo "Zodiak: Virgo";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// September
		if($bulan == 9)
		{
			if($tanggal >= 1 && $tanggal <= 22)
			{
				echo "Zodiak: Virgo";
			}
			else if($tanggal >= 23 && $tanggal <= 30)
			{
				echo "Zodiak: Libra";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Oktober
		if($bulan == 10)
		{
			if($tanggal >= 1 && $tanggal <= 22)
			{
				echo "Zodiak: Libra";
			}
			else if($tanggal >= 23 && $tanggal <= 31)
			{
				echo "Zodiak: Scorpio";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// November
		if($bulan == 11)
		{
			if($tanggal >= 1 && $tanggal <= 22)
			{
				echo "Zodiak: Scorpio";
			}
			else if($tanggal >= 23 && $tanggal <= 30)
			{
				echo "Zodiak: Sagitarius";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}

		// Desember
		if($bulan == 12)
		{
			if($tanggal >= 1 && $tanggal <= 20)
			{
				echo "Zodiak: Sagitarius";
			}
			else if($tanggal >= 21 && $tanggal <= 31)
			{
				echo "Zodiak: Capricon";
			}
			else
			{
				echo "Tanggal Tidak Valid!";
			}
		}
	}
	else
	{
		echo "Tanggal atau Bulan Salah!";
	}
	*/

	function zodiak($bulan, $tanggal)
	{
		if($tanggal >= 1 && $tanggal <= 32 && $bulan >= 1 && $bulan <= 12)
		{
			// Januari
			if($bulan == 1)
			{
				if($tanggal >= 1 && $tanggal <= 19)
				{
					echo "Zodiak: Capricorn";
				}
				else if($tanggal >= 20 && $tanggal <= 31)
				{
					echo "Zodiak: Aquarius";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Februari
			if($bulan == 2)
			{
				if($tanggal >= 1 && $tanggal <= 18)
				{
					echo "Zodiak: Aquarius";
				}
				else if($tanggal >= 19 && $tanggal <= 29)
				{
					echo "Zodiak: Pisces";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Maret
			if($bulan == 3)
			{
				if($tanggal >= 1 && $tanggal <= 20)
				{
					echo "Zodiak: Pisces";
				}
				else if($tanggal >= 21 && $tanggal <= 31)
				{
					echo "Zodiak: Aries";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// April
			if($bulan == 4)
			{
				if($tanggal >= 1 && $tanggal <= 20)
				{
					echo "Zodiak: Aries";
				}
				else if($tanggal >= 21 && $tanggal <= 30)
				{
					echo "Zodiak: Taurus";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Mei
			if($bulan == 5)
			{
				if($tanggal >= 1 && $tanggal <= 20)
				{
					echo "Zodiak: Taurus";
				}
				else if($tanggal >= 21 && $tanggal <= 31)
				{
					echo "Zodiak: Demini";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Juni
			if($bulan == 6)
			{
				if($tanggal >= 1 && $tanggal <= 20)
				{
					echo "Zodiak: Gemini";
				}
				else if($tanggal >= 21 && $tanggal <= 30)
				{
					echo "Zodiak: Cancer";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Juli
			if($bulan == 7)
			{
				if($tanggal >= 1 && $tanggal <= 20)
				{
					echo "Zodiak: Cancer";
				}
				else if($tanggal >= 21 && $tanggal <= 31)
				{
					echo "Zodiak: Leo";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Agustus
			if($bulan == 8)
			{
				if($tanggal >= 1 && $tanggal <= 21)
				{
					echo "Zodiak: Leo";
				}
				else if($tanggal >= 22 && $tanggal <= 31)
				{
					echo "Zodiak: Virgo";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// September
			if($bulan == 9)
			{
				if($tanggal >= 1 && $tanggal <= 22)
				{
					echo "Zodiak: Virgo";
				}
				else if($tanggal >= 23 && $tanggal <= 30)
				{
					echo "Zodiak: Libra";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Oktober
			if($bulan == 10)
			{
				if($tanggal >= 1 && $tanggal <= 22)
				{
					echo "Zodiak: Libra";
				}
				else if($tanggal >= 23 && $tanggal <= 31)
				{
					echo "Zodiak: Scorpio";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// November
			if($bulan == 11)
			{
				if($tanggal >= 1 && $tanggal <= 22)
				{
					echo "Zodiak: Scorpio";
				}
				else if($tanggal >= 23 && $tanggal <= 30)
				{
					echo "Zodiak: Sagitarius";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}

			// Desember
			if($bulan == 12)
			{
				if($tanggal >= 1 && $tanggal <= 20)
				{
					echo "Zodiak: Sagitarius";
				}
				else if($tanggal >= 21 && $tanggal <= 31)
				{
					echo "Zodiak: Capricon";
				}
				else
				{
					echo "Tanggal Tidak Valid!";
				}
			}
		}
		else
		{
			echo "Tanggal atau Bulan Salah!";
		}
	}

	for($i = 1; $i <= 12; ++$i)
	{
		zodiak($i, 25);
		echo "<br>";
	}
 ?>