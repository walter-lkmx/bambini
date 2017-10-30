{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
          <article @php(post_class())>
  <header>
    <h4 class="entry-title">DIGITIENDAS MARESI, S.A.P.I. DE C.V
    </h4>
  </header>
  <div class="entry-summary">
    <p>Tijuana, Baja California</p>
    <p>Teléfono de contacto: <b>(664) 364 7961</b></p>
    <p>Correo electrónico de contacto:  <b>info@bambini.club</b></p>
  </div>
</article>
  @endwhile
@endsection
