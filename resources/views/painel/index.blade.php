@extends('adminlte::page')

@section('title', 'Painel Principal | SistemaAtos')

@section('content_header')
<h1>Painel Principal</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid ">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-3"><i class="fas fa-arrow-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Entradas: <br>555</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-3"><i class="fas fa-arrow-down"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Saidas: <br>-777</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-3"><i class="fas fa-shopping-cart"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Caixa: <br>888</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-3"><i class="fas fa-chart-pie"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Ultimo Mês</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-3"><i class="fas fa-bible"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Eclesiásticos <br>200</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-3"><i class="far fa-address-card"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Membros <br>1500</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-3"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Congregados <br>888</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-3"><i class="fas fa-globe-americas"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">visitantes <br>88</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="card collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Aniversariantes</h3>
                        <!-- card tools -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                                <i class="far fa-calendar-alt"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>John Doe sd fs sdf sd</td>
                                    <td>11-7-2014</td>
                                    <td>Approved</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="card collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Aniversarios de casamento</h3>
                        <!-- card tools -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                                <i class="far fa-calendar-alt"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>John Doe sd fs sdf sd</td>
                                    <td>11-7-2014</td>
                                    <td>Approved</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- Calendar -->
        <div class="card bg-gradient-success">
            <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendario
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item">Add new event</a>
                            <a href="#" class="dropdown-item">Clear events</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">View calendar</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button> -->
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
@stop

@section('css')
<!-- Theme style -->
<link rel="stylesheet" href="/css/admin_custom.css">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/summernote/summernote-bs4.min.css')}}">
@stop

@section('js')
<!-- jQuery -->
<script src="{{asset('vendor/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('vendor/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('vendor/adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('vendor/adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('vendor/adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('vendor/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('vendor/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('vendor/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('vendor/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('vendor/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('vendor/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
@stop
