<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kawsar Mobin Rubel</title>
    <link rel="icon" type="image/png" href="{{ asset('images/frontEnd/title-icon.gif') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('app/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('app/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('custom/about.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/resume.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('app/css/agency.min.css') }}" rel="stylesheet">

    <style media="screen">
    .progress-bar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #17A2B8;
        transition: width .6s ease;
    }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Kawsar</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#resume">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    @include('includes.header')
    <!-- Header End -->

    <!-- About -->
    <div id="about">
        <div class="container-fluid bg-info text-white">
            <div class="row">
                <div style="padding-left:0 !important; text-align:center; padding-top:20px; padding-bottom:20px" class="col-sm-4">
                    <img class="profile-pic" src="{{ asset('images/frontEnd/about/about01.jpg') }}" alt="No Image">
                </div>
                <div class="col-sm-8">
                    <div class="about-heading">
                        <h2 class="div-heading text-uppercase" style="padding-top: 15px">ABOUT ME</h2>
                    </div>

                    <p style="font-family: monospace; font-size: 15px; color:black">
                        This is H.M. Somee Kawsar Mobin and I am a full stack web developer who specializes in creating
                        dynamic and secure web applications. I have been in the field for nearly 6 months,
                        and have been loving every minute of it.
                    </p>



                    <div class="row">

                        <div class="col-md-5 address">
                            <h2 class="div-heading" style="padding-top: 15px; font-size:20px; font-family:unset;">Contact Details</h2>
                            <p>
                                <span><i class="fa fa-user"></i> H.M. Somee Kawsar Mobin</span><br>
                                <span><i class="fa fa-flag"></i> Rajshahi, Bangladesh</span><br>
                                <span><i class="fa fa-phone"></i> +8801882003828</span><br>
                                <a href="mailto: hmkawsar559@gmail.com"><span><i class="fa fa-envelope"></i> hmkawsar559@gmail.com</span></a>
                            </p>
                        </div>

                        <!--About Social Icons-->
                        <div class="col-md-5 social">
                            <hr>
                            <ul class="">
                                <li><a target="_blank" href="https://www.facebook.com/kawsarmobin.rubel"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/kawsarmobinrubel/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Resume -->
    <div id="resume" >
        <div class="container-fluid bg-secondary text-black"style="background-color: #4d4f50; padding: 0">
            <div class="container-fluid text-black"style="background-color: #4d4f50; color: white">

                <div class="row">
                    <!-- Education -->
                    <div class="col-sm-4">
                        <h2 class="second">Education</h2>
                    </div>

                    <div class="col-sm-8">

                        <h4>
                            Bsc in Computer Science & Engineering
                        </h4>

                        <p>
                            Gono Bishwabidyalay | 2014 - 2018
                        </p>

                        <hr style="border: 1px solid silver">

                    </div>
                    <!-- Education End -->

                    <!-- Work -->
                    <div class="col-sm-4">
                        <h2 class="second">Work</h2>
                    </div>

                    <div class="col-sm-8">

                        <h4>Semicolon IT Solutions, Bangladesh</h4>

                        <p>Software Engineer | 2018 - Present</p>

                        <hr style="border: 1px solid silver">

                    </div>
                    <!-- Work End -->

                    <!-- Skill -->
                    <div class="col-sm-4">
                        <h2 class="second">Skill</h2>
                    </div>

                    <div class="col-sm-8" style="padding-right: 70px">

                        <div class="">
                            <label for="">LARAVEL</label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                </div>
                            </div>
                        </div> <br>

                        <div class="">
                            <label for="">CODEIGNITER</label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                                </div>
                            </div>
                        </div> <br>

                        <div class="">
                            <label for="">MYSQL</label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:25%">
                                </div>
                            </div>
                        </div> <br>

                        <div class="">
                            <label for="">JAVASCRIPT & JQUERY</label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:15%">
                                </div>
                            </div>
                        </div> <br>

                        <div class="">
                            <label for="">BOOTSTRAP</label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:35%">
                                </div>
                            </div>
                        </div> <br>

                        <div class="">
                            <label for="">HTML5 & CSS</label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                </div>
                            </div>
                        </div> <br>

                        <div class="">
                            <label for="">PHOTOSHOP</label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                </div>
                            </div>
                        </div> <br>

                    </div>
                    <!-- Skill End-->

                </div>
            </div>
        </div>
    </div>
    <!-- Resume End -->

    <!-- Portfolio Grid -->
    <div id="portfolio" style="padding-top: 30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase" style="font-family: inherit">My Project's</h2>
                    <hr style="border: 1px solid silver">
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-3 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$project->id}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>

                            @if ($project->images)
                                @isset($project->images[0])
                                    <img style="width: 400px; height:200px" class="img-fluid" src="{{ asset('uploads/projects/'.$project->images[0]->image) }}" alt="">
                                @else
                                    <img class="img-fluid" src="{{ asset('app/img/portfolio/01-thumbnail.jpg') }}" alt="">
                                @endisset
                            @else
                                <img class="img-fluid" src="{{ asset('app/img/portfolio/01-thumbnail.jpg') }}" alt="">
                            @endif


                        </a>
                        <div class="portfolio-caption">
                            <h4>{{ $project->title }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Team -->

    <!-- Clients -->
    {{-- <section class="py-5">
    <div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-6">
    <a href="#">
    <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
</a>
</div>
<div class="col-md-3 col-sm-6">
<a href="#">
<img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
</a>
</div>
<div class="col-md-3 col-sm-6">
<a href="#">
<img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
</a>
</div>
<div class="col-md-3 col-sm-6">
<a href="#">
<img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
</a>
</div>
</div>
</div>
</section> --}}

<!-- Contact -->
<section id="contact" style="padding-top: 30px; padding-bottom: 30px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" style="font-family: inherit">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="" action="{{ route('message.store') }}" method="post" name="">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone (Optional)" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <input class="btn btn-xs btn-primary" type="submit" name="" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('includes.footer')

<!-- Portfolio Modals -->

@foreach ($projects as $proje)
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal{{$proje->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-info">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">{{ $proje->title }}</h2>
                                    <p>
                                        {{ $proje->sort_desc }}
                                    </p>
                                    <ul class="list-inline">
                                        <li>{{ $proje->created_at->toFormattedDateString() }}</li> <br>
                                        <li>Category: {{$proje->category->name}}</li> <br>
                                        <li>Technology: {{$proje->technologies_use}}</li> <br>
                                        <li>URL: {{$proje->url_1}}</li> <br> 
                                        <li>URL: {{$proje->url_2}}</li> <br>
                                       {{-- <li><a target href="{{$proje->url_1}}">URL: {{$proje->url_1}}</a></li> --}}
                                    </ul>

                                    <div class="col-md-12">
                                        @if ($proje->images)
                                            @foreach ($proje->images as $image)
                                                <div class="col-md-6 pull-left">
                                                    <img style="width: 500px; height: 200px;" class="img-fluid" src="{{ asset('uploads/projects/'.$image->image) }}" alt="">
                                                </div>
                                            @endforeach
                                        @else
                                            <img class="img-fluid d-block mx-auto" src="{{ asset('app/img/portfolio/01-full.jpg') }}" alt="">
                                        @endif
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fa fa-times"></i>
                                Close Project</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('app/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('app/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('app/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Contact form JavaScript -->
    {{-- <script src="{{ asset('app/js/jqBootstrapValidation.js') }}"></script> --}}
    {{-- <script src="{{ asset('app/js/contact_me.js') }}"></script> --}}

    <!-- Custom scripts for this template -->
    <script src="{{ asset('app/js/agency.min.js') }}"></script>

</body>

</html>
