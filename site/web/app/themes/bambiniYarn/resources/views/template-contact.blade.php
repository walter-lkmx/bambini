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
            <h4 class="entry-title">GRACIAS POR LA CONFIANZA</h4>
            <p>Ocho años de expertise nos respaldan. Somos la primera agencia de growth marketing de Baja California en lograr la insignia Google Partners.</p>
            <p>Si deseas que revisemos un proyecto, necesitas un presupuesto o una asesoría, llena el formato de contacto; tendrás una respuesta rápida y eficaz.</p>
            <p>Mail: mas@conversiones.com</p>
            <p>Web: <a href="https://conversiones.com" target="_blank">conversiones.com</a></p>
            <p>Dirección: Ave. Huitzilac #2225, Col. Morelos. CP 22056. Tijuana, Baja California.</p>
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
