@extends('adminlte::page')

@section('title', 'Lista de Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de Cadastrados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Telefone</th>
                    <th>Estatus</th>
                    <th>                    
                        <a class="btn btn-primary btn-sm" href="/secretaria/secretaria.create-pessoa">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                        </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><?= 'Nome'?></td>
                    <td><?= 'Data de nascimento'?></td>
                    <td><?= 'Telefone'?></td>
                    <td><?= 'Estatus'?></td>
                    <td>        
                      <a class="btn btn-info btn-sm" href="/secretaria/secretaria.edit-pessoa">
                            <i class="fas fa-pencil-alt">
                            </i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="/secretaria/deletar-pessoa">
                            <i class="fas fa-trash">
                            </i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>telefone</th>
                    <th>Estatus</th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@stop

@section('js')
<script> console.log('Hi!'); </script>
<!-- DataTables  & Plugins -->
<script src="{{asset('vendor/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,
      "buttons": ["pdf", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@stop