{{--
  Template Name: Thank You
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
          <img src="@asset('images/gracias-v.png')">
  @endwhile
@endsection
