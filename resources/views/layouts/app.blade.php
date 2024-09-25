<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title')</title>
    <meta name="description" content="">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('css/base.css')}}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}"  type="text/css"  media="all" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"  type="text/css"  media="all" />
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}"  type="text/css"  media="all" />

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800" rel="stylesheet">
     </head>
  <body>
    @yield('content')
    <section id="contact" class="contact main bg-secondary">
        <!--Container-->
        <div class="container">
        <!--Row-->
        <div class="row justify-content-center ">
            <div class="col-12 col-md-10 col-lg-9">
                <div class="block-content  gap-one-bottom-md text-center">
                    <div class="block-title ">
                    <h1 class="uppercase">stay in touche</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
        </div>
        <!--End container-->
        <!--Container-->
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <ul class="feature-list feature-list-sm text-center row">
                    <li class="col-md-12  col-lg-12">
                    <div class="card text-center" >
                        <div class="card-body">
                            <h2 class="uppercase ">Booking</h2>
                            <p class="mb-0"><em class="uppercase h5 opc-70">Maurine Munene</em>
                                +(254) 708-433 269<br>
                                bookings@themunenes.com
                            </p>
                        </div>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <ul class="block-social list-inline text-center mt-4">
                    <li class="list-inline-item">
                    <a target="_blank" href="https://www.facebook.com/themunenes"> <i class="socicon-facebook"></i> </a>
                    </li>
                    <li class="list-inline-item">
                    <a target="_blank" href="https://www.instagram.com/themunenes/"><i class="socicon-instagram"></i> </a>
                    </li>
                    <li class="list-inline-item">
                    <a target="_blank" href="https://www.twitter.com/themunenes/"><i class="socicon-twitter"></i> </a>
                    </li>
                    <li class="list-inline-item">
                    <a target="_blank" href="https://www.youtube.com/channel/UCO2N0hIkpiuhqu6IlvZWxeg"><i class="socicon-youtube"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <!--End container-->
    </section>
    <!--End contact section-->  
    <footer class="pt-5 pb-5 footer">
        <!--Container-->
        <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <small class="small"><span>&copy; All rights reserved - The Munenes 2023. Website Developed by Amulike Kennedy Mwasumbi. </span></small>
            </div>
            
        </div>
        </div>
        <!--End container-->
    </footer>
    <a class="block-top scroll" href="#wrapper">
    <i class="icon-angle-up"></i></a>
</div>
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.js')}}" ></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}" ></script>
    <script src="{{asset('js/audio.min.js')}}" ></script>
    <script src="{{asset('js/twitterFetcher_min.js')}}" ></script>
    <script src="{{asset('js/placeholders.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>