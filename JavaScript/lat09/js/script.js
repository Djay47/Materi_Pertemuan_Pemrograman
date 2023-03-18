$(document).ready(function() {
	selectData()

	function selectData()
	{
		$.ajax({
			type 		: "get",
			url		  	: "https://dummyjson.com/products",
			dataType	: "json",
			
			success		: function(response) {
				let data = response.products;
				// console.log(data);
				
				let no = 1;
				let tbody = ``;
				
				// $.each(data, function(key, value) {
				// 	// console.log(value);
					
				// 	tbody += `<tr>
				// 				<td>${no++}</td>
				// 				<td>${value.title}</td>
				// 				<td>${value.description}</td>
				// 			</tr>`;
				// });

				// data.map( value => {
				// 	// console.log(value);
				// 	tbody += `<tr>
				// 				<td>${no++}</td>
				// 				<td>${value.title}</td>
				// 				<td>${value.description}</td>
				// 			</tr>`;
				// });

				data.forEach( value => {
					// console.log(value);
					tbody += `<tr>
								<td>${no++}</td>
								<td>${value.title}</td>
								<td>${value.description}</td>
							</tr>`;
				});

				$('table > tbody').html(tbody);
			}
		});
	}
});