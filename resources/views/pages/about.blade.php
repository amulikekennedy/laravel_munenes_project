@extends('layouts.app')

@section('page_title')
About | The Munenes
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
         <section class="hero height-70">
            <!--Main slider-->
            @include('inc.aboutbanner')
            <!--End main slider-->
            <!--Header-->
            <header class="header default">
                
                @include('inc.header')

                @include('inc.nav')
                
             </header>
            <!--End header-->
         </section>
         <section id="gallery" class="gallery main">
            <!--Container-->
            @include('inc.gallery')
            <!--End container-->
         </section>
         <!--End hero section-->
@endsection