@extends('layout.masterAdmin')
@yield('CssAdmin')
@section('contentAdmin')
    <!-- Content Wrapper. Contains page content -->
    <style>
        #tr-checkbox1 {
            margin-left: 0px;
            right: -5px;
            margin-top: -5px;

        }
        #selectAll{ margin-left: 0px;
            right: -5px;
            margin-top: -16px;}
th{
    text-align:center;
}

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
            <!-- Small boxes (Stat box) -->
            <div class="col-xg-12">
                <div class="col-xs-4">

                    <div class="input-group">
                       {{-- <input type="text" name="q" class="form-control" placeholder="Title ,ISBN,Author,Publisher,Genre">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-filter"></i>
                </button>
              </span>--}}

                    </div></div></div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="col-xs-12">
                        <div class="box box-primary">
                            <div class="box-header ">
                                <div class="col-md-10" style="
    padding-left: 0px;">
                                    <h3 class="box-title">Hình ảnh sản phẩm: Tên sản phẩm</h3>
                                </div>
                                <div class="col-md-2" style="padding-left: 37px;"> <a href="{{route('images/add')}}"><button class="btn btn-info" title="Edit"><i class="fa fa-user-plus">Thêm hình ảnh</i></button></a></div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr class="success">
                                        <th align="center"><div class="checkbox">
                                                <input type="checkbox" id="selectAll">

                                            </div></th>
                                        <th >ID</th>
                                        <th>Hình ảnh</th>
                                        <th>Title</th>
                                        <th>alt</th>
                                        <th>Slug</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="tr-checkbox1">
                                            </div>
                                        </td>
                                        <td>1 </td>
                                        <td align="center"><img src="/img/nokia-8-1-featured.png" width="50"></td>
                                        <td><a href="#">Sam Sung galaxy S8</a>
                                        <td>Điện thoại thông minh</td>
                                        <td>Dien-Thoai</td>

                                        <td>
                                            <a href="{{route('images/edit')}}"> <button class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></button></a>
                                            <button class="btn btn-info" title="Clone"><i class="fa  fa-clone"></i></button>
                                            <button class="btn btn-info" title="Delete" ><i class="fa  fa-trash"></i> </button>
                                        </td>
                                    </tr>

                                    </tbody>
                                    <!--  <tfoot>
                                     <tr>
                                       <th>Rendering engine</th>
                                       <th>Browser</th>
                                       <th>Platform(s)</th>
                                       <th>Engine version</th>
                                     </tr>
                                     </tfoot> -->
                                </table>

                            </div>
                            <!-- /.box-body -->


                        </div></div>

                    <!-- /.box -->

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var $selectAll = $('#selectAll'); // main checkbox inside table thead
            var $table = $('.table'); // table selector
            var $tdCheckbox = $table.find('tbody input:checkbox'); // checboxes inside table body
            var $tdCheckboxChecked = []; // checked checbox arr

            //Select or deselect all checkboxes on main checkbox change
            $selectAll.on('click', function () {
                $tdCheckbox.prop('checked', this.checked);
            });

            //Switch main checkbox state to checked when all checkboxes inside tbody tag is checked
            $tdCheckbox.on('change', function(){
                $tdCheckboxChecked = $table.find('tbody input:checkbox:checked');//Collect all checked checkboxes from tbody tag
                //if length of already checked checkboxes inside tbody tag is the same as all tbody checkboxes length, then set property of main checkbox to "true", else set to "false"
                $selectAll.prop('checked', ($tdCheckboxChecked.length == $tdCheckbox.length));
            })
        });
    </script>
@endsection