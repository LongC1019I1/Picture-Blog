@extends('useracount.layouts.app')
@section('headSection')
    <style>
        #aboutme {
            padding-right: 400px;
            float: left;
        }

        #aboutme h4 {
            margin-left: 60px;
        }

        #aboutme p {
            margin-left: 60px;
        }

    </style>
    <script src="{{asset('select/multiselect.min.js')}}"></script>
@endsection
@section('main-content')
    <!-- !PAGE CONTENT! -->


    <!-- Header -->


    <!-- First Photo Grid-->
    <div style="padding-left: 73px" class="w3-row-padding">


            <div class="row">
                <form class="form-horizontal" role="form" method="post" action="{{route('user.profile.update')}}"
                      enctype="multipart/form-data">
                {{csrf_field()}}
                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="text-center">

                            <img style="height: 300px"
                                 src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                 class="avatar img-circle" alt="avatar">
                            <br>
                            <p></p>
                            <h6>Upload a different photo...</h6>

                            <input type="file" name="avatar" class="form-control">
                        </div>
                    </div>
<p style="margin: 20px"></p>
                    <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        <h3 style="margin: 20px">Personal info</h3>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="name" type="text"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Job</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="job" type="text"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->job}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Address:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="address" type="text"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->address}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="phone" type="text"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->phone}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="email" type="text"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-8">


                                <textarea class="form-control" name="description">
{{\Illuminate\Support\Facades\Auth::user()->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Experience:</label>
                            <div class="col-lg-8">


                              <textarea style="width: 1000px" name="experience" class="form-control " id="editor1">

                                        {{\Illuminate\Support\Facades\Auth::user()->experience}}
                              </textarea>
                            </div>
                        </div>

                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="col-md-3 control-label">Password:</label>--}}
                        {{--                            <div class="col-md-8">--}}
                        {{--                                <input class="form-control" type="password" value="{{\Illuminate\Support\Facades\Auth::user()->password}}">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="col-md-3 control-label">Confirm password:</label>--}}
                        {{--                            <div class="col-md-8">--}}
                        {{--                                <input class="form-control" type="password" value="11111122333">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" >Save Change</button>
                                <span></span>
                                <button type="reset"  class="btn btn-default" >Cancel</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>






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




