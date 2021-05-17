@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
<h1>Secretaria</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Receitas</h3>
    <input type="button" value="Doação" style="float: right;">
    <input type="button" value="Oferta" style="float: right;">
    <input type="button" value="Dizimo" style="float: right;">
  </div>
</div>
</div>
<!-- /.card-header -->
<div class="card-body">
  <table id="receitas" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Data</th>
        <th>Descreição</th>
        <th>Vinculo</th>
        <th>Origem</th>
        <th>Valor</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th></th>
        <td>
          <form action="" method="POST">
            <a class="btn btn-info btn-sm" href="">
              <i class="fas fa-pencil-alt"></i>
            </a>

            <!-- @csrf
              @method('DELETE') -->

            <button type="submit" title="delete" class="btn btn-danger btn-sm">
              <i class="fas fa-trash"></i>

            </button>
          </form>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@stop

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('vendor/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<!-- Page specific script -->
<script>
  $(function() {
    $("#receitas").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": true,
      "buttons": ["colvis", "pdf"]
    }).buttons().container().appendTo('receitas_wrapper .col-md-6:eq(0)');
  });
</script>
@stop