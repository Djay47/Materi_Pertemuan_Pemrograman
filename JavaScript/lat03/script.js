function zodiak(bulan, tanggal)
{
	let pesan;

	if ((bulan >= 1 && bulan <= 12) && (tanggal >= 1 && tanggal <= 31))
	{
		if (bulan === 1)	// Januari
		{
			if (tanggal >= 1 && tanggal <= 21)
			{
				pesan = 'Zodiak: Capricorn';
			}
			else
			{
				pesan = 'Zodiak : Taurus'
			}
		}
		else if (bulan === 2)	// Februari
		{
			if (tanggal >= 1 && tanggal <= 21)
			{
				pesan = 'Zodiak: Gemini';
			}
			else
			{
				pesan = 'Zodiak: Aquarius';
			}
		}
		else if (bulan === 3)	// Maret
		{
			if (tanggal >= 1 && tanggal <= 21)
			{
				pesan = 'Zodiak: Aries';
			}
			else
			{
				pesan = 'Zodiak: Cancer';
			}
		}
		else
		{
			pesan = 'Zodiak untuk bulan tersebut belum tersedia';
		}
	}
	else
	{
		pesan = 'Bulan atau Tanggal Salah';
	}

	return pesan;
}

function tes(nilai)
{
	// Code...
}

function terbilang(angka)
{
	// Code...
}

function prima(angka)
{
	// Code...
}