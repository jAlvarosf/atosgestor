@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
<h1>Editar</h1>
@stop

@section('content')
<div class="card">
  <!-- Different Width -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Editar Pessoa</h3>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> Erro ao editar <?=$pessoas->nome?>.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('secretaria.update', $pessoas->id) }}" method="POST">
        @csrf
        @method('PUT')

      <div class="col-12">
        <div class="row">
          <div class="col-4">
            <label for="nome">Nome: *</label>
            <input value="{{ $pessoas->name }}" name="nome" type="text" class=" form-control">
          </div>
          <!-- phone mask -->
          <div class="col-4">
            <label>Telefone:</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input value="{{ $pessoas->telefone }}"name="telefone" type="text" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask>
            </div>
          </div>
          <!-- /.input group -->
          </>
          <!-- /.form group -->
          <div class="col-4">
            <label for="cpf">CPF: *</label>
            <input value="{{ $pessoas->cpf }}" name="cpf" type="text" class=" form-control cpf-inputmask" placeholder="Clique para inserir">
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
              <input value="{{ $pessoas->dataNascimento }}" name="dataNascimento" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <label>Sexo: *</label>
            <select name="sexo" class="select2 form-control custom-select">
              <optgroup label="sexo">
                <option value="{{ $pessoas->masculino }}">Masculino</option>
                <option value="{{ $pessoas->feminino }}">Feminino</option>
              </optgroup>
            </select>
          </div>
          <div class="col-3">
            <label for="naturalidade">Naturalidade:</label>
            <input value="{{ $pessoas->naturalidade }}" name="naturalidade" type="text" class="form-control">
          </div>
          <!-- <div class="col-4">
                        <label for="rg">RG:</label>
                        <input id="rg" name="rg" type="text" class=" form-control">
                    </div> -->
          <div class="col-4">
            <label for="endereco">Endereço:</label>
            <input value="{{ $pessoas->endereco }}" name="endereco" type="text" class="form-control">
          </div>
          <div class="col-2">
            <label for="numerocasa">Número:</label>
            <input value="{{ $pessoas->numerocasa }}" name="numeroCasa" type="text" class="form-control">
          </div>
          <div class="col-2">
            <label for="bairro">Bairro:</label>
            <input value="{{ $pessoas->bairro }}" name="bairro" type="text" class="form-control">
          </div>
          <div class="col-3">
            <label for="complemento">Complemento:</label>
            <input value="{{ $pessoas->complemento }}" name="complemento" type="text" class="form-control">
          </div>
          <div class="col-4">
            <label for="cidade">Cidade:</label>
            <input value="{{ $pessoas->cidade }}" name="cidade" type="text" class="form-control">
          </div>
          <div class="col-4">
            <label for="cep">CEP:</label>
            <input value="{{ $pessoas->cep }}" name="cep" type="text" class="form-control">
          </div>
          <div class="col-2">
            <label for="uf">UF:</label>
            <input value="{{ $pessoas->uf }}" name="uf" type="text" class="form-control">
          </div>
          <div class="col-4">
            <label>Estado Cívil:</label>
            <select name="estadocivil" class="select2 form-control custom-select">
              <optgroup label="estadocivil">
                <option value="{{ $pessoas->solteiro }}">Solteiro</option>
                <option value="{{ $pessoas->casado }}">Casado</option>
                <option value="{{ $pessoas->divorciado }}">Divorciado</option>
              </optgroup>
            </select>
          </div>
          <div class="col-4">
            <label>Estado do membro:</label>
            <select name="estadoMem" class="select2 form-control custom-select">
              <optgroup label="estadoMem">
                <option value="{{ $pessoas->ativo }}">Ativo</option>
                <option value="{{ $pessoas->inativo }}">Inativo</option>
              </optgroup>
            </select>
          </div>
          <div class="col">
            <label for="cono1">Observações:</label>
            <div value="{{ $pessoas->observacoes }}"name="observacoes" class="col-sm-5">
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