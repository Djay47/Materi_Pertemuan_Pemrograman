// for (let i = 1; i <= 10; ++i)
// {
// 	document.querySelector('p').innerHTML += `<p>${i}</p>`;
// }

// let isi = document.querySelector('#isi');

// isi.innerHTML = '<h1>Soto</h1>';
// isi.innerHTML += '<p>Deskripsi Soto</p>';
// isi.innerHTML += '<img src="image/bakwan.jpg">';

// isi.innerHTML += '<h1>Tahu Isi</h1>';
// isi.innerHTML += '<p>Deskripsi Tahu Isi</p>';
// isi.innerHTML += '<img src="image/tahu-isi.jpg">';

// Cara pertama
/*
let table = document.querySelector('table');
table.innerHTML = '<tr>' + '<th>Nomor</th>' + '</tr>';
table.innerHTML += '<tr>' + '<td>1</td>' + '</tr>';
table.innerHTML += '<tr>' + '<td>2</td>' + '</tr>';
table.innerHTML += '<tr>' + '<td>3</td>' + '</tr>';
table.innerHTML += '<tr>' + '<td>4</td>' + '</tr>';
table.innerHTML += '<tr>' + '<td>5</td>' + '</tr>';
*/

// Menggunakan Pengulangan
let table = document.querySelector('table');
table.innerHTML = `<tr><th>Nomor</th></tr>`;
for (let i = 1; i <= 5; ++i)
{
	table.innerHTML += `<tr><td>${i}</td></tr>`;
}





