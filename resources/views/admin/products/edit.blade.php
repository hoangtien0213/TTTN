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
            <form role="form" method="POST">
                @csrf
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs ">
                            <li class="active "><a href="#general">Sửa sản phẩm</a></li>
                            {{--<li><a href="#images" data-toggle="tab">Images</a></li>
                            <li><a href="#details" data-toggle="tab">Details</a></li>--}}
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="general">
                                <div class="col-xs-12 xs-pl-0">
                                    @if (session('success'))
                                        <script>
                                            alert('{{session('success')}}');
                                        </script>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <b>Lỗi!! Bạn vui vòng kiểm tra lại:</b>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input name="txtTenSp" type="text" class="form-control" value="{{ old('txtTenSp',$productlist['title']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <input type="text" name="txtMota" class="form-control" value="{{ old('txtMota',$productlist['des']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input name="txtSoluong" type="text" class="form-control" value="{{ old('txtSoluong',$productlist['quantity']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Thể loại </label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            @foreach($dsTheLoai as $theloai)
                                                @if($theloai->id == $productlist['category_id'])
                                                    <option value="{{ $theloai->id }}" selected="selected">{{ $theloai->title }}</option>
                                                @else
                                                    <option value="{{ $theloai->id }}">{{ $theloai->title }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-12">
                                        <div>
                                            <button type="submit" class="btn btn-info pull-right">Cập nhật</button>
                                            <a href="{{route('product/list')}}"><label class="btn btn-default pull-right">Trở về</label></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            {{--  <div class="tab-pane" id="images">
                                  <div class="col-xs-12 xs-pl-0">
                                  <div class="form-group">
                                      <label>Meta Title</label>
                                      <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                  <div class="form-group">
                                      <label>Meta alt</label>
                                      <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" id="exampleInputFile">

                                      <p class="help-block">Example block-level help text here.</p>
                                  </div>

                                  <div class="book-image-list row" id="book-image-list" data-count="0">
                                  </div>
                                     </div>
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div class="col-sm-10"></div>
                                          <div class="col-sm-2">
                                              <div class="form-group">
                                                  <button type="submit" class="btn btn-block btn-success">
                                                      <span class="btn-icon"><i class="fa fa-save"></i></span> Save
                                                  </button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  </div>
                              <!-- /.tab-pane -->

                              <div class="tab-pane" id="details">
                                  <div class="col-xs-12 xs-pl-0">
                                  <div class="form-group">
                                      <label>Màu</label>
                                      <input type="text" class="form-control" placeholder="Enter ...">

                                  </div>
                                  <div class="form-group">
                                      <label>Giá</label>
                                      <input type="text" class="form-control" placeholder="Enter ...">

                                  </div>
                                  <div class="form-group">
                                      <label>Giảm giá</label>
                                      <input class="form-control" rows="3" placeholder="Enter ..."></input>
                                  </div>
                                  </div>
                                  <div class="row mt-3">
                                      <div class="col-sm-12">
                                          <div class="col-sm-10"></div>
                                          <div class="col-sm-2">
                                              <div class="form-group">
                                                  <button type="submit" class="btn btn-block btn-success">
                                                      <span class="btn-icon"><i class="fa fa-save"></i></span> Save
                                                  </button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <!-- /.tab-pane -->
                              <!-- /.tab-pane -->
                              <!-- /.tab-pane -->--}}
                        </div>

                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            </form>
            <!-- /.row -->
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