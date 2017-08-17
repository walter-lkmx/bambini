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
    @include('partials.featured-products')
    @include('partials.featured-categories')
    @include('partials.useful-info')
    @include('partials.content-page')
  @endwhile
@endsection
