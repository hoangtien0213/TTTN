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
                        <h3 class="box-title">Thêm hình ảnh</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">

                        <div class="box-body" style="padding-left: 86px;padding-right: 0px;">

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="inputEmail3">Titel</label>
                                    <div >
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                            <input type="text" class="form-control">

                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Alt</label>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-share-alt"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="inputEmail3">Slug</label>

                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-gg"></i></span>
                                            <input type="text" class="form-control">

                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Sản phẩm - ID</label>

                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa  fa-opencart"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <div class="col-md-12">
                                <div>
                                    <button type="submit" class="btn btn-success pull-right">Cập nhật</button>
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