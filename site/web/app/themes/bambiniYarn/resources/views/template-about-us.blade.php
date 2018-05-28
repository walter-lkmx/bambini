{{--
  Template Name: About Us
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
          <article @php(post_class())>
  <header>
    <h4 class="entry-title"><b>¿QUIÉNES SOMOS?</b>
    </h4>
  </header>
  <div class="entry-summary">
  <p>Somos una tienda en línea de productos para bebés, niños y mascotas, en donde ponemos todo a tu disposición para que no pierdas tiempo y todo esté al alcance de un clic. Con la mejor calidad, un óptimo servicio y rapidez en tus entregas.</p><br>

  <h5>+ ENCUENTRA TODO PARA TU BEBÉ EN UN SÓLO SITIO</h5>
  <p>Olvídate de ir a diferentes tiendas. Nuestra prioridad es ofrecer una solución fácil y amigable para todas tus necesidades.</p><br>

  <h5>+ HASTA LA PUERTA DE TU CASA</h5>
  <p>No te preocupes, nosotros te hacemos llegar el pedido hasta la comodidad de tu hogar. Sólo basta con hacer un clic y aprovechar el resto de tu tiempo en lo que más quieras.</p>
  </div>
</article>
  @endwhile
@endsection
