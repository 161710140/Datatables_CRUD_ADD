@extends('layouts.a')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
                <div class="card-header"><center><h3><b>Data Nama orang</div></center></h3></b>
                <br>
                </center> 
                <div class="card-body">
                    <table class="table table-striped" id='table'>
                        <thead>
                        <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Lahir</th>
                        </tr>
                    
                        </thead>
                        </table>
                        <center>
                            <button id="myBtn" class="active btn btn-primary glyphicon glyphicon-plus" data-toogle="modal" data-target="#myModal">Tambah</button>
                        </center>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
          <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class=""></span> Tambah Data</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>Nama</label>
              <input id="nama" type="text" class="form-control" id="usrname" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Tanggal Lahir</label>
              <input id="lahir"type="text" class="form-control" id="psw" placeholder="Enter Lahir">
            </div>
              <button id="btn" type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
<script type="text/javascript" src="{{asset('js/jquesy.js')}}"> </script>
@push('scripts')
<script>
    $(document).ready(function(){

        $("#table").DataTable({
            processing:true,
            serverSide:true,
            ajax:'/user/json',
            columns:[
            {data: 'id',name: 'id'},
            {data: 'Nama',name: 'Nama'},
            {data: 'Lahir',name: 'Lahir'},
            ]
        });
        $("#myBtn").click(function(){
            $("#myModal").modal();
    });
        $("#btn").click(function(){
            var name = $("#nama").val();
            var tanggal =$("#lahir").val();
            $.ajax({
                url : "{{ route('table.store') }}",
                method:'POST',
                data:{
                        Nama:$nama,
                        Lahir:$nama
                    },
                   success:function(data){
                       alert(data);
                   }
            });
        });
});
</script>
@endpush
@endsection