// document.querySelector('#paragraf').innerHTML = 'Hello World';
// document.querySelector('#content').innerHTML = '<h1>Ganti Isi</h2>';

let bulan = 4;
let tanggal = 15;
let pesan = 'Bulan atau tanggal salah';

/*
if ((bulan >= 1 && bulan <= 12) && (tanggal >= 1 && tanggal <= 31))
{
	console.log('Bulan $ Tanggal benar');
}
else
{
	console.log('Bulan atau Tanggal salah');
}
*/

if ((bulan >= 1 && bulan <= 12) && (tanggal >= 1 && tanggal <= 31))
{
	if (bulan === 1)
	{
		if (tanggal >= 1 && tanggal <= 21)
		{
			pesan = 'Zodiak: Sagitarius';
		}
		else
		{
			pesan = 'Zodiak: Taurus';
		}
	} 
	else if (bulan === 2)
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
	else if (bulan === 3)
	{
		if (tanggal >= 1 && tanggal <= 21)
		{
			pesan = 'Zodiak: Capricorn';
		}
		else
		{
			pesan = 'Zodiak: Aries';
		}
	}
	else if (bulan === 4)
	{
		if (tanggal >= 1 && tanggal <= 21)
		{
			pesan = 'Zodiak: Cancer';
		}
		else
		{
			pesan = 'Zodiak: Virgo';
		}
	}
	else if (bulan === 5)
	{
		if (tanggal >= 1 && tanggal <= 21)
		{
			pesan = 'Zodiak: Libra';
		}
		else
		{
			pesan = 'Zodiak: Leo';
		}
	}
	else
	{
		pesan = 'Deskripsi zodiak untuk bulan 6 - 12 belum tersedia';
	}
}

// console.log(pesan);
document.querySelector('#content').innerHTML = `<h1>${pesan}</h1>`;
