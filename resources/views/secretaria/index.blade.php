@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
<h1>Secretaria</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Lista de Cadastrados</h3>
    <div class="text-right">
      <a class="btn btn-primary btn-sm" href="secretaria/create">
        <i class="fas fa-folder">
        </i>
        Novo Cadastro
      </a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="pessoas" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Nascido</th>
          <th>Telefone</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pessoas as $pessoa)
        <tr>
          <td>{{$pessoa->id}}</td>
          <td>{{$pessoa->nome}}</td>
          <td>{{$pessoa->dataNascimento}}</td>
          <td>{{$pessoa->telefone}}</td>
          <td>
            <form action="{{ route ('secretaria.destroy',$pessoa->id)}}" method="POST">

              <a class="btn btn-info btn-sm" href="/secretaria/{{ $pessoa->id }}/edit">
                <i class="fas fa-pencil-alt"></i>
              </a>

              @csrf
              @method('DELETE')

              <button type="submit" title="delete" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>

              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
@stop

@section('css')
<!-- Theme style -->
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
    $("#pessoas").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": true,
      "buttons": ["colvis", "pdf"]
    }).buttons().container().appendTo('#pessoas_wrapper .col-md-6:eq(0)');
  });
</script>
@stop