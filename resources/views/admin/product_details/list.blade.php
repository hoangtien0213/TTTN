@extends('layout.masterAdmin')
@yield('CssAdmin')
@section('contentAdmin')
    <!-- Content Wrapper. Contains page content -->
@section('PageCss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{URL('/')}}/AdminTemp/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@yield('PageCss')
<style>

    #tr-checkbox1 {
        margin-left: 0px;
        right: -5px;
        margin-top: -5px;

    }
    #selectAll{ margin-left: 0px;
        right: -5px;
        margin-top: -16px;}


</style>
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
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->

                <div class="box">
                    <div class="box-header" style="padding-bottom: 0px;">
                        <div class="col-md-10" style="
    padding-left: 0px;">
                            <h3 class="box-title">Chi tiết sản phẩm: Tên sản phẩm</h3>
                        </div>
                        <div class="col-md-2" style="padding-left: 37px;"> <a href="{{route('details/add')}}"><button class="btn btn-info" title="Edit"><i class="fa fa-user-plus">Thêm chi tiết</i></button></a></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                            <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 14px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Tên sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 160px;">Màu sắc</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 50px;">Giảm giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Hành động</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">1</td>
                                            <td>Sam Sung Galaxy S9+</td>
                                            <td>Đen</td>
                                            <td>7000000</td>
                                            <td>0</td>
                                            <td>
                                                <a href="{{route('details/edit')}}"><button class="btn btn-link" title="Edit"><i class="fa fa-pencil"></i></button></a>
                                                <a href="#"><button  class="btn btn-link" title="Delete"><i class="fa  fa-trash"></i> </button></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                           <td class="sorting_1">1</td>
                                            <td>Sam Sung Galaxy S9+</td>
                                            <td>Trắng</td>
                                            <td>8000000</td>
                                            <td>0</td>
                                            <td>
                                                <a href="{{route('details/edit')}}"><button class="btn btn-link" title="Edit"><i class="fa fa-pencil"></i></button></a>
                                                <a href="#"><button  class="btn btn-link" title="Delete"><i class="fa  fa-trash"></i> </button></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ID</th>
                                            <th rowspan="1" colspan="1">Tên sản phẩm</th>
                                            <th rowspan="1" colspan="1">Màu sắc</th>
                                            <th rowspan="1" colspan="1">Giá</th>
                                            <th rowspan="1" colspan="1">Giảm giá</th>
                                            <th rowspan="1" colspan="1">Hành động</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection


