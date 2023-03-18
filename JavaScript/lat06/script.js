// ---------- Array ---------- //

let buah = ['Mangga', 'Jambu', 'Jeruk', 'Duren', 'Apel'];

// console.log(buah);
// buah.forEach(item => console.log(`Buah ${item}`));

document.querySelector('#buah').innerHTML = '<h1>Daftar Buah</h1>';

buah.forEach(item => {
	document.querySelector('#buah').innerHTML += `<p>${item}</p>` ;
});



// ---------- OBject ---------- //

let siswa = [
	{ nama : 'Adi Jaya',  kelas : 'RPL', sekolah : 'SMENDA' },
	{ nama : 'Jun Mayaka',  kelas : 'RPL', sekolah : 'SMENDA' }
];

// console.log(siswa);

// console.log(`Nama: ${siswa[0].nama} | Kelas: ${siswa[0].kelas} | Sekolah: ${siswa[0].sekolah}`);
// console.log(`Nama: ${siswa[1].nama} | Kelas: ${siswa[1].kelas} | Sekolah: ${siswa[1].sekolah}`);

/*
siswa.forEach(item => {
	console.log(`Nama: ${item.nama} | Kelas: ${item.kelas} | Sekolah: ${item.sekolah}`);
});
*/

/*
document.querySelector('#siswa').innerHTML = '<h1>Siswa</h1>';

siswa.forEach(item => {
	document.querySelector('#siswa').innerHTML += `<p>Nama: ${item.nama} <br> kelas: ${item.kelas} <br> Sekolah: ${item.sekolah}</p>` ;
});
*/



// ---------- JSON ---------- //

let siswa2 = [
	{ "nama" : "Adi Jaya",  "kelas" : "RPL", "sekolah" : "SMENDA" },
	{ "nama" : "Jun Mayaka",  "kelas" : "RPL", "sekolah" : "SMENDA" }
];

console.log(siswa2);

let myJSON = JSON.stringify(siswa2);
console.log(myJSON);

/*
siswa.forEach(item => {
	console.log(`Nama: ${item.nama} | Kelas: ${item.kelas} | Sekolah: ${item.sekolah}`);
});
*/

document.querySelector('#siswa').innerHTML = '<h1>Siswa</h1>';

siswa2.forEach(item => {
	document.querySelector('#siswa').innerHTML += `<p>Nama: ${item.nama} <br> kelas: ${item.kelas} <br> Sekolah: ${item.sekolah}</p>` ;
});
