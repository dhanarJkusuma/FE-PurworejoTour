@extends('admin.layout')

@section('ex_css')
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .map-group
      {
        width: 100%;
        overflow: hidden;
        height: 400px
      }
      #map {
        height: 400px;
        overflow: overflow-y;
      }
    </style>
@endsection

@section('judul')
  Lihat Konten
@endsection

@section('konten')
  
@if(Session::get('berhasil') != null)
<div class="col-md-12 col-xs-12">
  <div class="callout callout-success">
    <h4>Notifikasi</h4>
    <p>{{ Session::get('berhasil') }} </p>
  </div>
</div>
@endif

@if(Session::get('error') != null)
<div class="col-md-12 col-xs-12">
  <div class="callout callout-danger">
    <h4>Error</h4>
    <p>{{ Session::get('error') }} </p>
  </div>
</div>
@endif

<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Wisata</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Nomor</th>
          <th>Judul</th>
          <th>Thumbnail</th>
          <th>Dibuat</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
         
        
        </tfoot>
      </table>
      
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>

<div id="hapusDialog" class="modal fade" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form id="delete-form" action="{{ url('wisata/hapus') }}" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Dialog Notifikasi</h4>
      </div>
      <div class="modal-body">
        <div class="box-body">
            Hapus data ?
            {{ csrf_field() }}
            <input type="hidden" id="id_delete" name="id" />
           
        </div><!-- /.box-body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-default pull-right">Ya</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection

@section('script')

<script>
    
  $('#menuWisata').addClass('active');
  $('#lihatWisata').addClass('active');


    $('body').delegate('.hapusDialog','click',function(){
        var id = $(this).data('id');
        $('#id_delete').val(id);
    });

    $(function () {
      $('#example2').DataTable({
        "ajax": '{{ url('wisata/lihat/json') }}',
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "columns": [
            { "data": "nomer" },
            { "data": "judul_konten" },
            { "data": "gambar" },
            { "data": "created_at" },
            { "data": "action" }
            ]
      });
    });
</script>
@endsection