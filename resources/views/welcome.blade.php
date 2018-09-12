<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><center>Table Pembelian Ticket</h2></center>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Tribun</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tribun Barat</td>
        <td>65000</td>
      </tr>
      <tr>
        <td>Tribun Utara</td>
        <td>75000</td>
      </tr>
      <tr>
        <td>Tribun Selatan</td>
        <td>85000</td>
      </tr>
      <tr>
        <td>Tribun Timur</td>
        <td>95000</td>
      </tr>
      <tr>
        <td>Tribun VIP</td>
        <td>120000</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<br>
<br>
<div class="col-md-6">
  <div class="panel-group"></div>
  <div class="panel panel-primary">
      <div class="panel-heading">Data Pembelian Ticket</div>
      <div class="panel-body">
      <form>
      <div class="form-group">
      <label for="pwd">Jumlah Ticket</label>
      <input type="number" class="form-control" id="tix">
    </div>
    <div class="form-group">
      <label for="usr">Nama Tribun</label>
      <Select id='select' class="form-control">
      <option value='Tribun Utara'>Tribun Utara</option>
      <option value ='Tribun Selatan'>Tribun Selatan</option>
      <option value ='Tribun Barat'>Tribun Barat</option>
      <option value ='Tribun Timur'>Tribun Timur</option>
      <option value ='Tribun VIP'>Tribun VIP</option>
    </div>
    </select>
    <label for="usr">Status</label>
    <Select id='select2' class="form-control">
    <option value='Member'>Member</option>
    <option value='Guest'>Guest</option>
    </select>
    </form>
</div>
&nbsp<button class="btn btn-primary" type='submit' id='simpan'>Submit</button>
<br>
<br>
<i>Jika status anda adalah sebagai member pembelian ticket lebih dari 3 akan dikenakan discount 20%</i>
      </div>
    </div>
    </div>
    <br>
    <div class="col-md-6">
  <div class="panel-group">
  <div class="panel panel-success">
      <div class="panel-heading">Data Pembelian Ticket</div>
      <div class="panel-body">
      <b>Jumlah Tiket</b> :
      <i><b id='jmlhtix'> </b></i>
      <br>
      <br>
      <b>Nama Tribun</b> :
      <i><b id='namtri'> </b></i>
      <br>
      <br>
      <b>Harga</b> :
      <i><b id='Harga'> </b></i>
      <br>
      <br>
      <b>Diskon</b> :
      <i><b id='disc'> </b></i>
      <br>
      <br>
      <b>Status</b> :
      <i><b id='Mmbr'> </b></i>
      <br>
      <br>
      <b>Total Harga</b>:
      <i><b id='ttl'> </b></i>
      <br>
      <br>
      &nbsp<input type="button" class="btn btn-danger" id='reset' value="Reset Form" onClick="this.form.reset()" />
      </div>
    </div>
    <script type="text/javascript" src="js/jquesy.js"> </script>
    <script>
    $(document).ready(function(){
      $('#reset').click(function(){
        $('#jmlhtix').text('');
        $('#namtri').text('');
        $('#Harga').text('');
        $('#disc').text('');
        $('#ttl').text('');
      });
        $('#simpan').click(function(){
            var jmlh=$('#tix').val();
            var Select=$('#select').val();
            var Select2=$('#select2').val();
            $('#Mmbr').text(Select2);
            $('#jmlhtix').text(jmlh);
        $('#namtri').text(Select);
        switch(true)
        {
            case Select =='Tribun Barat':
            var tribun= 65000;
            break;
            case Select =='Tribun Utara':
            var tribun= 75000;
            break;
            case Select =='Tribun Selatan':
            var tribun= 85000;
            break;
            case Select =='Tribun Timur':
            var tribun= 95000;
            break;
            case Select =='Tribun VIP':
            var tribun= 120000;
            case Select2 =='Member':
            break;
            case Select2 =='Guest':

        }
        $('#Harga').text(tribun);
        var discount = 20;
        
        if(Select2 == 'Member' && jmlh > 3){
            $('#disc').text('20%');
            var awal = (parseInt(tribun)*parseInt(jmlh));
            var total =(parseInt(tribun)*parseInt(jmlh)*discount/100);
            var disc = (parseInt(awal)-parseInt(total));
            $('#ttl').text(disc);       
        }
        else if(Select2 == 'Member' && jmlh <=3){
            $('#disc').text('_');
            var total =(parseInt(tribun)*parseInt(jmlh));
            $('#ttl').text(total)
        }
        if(Select2 == 'Guest' ){
            $('#disc').text('_');
            var total =(parseInt(tribun)*parseInt(jmlh));
            $('#ttl').text(total)
        }
      });

        
    });
</script>
  </body>
</html>
