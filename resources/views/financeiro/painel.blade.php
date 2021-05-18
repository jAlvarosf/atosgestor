@extends('adminlte::page')

@section('title', 'Financeiro - SistemaAtos')

@section('content_header')
<h1>Painel Financeiro</h1>
@stop

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total de Entradas</span>
                        <span class="info-box-number">

                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total de Saidas</span>
                        <span class="info-box-number">

                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total em Caixa</span>
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
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span>Saldo em Caixa</span>
                                <span class="text-bold text-lg">$18,230.00</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">Em comparação ao anterior</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="167"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> Entradas
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Saidas
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Ultimos Movimentos</h3>
                        <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{asset('vendor/adminlte/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Some Product
                                    </td>
                                    <td>$13 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            12%
                                        </small>
                                        12,000 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('vendor/adminlte/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Another Product
                                    </td>
                                    <td>$29 USD</td>
                                    <td>
                                        <small class="text-warning mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            0.5%
                                        </small>
                                        123,234 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('vendor/adminlte/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Amazing Product
                                    </td>
                                    <td>$1,230 USD</td>
                                    <td>
                                        <small class="text-danger mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            3%
                                        </small>
                                        198 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('vendor/adminlte/dist/img/default-150x150.png')}}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Perfect Item
                                        <span class="badge bg-danger">NEW</span>
                                    </td>
                                    <td>$199 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            63%
                                        </small>
                                        87 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.card -->
</div>
@stop

@section('css')
<!-- Theme style -->
<link rel="stylesheet" href="/css/admin_custom.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- IonIcons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
@stop

@section('js')

<!-- jQuery -->
<script src="{{asset('vendor/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('vendor/adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('vendor/adminlte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('vendor/adminlte/dist/js/dashboard3.js')}}"></script>
<!-- Page specific script -->
@stop