{{--
  Template Name: Product Return
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
          <article @php(post_class())>
  <header>
    <h4 class="entry-title">DIGITIENDAS MARESI, S.A.P.I. DE C.V<br>
    <b>POLÍTICAS DE DEVOLUCIÓN</b>
    </h4>
  </header>
  <div class="entry-summary">
<b>Por favor, lee atentamente estos términos y condiciones antes de usar esta web.</b><br>
<p>Si no estás satisfecho con tu compra, BAMBINI.CLUB, acepta la devolución de tu producto dentro de los 30 días naturales siguientes a recibida tu compra en tu domicilio; asimismo, BAMBINI.CLUB, a decisión de nuestros usuarios, para la devolución del dinero, se podrá reembolsar de la siguiente manera:</p>
<ul><li>a) Devolución a tarjeta de débito o crédito, excepto los gastos de envío.</li>
<li>b) Gift Card (monedero electrónico).</li>
<li>c) Depósito o transferencia Bancaria a la cuenta del usuario.</li></ul>
<p>El costo por envío de devolución será cubierto por el usuario, y será descontado del monto a devolver.</p>
<p>Requisitos para devolución de productos:<br>
<ol><li>1) Que no se haya usado el producto.</li>
<li>2) Que se encuentre en las mismas condiciones que se recibió.</li>
<li>3) Mantenerse en el empaque original.</li></ol></p>
 
<p>Pasos, para realizar una devolución:<br>
<ol><li>1) Envíanos un correo a devoluciones@bambini.club, con el número de compra, tu número de teléfono, y motivo de la devolución.</li>
<li>2) Espera que te contactemos dentro de las siguientes 24 horas.</li>
<li>3) Empaqueta el producto de la misma manera que lo recibiste.</li>
<li>4) Enviálo a Calle Carlos Rovirosa 3133, Colonia Aviación, Tijuana, Baja California, C.P. 22014.</li></ol></p>
 
<p>Para aclaraciones, favor de enviar un correo a:<br>
<b>devoluciones@bambini.club</b>, o comunicarse al telefono <b>(664) 364 7961.</b></p>
</article>
  @endwhile
@endsection
