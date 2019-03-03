@extends('layout.masterAdmin')
@yield('CssAdmin')
@section('contentAdmin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tài khoản
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Thêm tài khoản</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm tài khoản</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Họ tên</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-exclamation-circle"></i></span>
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-level-down"></i></span>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                            <option selected="selected">Admin</option>
                                            <option>User</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                   {{-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;">
                                        <span class="selection">
                                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-3zd1-container">
                                                <span class="select2-selection__rendered" id="select2-3zd1-container" title="Texas">Texas</span>
                                                <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span>
                                        <span class="dropdown-wrapper" aria-hidden="true">

                                        </span></span>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ</label>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-road"></i></span>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="District">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                           <div class="col-md-10">
                               <div>
                                   <button type="submit" class="btn btn-info pull-right">Thêm</button>
                                   <a href="{{route('user/list')}}"><button type="submit"  class="btn btn-default pull-right">Bỏ qua</button></a>
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
        </section></div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    </div>
    </div>

    </body>
    </html>

@endsection