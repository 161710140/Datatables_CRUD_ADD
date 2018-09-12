<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<style type="text/css">
		input[type='submit'], button, [
		aria-label]{
			cursor: pointer;
		}
	</style>
	<form action="javascript:void(0);" method="POST" onsubmit="app.Add()">
		<input type="text" id="add-name">
		<input type="submit" value="Add">
	</form>
	<p id="counter"></p>
	<table border="1">
		<tr>
			<th>Nama Negara</th>
		</tr>
		<tbody id="countries">
		</tbody>
	</table>
<script type="text/javascript" src="{{asset('js/jquesy.js')}}"> </script>
<script type="text/javascript">
	var app = new function() {
		this.el =
		document.getElementById('countries');
		this.countries = [];
		this.Count = function(data) {
			var el =
			document.getElementById('counter');
			var name = '.Negara';
			if (data) {
				if (data > 1) {
					name = '.Negara';
				}
				el.innerHTML = data +'' + name;
			} else{
				el.innerHTML = 'No' + name;
			}
			};
			this.FetchAll = function() {
				var data = '';
				if (this.countries.length > 0) {
					for(var i = 0;i < this.countries.length; i++){
						data += '<tr>';
						data += '<td>' + this.countries[i]+ '</td>';
						data += '</tr>';
					}
				}
				this.Count(this.countries.length);
				return this.el.innerHTML = data;
			};
			this.Add = function () {
				el = document.getElementById('add-name');

				var Negara = el.value;
				if (Negara) {

					this.countries.push(Negara.trim());

					el.value = '';

					this.FetchAll();
				}
			};
		}
</script>
</body>
</html>