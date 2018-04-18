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
      <aside class="sidebar">
        <img src="@asset('images/espacio1.jpg')">
        <img src="@asset('images/espacio2.jpg')">
        <img src="@asset('images/espacio3.jpg')">
        <img src="@asset('images/espacio4.jpg')">
      </aside>
      {{-- @include('partials.featured-recommended') --}}
      @include('partials.featured-popular')
      {{-- @include('partials.featured-trending') --}}
      @include('partials.content-page')
    @endwhile
    </div>
  @include('partials.useful-info')
@endsection
