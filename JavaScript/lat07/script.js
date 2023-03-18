let bilGanjil = [1, 3, 5, 7, 9];

let trKali = document.querySelector('.kali');
trKali.innerHTML = '<td>B. Ganjil * 2</td>';

bilGanjil.map( num => {
	trKali.innerHTML += `<td>${kali(num)}</td>`;
});

let trTambah = document.querySelector('.tambah');
trTambah.innerHTML = '<td>B. Ganjil + 2</td>'

bilGanjil.map( num => {
	trTambah.innerHTML += `<td>${num + 2}</td>`;
});

let tblSiswa = document.querySelector('.siswa');

let siswa = [
	{ nama: 'Adi Jaya',  kelas: 'RPL', sekolah: 'SMENDA' },
	{ nama: 'Jun Mayaka',  kelas: 'RPL', sekolah: 'SMENDA' },
	{ nama: 'Cormoran Strike',  kelas: 'RPL', sekolah: 'SMENDA' }
];

// console.log(siswa);
// let namaSiswa = siswa.map(data => data['nama']);
// console.log(namaSiswa);

siswa.map(data => {
	tblSiswa.innerHTML += `<tr>
							<td>${data['nama']}</td>
							<td>${data['kelas']}</td>
							<td>${data['sekolah']}</td>
						</tr>`;
});

function kali(num)
{
	return num * 2;
}