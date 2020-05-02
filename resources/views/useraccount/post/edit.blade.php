@extends('useraccount.layouts.app')

@section('headSection')
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{asset('select/styles/multiselect.css')}}" rel="stylesheet"/>
    <script src="{{asset('select/multiselect.min.js')}}"></script>



@section('main-content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="box-sizing:border-box; padding: 20px ">


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">

                    @include('useraccount.layouts.includes.messages')
                    <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('post.update',$post->id)}}" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}"
                                               placeholder="Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="subtitle">Description</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$post->subtitle}}"
                                               placeholder="Sub Title">
                                    </div>



{{--                                    <div class="form-group">--}}
{{--                                        <label for="slug">Post Slug</label>--}}
{{--                                        <input type="text" class="form-control" id="slug" name="slug"--}}
{{--                                               placeholder="Slug">--}}
{{--                                    </div>--}}

                                </div>
                                <div class="col-lg-6">
                                    <br>
                                    <div class="form-group">
                                        <div class="pull-right">
                                            <img src="{{Storage::disk('local')->url($post->image)}}"
                                                 style="width: 100px"/>
                                            <br>
                                            <br>
                                            <label for="image">File input</label>

                                            <input type="file" name="image" id="image">
                                        </div>
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox" name="status" value="1"
                                                @if ($post->status == 1)
                                                    {{'checked'}}
                                                    @endif
                                                > Publish
                                            </label>
                                        </div>
                                    </div>
                                    <br>


                                    <div class="form-group" style="margin-top:31px;">
                                        <label>Select Category</label>

                                        <select id='testSelect1' name="categories[]" multiple>
                                            @foreach ($categories as $category)

                                                <option value="{{ $category->id }}"
                                                        @foreach ($post->categories as $postCategory)
                                                        @if ($postCategory->id == $category->id)
                                                        selected
                                                    @endif
                                                    @endforeach
                                                >{{ $category->name }}</option>
                                            @endforeach
                                        </select>


                                        {{--                                        <select class="form-control select2 select2-hidden-accessible" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">--}}
                                        {{--                                            @foreach ($categories as $category)--}}
                                        {{--                                                <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
                                        {{--                                            @endforeach--}}
                                        {{--                                        </select>--}}
                                    </div>

                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Write Post Body Here
                                        <small>Simple and fast</small>
                                    </h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="form-group col-md-12">

                                    <textarea name="body" class="form-control " id="editor1">

                                        {{$post->body}}
                                    </textarea>
                                </div>
                                <div   class="form-group" style="margin-top:25px; margin-left: 15px; width: 500px">
                                    <label>Tags</label>
                                    <input type="text" class="form-control" id="subtitle" name="tags" placeholder="input Tags">
                                </div>

                                {{--                                <div class="box-body pad">--}}
                                {{--                                    <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>--}}
                                {{--                                </div>--}}
                            </div>

                            <div style="margin-left: 12px" class="box-footer">
                                <input type="submit" class="btn btn-primary">
                                <a href='{{ route('post.index') }}' class="btn btn-warning">Back</a>
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
    <!-- /.content-wrapper -->

@endsection
@section('footerSection')
    <script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('editor1'); </script>
    <script>
        $(document).ready(function () {
            $(".select2").select2();
        });
    </script>
    <script>
        document.multiselect('#testSelect1');
    </script>
@endsection
