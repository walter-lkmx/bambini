{{--
  Template Name: Billing
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
          <article @php(post_class())>
  <header>
    <h4 class="entry-title">DIGITIENDAS MARESI, S.A.P.I. DE C.V<br>
    <b>FACTURACIÓN</b>
    </h4>
  </header>
  <div class="entry-summary">
<p>Para recibir su factura, favor de enviarnos los siguientes datos al correo: <b>facturacion@bambini.club</b></p>
<ul>
  <li>1) Nombre de la persona física o moral.</li>
  <li>2) RFC</li>
  <li>3) Correo ligado a la orden</li>
  <li>4) Núm. de orden de compra</li>
  <li>5) Correo electrónico</li>
  <li>6) Método de pago
    <ul>
      <li>a) Efectivo</li>
      <li>b) Cheque nominativo</li>
      <li>c) Transferencia electrónica de fondos</li>
      <li>d) Tarjeta de crédito</li>
      <li>e) Tarjeta de débito</li>
    </ul>
  </li>
  <li>7) Dirección de facturación
    <ul>
      <li>a) Calle</li>
      <li>b) Núm. exterior</li>
      <li>c) Núm. interior</li>
      <li>d) Colonia</li>
      <li>e) Localidad</li>
      <li>f) Delegación/Municipio</li>
      <li>g) Estado</li>
      <li>h) Código Postal</li>
    </ul>
  </li>  
</ul>
</article>
  @endwhile
@endsection
