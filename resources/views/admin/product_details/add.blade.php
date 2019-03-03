@extends('layout.masterAdmin')
@yield('CssAdmin')
@section('contentAdmin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sản phẩm
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm chi tiết</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">

                        <div class="box-body" style="padding-left: 86px;padding-right: 0px;">

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Màu sắc</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Giảm giá</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <label>Sản phẩm - ID</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <div class="col-md-12">
                                <div>
                                    <button type="submit" class="btn btn-success pull-right">Thêm</button>
                                    <a href="#"><label class="btn btn-default pull-right">Trở về</label></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
                <!-- general form elements disabled -->
                <!-- /.box -->
            </div>
        </section>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

            <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->

            </section></div>
    </div>
@endsection