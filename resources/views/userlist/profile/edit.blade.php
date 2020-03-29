@extends('userlist.layouts.app')
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
    <div class="w3-row-padding">
        <div class="container">
            <h1>Edit Profile</h1>
            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">

                        <img style="height: 200px"
                             src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                             class="avatar img-circle" alt="avatar">
                        <br>
                        <p></p>
                        <h6>Upload a different photo...</h6>

                        <input type="file" name="avatar" class="form-control">
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee"></i>
                        This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <h3>Personal info</h3>

                    <form class="form-horizontal" role="form">
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
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-8">


                              <textarea style="width: 1000px" name="body" class="form-control " id="editor1">

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
                                <input type="button" class="btn btn-primary" value="Save Changes">
                                <span></span>
                                <input type="reset" class="btn btn-default" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>

    </div>






    <!-- Pagination -->

    <div class="w3-center w3-padding-32">
        {{--    <ul>--}}
        {{--        <li href="#"--}}{{--                 class="w3-bar-item w3-button w3-hover-black">{{ $posts->links() }}</li>--}}{{-->--}}

        {{--    </ul>--}}
    </div>

    <!-- Images of Me -->
    <hr>

    <div class="w3-row-padding w3-padding-16" id="about">
        <div class="w3-col m6">
            <table style="width: 1600px">
                <td><img style="height: 300px"
                         src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="Me"
                         style="width:100%"></td>
                <td id="aboutme">
                    <h4><b>About Me</b></h4>

                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
                    <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an
                        interest of lorem
                        ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed
                        tellus ut
                        rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non
                        fringilla.
                        Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
                        ultricies congue
                        gravida diam non fringilla.</p>

                </td>
            </table>

        </div>

    </div>

    <div class="w3-container w3-padding-large" style="margin-bottom:32px">


        <br>

        <h2 class="w3-text-dark w3-padding-16"><i
                class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
            <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span
                    class="w3-tag w3-teal w3-round">Current</span></h6>
            <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit
                sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
            <hr>
        </div>
        <div class="w3-container">
            <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
            <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit
                sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
            <hr>
        </div>
        <div class="w3-container">
            <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>


        <h2 class="w3-text-grey w3-padding-16"><i
                class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
            <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
        </div>
        <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
        </div>
        <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
        </div>


    </div>


    <!-- Contact Section -->
    <div class="w3-container w3-padding-large w3-grey">
        <h4 id="contact"><b>Contact Me</b></h4>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
            <div class="w3-third w3-dark-grey">
                <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                <p>email@email.com</p>
            </div>
            <div class="w3-third w3-teal">
                <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                <p>Chicago, US</p>
            </div>
            <div class="w3-third w3-dark-grey">
                <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                <p>512312311</p>
            </div>
        </div>
        <hr class="w3-opacity">
        <form action="/action_page.php" target="_blank">
            <div class="w3-section">
                <label>Name</label>
                <input class="w3-input w3-border" type="text" name="Name" required>
            </div>
            <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border" type="text" name="Email" required>
            </div>
            <div class="w3-section">
                <label>Message</label>
                <input class="w3-input w3-border" type="text" name="Message" required>
            </div>
            <button type="submit" class="w3-button w3-black w3-margin-bottom"><i
                    class="fa fa-paper-plane w3-margin-right"></i>Send Message
            </button>
        </form>

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




