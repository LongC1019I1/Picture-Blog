@extends('admin.layouts.app')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create User
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">User</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- general form elements -->
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('admin.user.store')}}" >
                            @csrf
                            <div class="box-body">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Name</label>
                                        <input type="text" class="form-control" id="title" name="name" placeholder="Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="subtitle">Email</label>
                                        <input type="text" class="form-control" id="subtitle" name="email" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Password</label>
                                        <input type="password" class="form-control" id="slug" name="password" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Avatar</label>
                                        <input type="text" class="form-control" id="slug" name="avatar" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Role</label>
                                        <input type="text" class="form-control" id="slug" name="role" placeholder="">
                                    </div>
                                </div>

{{--                                <div class="col-lg-6">--}}



{{--                                    <div class="form-group">--}}
{{--                                        <label for="image">File input</label>--}}
{{--                                        <input type="file" name="image" id="image">--}}

{{--                                    </div>--}}

{{--                                    <div class="checkbox">--}}
{{--                                        <label>--}}
{{--                                            <input type="checkbox" name="status"> Publish--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
