@extends('layout.masterAdmin')
@yield('CssAdmin')
@section('contentAdmin')
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tài khoản
                <small>preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Simple</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách tài khoản</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>User</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Số ĐT</th>
                                    <th>Địa chỉ</th>
                                    {{--<th>Trạng thái</th>--}}
                                    <th>Hành động</th>
                                </tr>
                                @foreach($userlist as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->password}}</td>
                                    <td><span class="label label-success">{{$user->level}}</span></td>
                                    <td>{{$user->telephone}}</td>
                                    <td>{{$user->address}}</td>
                                    {{--<td><span class="label label-success">Hoạt động</span></td>--}}
                                    <td><a href="{{route('user/edit')}}" ><button class="btn btn-link" title="Edit"><i class="fa fa-pencil"></i></button></a>
                                        <button class="btn btn-link" title="Delete"><i class="fa  fa-trash-o"></i></button>
                                        <button class="btn btn-link" title="Look" ><i class="fa  fa-unlock-alt"></i> </button>
                                    </td>
                                </tr>
                               @endforeach
                                </tbody></table>
                                <div class="col-sm-12">
                                    <div class="col-sm-10"></div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                           <a href="{{route('user/add')}}"> <button type="submit" class="btn btn-block btn-info">
                                                <span class="btn-icon"><i class="fa  fa-user-plus"></i></span> Thêm
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
        </section></div>
        </section>
        <!-- /.content -->
    </div>
    @endsection