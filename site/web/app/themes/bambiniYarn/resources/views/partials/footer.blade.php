
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/59515c6a50fd5105d0c82c92/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();

</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9JKVZS');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9JKVZS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--End of Tawk.to Script-->
<footer class="content-info">
    <div class="container">
        {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
        <ul class="logo">
            <li>
                <a class="brand" href="{{ home_url('/') }}">
                    <img src="@asset('images/logo-inverted.svg')" alt="{{ get_bloginfo('name', 'display') }}">
                </a>
            </li>
        </ul>
        <ul>
            <li>Tu pedido</li>
            <!--<li>Rastrear mi pedido</li>-->
            <li><a href="/devolucion" target="_blank">Regresa tu pedido</a></li>
            <!--<li>Envíos y entregas</li>-->
            <li><a href="/facturacion" target="_blank">Facturación</a></li>
        </ul>
        <ul>
            <li>Ayuda</li>
            <li>Centro de ayuda</li>
            <!--<li>Formas de pago</li>-->
            <li><a href="/contacto" target="_blank">Contacto</a></li>
        </ul>
        <ul>
            <li>Compra segura</li>
            <li><a href="/terminos-y-condiciones" target="_blank">Términos y condiciones</a></li>
            <li><a href="/politica-de-privacidad" target="_blank">Política de privacidad</a></li>
        </ul>
        <ul class="social">
            <li><a href="https://www.facebook.com/Bambiniclub-307504209655132/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.pinterest.com.mx/bambiniclub0283/pins/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/bambini.club.store/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</footer>
