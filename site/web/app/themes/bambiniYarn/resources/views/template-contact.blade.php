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
          <p>Dirección: Ave. Huitzilac #2225, Col. Morelos. CP 22056. Tijuana, Baja California.</p>
          <p>Teléfono de contacto: <b>01 (664) 638-3033</b></p>
          <p>Whatsapp:  <b>+52 1 (646) 120-4868</b></p>
        </div><br>
        <?php echo do_shortcode( '[contact-form-7 id="299" title="Forma de Contacto"]' ); ?>
    </article>
  @endwhile
@endsection
