@extends('adminlte::page')

@section('title', 'Editar | SistemaAtos')

@section('content_header')
<h1>Editar</h1>
@stop

@section('content')
<div class="card">
  <!-- Different Width -->
  <div class="card card-primary">
    <div class="card-header">

      <h3 class="card-title">Editando o usuário - {{ $pessoa->nome }}</h3>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> Erro ao editar <?= $pessoa->nome ?>.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="/secretaria/{{$pessoa->id}}" method="POST">

      @csrf
      @method('PUT')

      <div class="col-12">
        <div class="row">
          <div class="col-4">
            <label for="nome">Nome: *</label>
            <input value="{{ $pessoa->nome }}" name="nome" type="text" class=" form-control">
          </div>
          <!-- phone mask -->
          <div class="col-4">
            <label>Telefone:</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input value="{{ $pessoa->telefone }}" name="telefone" type="text" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask>
            </div>
          </div>
          <!-- /.input group -->
          </>
          <!-- /.form group -->
          <div class="col-4">
            <label for="cpf">CPF: *</label>
            <input value="{{ $pessoa->cpf }}" name="cpf" type="text" class=" form-control cpf-inputmask" placeholder="Clique para inserir">
          </div>
          <!-- <div class="col-4">
                        <label>Foto 3x4:</label>
                        <div class="col">
                            <label class="custom-file-label" for="foto">Inserir...</label>
                        </div>
                        <input id="foto" name="foto" type="file" class="custom-file-input">
                    </div> -->
          <div class="col-4">
            <label>Nascimento:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input value="{{ $pessoa->dataNascimento }}" name="dataNascimento" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <label>Sexo: *</label>
            <select name="sexo" class="select2 form-control custom-select">
              <optgroup label="sexo">
                <option value="{{ $pessoa->masculino }}">Masculino</option>
                <option value="{{ $pessoa->feminino }}">Feminino</option>
              </optgroup>
            </select>
          </div>
          <div class="col-3">
            <label for="naturalidade">Naturalidade:</label>
            <input value="{{ $pessoa->naturalidade }}" name="naturalidade" type="text" class="form-control">
          </div>
          <!-- <div class="col-4">
                        <label for="rg">RG:</label>
                        <input id="rg" name="rg" type="text" class=" form-control">
                    </div> -->
          <div class="col-4">
            <label for="endereco">Endereço:</label>
            <input value="{{ $pessoa->endereco }}" name="endereco" type="text" class="form-control">
          </div>
          <div class="col-2">
            <label for="numeroCasa">Número:</label>
            <input value="{{ $pessoa->numeroCasa }}" name="numeroCasa" type="text" class="form-control">
          </div>
          <div class="col-2">
            <label for="bairro">Bairro:</label>
            <input value="{{ $pessoa->bairro }}" name="bairro" type="text" class="form-control">
          </div>
          <div class="col-3">
            <label for="complemento">Complemento:</label>
            <input value="{{ $pessoa->complemento }}" name="complemento" type="text" class="form-control">
          </div>
          <div class="col-4">
            <label for="cidade">Cidade:</label>
            <input value="{{ $pessoa->cidade }}" name="cidade" type="text" class="form-control">
          </div>
          <div class="col-4">
            <label for="cep">CEP:</label>
            <input value="{{ $pessoa->cep }}" name="cep" type="text" class="form-control">
          </div>
          <div class="col-2">
            <label for="uf">UF:</label>
            <input value="{{ $pessoa->uf }}" name="uf" type="text" class="form-control">
          </div>
          <div class="col-4">
            <label>Estado Cívil:</label>
            <select name="estadocivil" class="select2 form-control custom-select">
              <optgroup label="estadocivil">
                <option value="{{ $pessoa->solteiro }}">Solteiro</option>
                <option value="{{ $pessoa->casado }}">Casado</option>
                <option value="{{ $pessoa->divorciado }}">Divorciado</option>
              </optgroup>
            </select>
          </div>
          <div class="col-4">
            <label>Estado do membro:</label>
            <select name="estadoMem" class="select2 form-control custom-select">
              <optgroup label="Estado do membro">
                <option value="{{ $pessoa->ativo }}">Ativo</option>
                <option value="{{ $pessoa->inativo }}">Inativo</option>
              </optgroup>
            </select>
          </div>
          <div class="col">
            <label for="cono1">Observações:</label>
            <div value="{{ $pessoa->observacoes }}" name="observacoes" class="col-sm-5">
              <textarea class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="card-body">
          <button type="submit" class="btn btn-primary">Editar</button>
          <a href="/secretaria" class="btn btn-secondary">Cancelar</a>
        </div>
      </div>
  </div>
  </form>
</div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- daterange picker -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
@stop

@section('js')
<!-- jQuery -->
<script src="{{asset('vendor/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('vendor/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
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
