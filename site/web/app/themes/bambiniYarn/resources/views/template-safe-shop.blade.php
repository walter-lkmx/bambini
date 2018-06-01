{{--
  Template Name: Safe Shop
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
          <article @php(post_class())>
  <header>
    <h4 class="entry-title"><b>COMPRA SEGURA</b>
    </h4>
  </header>
  <div class="entry-summary">
  <p>Avalado por Corredor Público. Tus comentarios y recomendaciones hacia los artículos en venta, nos convierten en una comunidad segura para que mamás como tú puedan elegir el producto que más se adapte a las necesidades de tus pequeños. ¡Te invitamos a dejar tus comentarios y compartir tu experiencia en nuestras redes sociales!</p>
  </div>
</article>
  @endwhile
@endsection