{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="welcome">
        <div class="container">
            @include('partials.slider')
            @include('partials.search-box')
        </div>
    </div>
    <div class="products-content">
      {{-- @include('partials.featured-recommended') --}}
      @include('partials.featured-popular')
      {{-- @include('partials.featured-trending') --}}
      @include('partials.content-page')
    @endwhile
    <aside class="sidebar">
        <a href="http://bambini.club/mi-cuenta/" target="_blank"><img src="@asset('images/espacio1.png')"></a>
        <a href="http://bambini.club/producto/asientodecocheconvertiblecoscomightyfit65dxheathernavy/" target="_blank"><img src="@asset('images/espacio2.png')"></a>
        <a href="http://bambini.club/contacto/" target="_blank"><img src="@asset('images/espacio3.png')"></a>
        <a href="http://bambini.club/page/5/?s=carriolas%20dobles&post_type=product&type_aws=true" target="_blank"><img src="@asset('images/espacio4.png')"></a>
    </aside>
    </div>
  @include('partials.useful-info')
@endsection
