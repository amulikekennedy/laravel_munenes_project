@extends('layouts.app')

@section('page_title')
    The Munenes
@endsection

@section('content')
    <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
        @include('inc.loader')
         <!-- End preloader inner -->
      </div>
      <!-- End preloader-->
      <!--Wrapper-->
      <div class="wrapper">
         <div class="block-search-form">
            @include('inc.search')
         </div>
         <!--Hero section-->
         <section class="hero">
            <!--Main slider-->
            @include('inc.slider')
            <!--End main slider-->
            <!--Header-->
            <header class="header default">
                
                @include('inc.header')

                @include('inc.nav')
                
             </header>
            <!--End header-->
         </section>
         <!--End hero section-->
         <!--Latest album section-->
         <section id="single" class="latest main">
            <!--Container-->
            @include('inc.latestrelease')
            <!--End container-->
            <!--Container-->
            @include('inc.tracklist')
            <!--End container-->
         </section>
         <!--End latest album section-->
         <!--About section-->
         <section id="about" class="about overlay main">
            @include('inc.brief')
         </section>
         <!--End about section-->
         <!--Discography section-->
         <section id="discography" class="discography main">
            <!--Container-->
            @include('inc.discography')
            <!--End container-->
         </section>
         <!--End discography section-->
         <!--Divider section-->
         <section  class="divider overlay">
            @include('inc.countdown')          
         </section>
         <!--End divider section-->
         <!--Tours section-->
         <section id="tour" class="tour  main bg-secondary">
            <!--Container-->
            @include('inc.eventlist')
            <!--End container-->
         </section>
         <!--End tour section-->
         <!--News section-->
         <section id="news" class="news main bg-secondary">
            <!--Container-->
            @include('inc.news')
            <!--End container-->
         </section> 
         
@endsection