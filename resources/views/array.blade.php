<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-6">
  <div class="panel-group"></div>
  <div class="panel panel-primary">
      <div class="panel-heading">Push And Delete</div>
      <div class="panel-body">
      <form>
      <h3><center> Array1 </center></h3>
      <div class="form-group">
      <input type="text" class="form-control" id='pg' placeholder="Insert a character">
</form>
</div>
<button class='btn btn-primary' type='submit' onclick='add()'>Push</button>
<button class='btn btn-warning' type='submit' onclick='searchanddelete()'>Search and delete</button>
<br>
Hasil
<i id ='haha'> </i>
<h3><center> Array2 </center></h3>
<input type="text" class="form-control" id='a' placeholder="Insert a character">
<br>
<button class='btn btn-primary' type='submit' onclick='add2()'>Add</button>
<br>
  <table id ='baris' class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id ='table'></td>  
        <td><button class ='btn btn-danger' type='reset' onclick='searchanddelete2()'>Delete</button></td>  
      </tr>
      <tr>
    </tbody>
  </table>
<script type="text/javascript" src="{{asset('js/jquesy.js')}}"> </script>
<script type="text/javascript" language='javascript'>
var array = [];
function add() {
    var text = document.getElementById('pg').value;
    array.push(text);
    console.log(text);
    document.getElementById('haha').innerHTML = array;
        
}
function searchanddelete() {
    var text2 = document.getElementById('pg').value;

    var index = array.indexOf(text2);

    if(index !== -1){
        array.splice(index,1);
        document.getElementById('haha').innerHTML = array;
        alert('Berhasil Menghapus');
    }    
    else {
        alert('Tidak Ada Data')
    }
}
var array1 = [];
function add2() {
    var isi= $ ('#a').val();
    var baris ="<tr><td>"+isi+"</td></tr>"
    $('#table').append(baris);    
    array1.push(isi);
    console.log(isi);
}
    function searchanddelete2() {
    var text2 = document.getElementById('a').value;

    var index = array1.indexOf(text2);

    if(index !== -1){
        array1.splice(index,1);
        document.getElementById('table').innerHTML = array1;
        alert('Berhasil Menghapus');
    }    
    else {  
            alert('Tidak Ada Data')
    }
}
   </script>
</body>
</html>