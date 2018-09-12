<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
</head>
<body>
<div class="col-md-6">
  <div class="panel-group"></div>
  <div class="panel panel-primary">
      <div class="panel-heading">Array</div>
      <div class="panel-body">
      <form>
      <div class="form-group">
      <h4><center>Array Each Sederhana</h4></center>
      <label for="pwd">Array 1</label>
      </form>
      <br>
      <i id ='array1'></i>
      </div>
      <button class='btn btn-primary' type='submit' id='simpan'>Lihat</button>
      <form>
      <div class="form-group">
      <br>
      <label for="pwd">Array 2</label>
      </form>
      <br>
      <i id ='array2'></i>
      <i id ='array3'></i>
      </div>
      <button class='btn btn-primary' type='submit' id='simpan2'>Lihat</button> 
      <br>
      <h4><center>Perhitungan otomatis</h4></center>
      <label for="pwd">Angka ke 1</label>
      <input type="text" class="form-control jumlah"   placeholder="Insert a number">
      <label for="pwd">Angka ke 2</label>
      <input type="text" class="form-control jumlah"  placeholder="Insert a number">
      <label for="pwd">Total</label>
      <input type="text" class="form-control" readonly id="total_amount">     
<script type="text/javascript" src="{{asset('js/jquesy.js')}}"> </script>
<script type="text/javascript" src="{{asset('js/a.js')}}"> </script>
<script>
$(document).ready(function(){
    //array1
    $('#simpan').click(function(){
        var array = ['1','2 ','3','4','5','6','7'];
           $.each(array,function(index,obj)
           {
               $('#array1').text("Array ke : "+index+" Nilainya =  "+obj);
           });
        
        });
        //array2
        $('#simpan2').click(function(){
          var array2 =
          [
              {"Nama":"aA","Belakang":"Bb"},
              {"Nama":"Rastian","Belakang":"Fajar"},    
              
          ];
              $.each(array2,function(index,obj){
                 $('#array2').text("Nama saya adalah "+obj.Nama+" dan Nama belakang saya adalah "+obj.Belakang);
                 console.log("Nama saya adalah "+obj.Nama+" dan Nama belakang saya adalah "+obj.Belakang);
              });
          });
          //perhitungan otomatis
          $('.jumlah').mask('#,###,###,###,###.00', {reverse : true});   
        var ttl = function () {

            var sum = 0;

            $('.jumlah').each(function(){
                var num = $(this).val().replace(',','');
                if(num != 0){
                    sum += parseFloat(num);
                }
            });
            $('#total_amount').val(sum);
        }
        $('.jumlah').keyup(function(){
            ttl();
        });

    }); 

</script>
</body>
</html>
