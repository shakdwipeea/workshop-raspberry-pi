

<!DOCTYPE html>
<html>
<head>
	<title>Workshop</title>
</head>
<body>
	<div id="content"></div>

	<script type="text/javascript" src="./bower_components/axios/dist/axios.js"></script>
	<script type="text/javascript" src="./bower_components/handlebars/handlebars.js"></script>

	<script id="table-html" type="text/x-handlebars-template">
		<table>
			<tr>
				<th>id</th>
				<th>value</th>
			</tr>
			{{#each row}}
			<tr>
				<th> {{this.id}} </th>
				<th> {{this.value}} </th>
			</tr>
			{{/each}}
		</table>
	</script>

	<script type="text/javascript">
		function getData () {
			var source = document.querySelector('#table-html').innerHTML;
			var template = Handlebars.compile(source);

			axios.get('/workshop/data.php')
				.then(function  (response) {
					console.log(response);
					/*var html = template({
						row: response.data
					});*/

					var value = false;
					if (response.data[0].value === "1") {
						value = true;
					};

					console.log(response.data.value);
					document.getElementById('content').innerHTML = value;
				})
				.catch(function  (reason) {
					console.log(reason);
				});
		}

		getData();

		setInterval(function () {
			getData();
		}, 1000);
	</script>
</body>
</html>