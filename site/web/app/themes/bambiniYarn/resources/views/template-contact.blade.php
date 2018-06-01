{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
      <article @php(post_class())>
        <div class="contact">
          <div class="entry-summary">
            <h4 class="entry-title">CONTACTO</h4>
            <p>Dirección: Ave. Huitzilac #2225, Colonia Morelos. C.P. 22056, Tijuana B.C.</p>
            <img src="@asset('images/mapa.png')" alt="Mapa de Ubicación" title="Mapa de Ubicación"><br>
            <p>Teléfono de contacto: <b>01 (664) 638-3033</b></p>
            <p>Whatsapp:  <b>+52 1 (646) 120-4868</b></p>
          </div>
          <div class="contact-form-side">
            <?php echo do_shortcode( '[contact-form-7 id="74512" title="Contact form 1"]' ); ?>
          </div>
        </div>
    </article>
  @endwhile
@endsection
