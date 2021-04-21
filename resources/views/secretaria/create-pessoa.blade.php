@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')
<h1>Cadastro</h1>
@stop

@section('content')
<div class="card">
    <!-- Different Width -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Novo Membro</h3>
        </div>
        <form id="cadastro" action="/pessoas" method="post">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <label for="name">Nome: *</label>
                        <input id="name" name="name" type="text" class=" form-control">
                    </div>
                    <div class="col-4">
                        <label for="cpf">CPF: *</label>
                        <input id="cpf" name="cpf" type="text" class=" form-control cpf-inputmask"
                            placeholder="Clique para inserir">
                    </div>
                    <div class="col-4">
                        <label>Foto 3x4:</label>
                        <div class="col">
                            <label class="custom-file-label" for="foto">Inserir...</label>
                        </div>
                        <input id="foto" name="foto" type="file" class="custom-file-input">
                    </div>
                  <div class="col-4">
                  <label>Nascimento:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                    <div class="col-3">
                        <label for="naturalidade">Naturalidade:</label>
                        <input id="naturalidade" name="naturalidade" type="text" class=" form-control">
                    </div>
                    <div class="col-4">
                        <label for="rg">RG:</label>
                        <input id="rg" name="rg" type="text" class=" form-control">
                    </div>
                    <div class="col-4">
                        <label for="endereco">Endereço:</label>
                        <input id="endereco" name="endereco" type="text" class=" form-control">
                    </div>
                    <div class="col-2">
                        <label for="numero">Número:</label>
                        <input id="numero" name="numero" type="text" class=" form-control">
                    </div>
                    <div class="col-2">
                        <label for="bairro">Bairro:</label>
                        <input id="bairro" name="bairro" type="text" class=" form-control">
                    </div>
                    <div class="col-3">
                        <label for="complemento">Complemento:</label>
                        <input id="complemento" name="complemento" type="text" class=" form-control">
                    </div>
                    <div class="col-4">
                        <label for="cidade">Cidade:</label>
                        <input id="cidade" name="cidade" type="text" class=" form-control">
                    </div>
                    <div class="col-4">
                        <label for="cep">CEP:</label>
                        <input id="cep" name="cep" type="text" class=" form-control">
                    </div>
                    <div class="col-2">
                        <label for="uf">UF:</label>
                        <input id="uf" name="uf" type="text" class=" form-control">
                    </div>
                    <div class="col-4">
                        <label>Sexo: *</label>
                        <select class="select2 form-control custom-select">
                            <optgroup label="Sexo">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-4">
                        <label>Estado Cívil:</label>
                        <select class="select2 form-control custom-select">
                            <optgroup label="Estado Cívil">
                                <option value="M">Solteiro</option>
                                <option value="F">Casado</option>
                                <option value="F">Divorciado</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="row">
                <div class="col">
                        <label for="cono1">Observações:</label>
                        <div class="col-sm-5">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/secretaria" class="btn btn-secondary">cancelar</a>
                </div>
        </form>
        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
          <!-- daterange picker -->
        <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        @stop

        @section('js')
        <!-- jQuery -->
        <script src="{{asset('vendor/adminlte/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- bs-custom-file-input -->
        <script src="{{asset('vendor/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('vendor/adminlte/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('vendor/adminlte/dist/js/demo.js')}}"></script>
        <!-- InputMask -->
        <script src="{{asset('vendor/adminlte/plugins/moment/moment.min.js')}}"></script>
        <!-- date-range-picker -->
        <script src="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('vendor/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <script>
        $(function() {
            bsCustomFileInput.init();
        });
          //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        $('#reservation').daterangepicker()
        </script>
        
        @stop