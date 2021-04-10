@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar Pessoa</h1>
@stop

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Editar Pessoa                   
                      <a class="btn btn-info btn-sm" href="/secretaria/secretaria.index">
                      <i class="fas fa-angle-double-left"></i>
                            </i>
                        </a>
                </h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
              <!-- /.card-body -->
              
            </div>
            
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop