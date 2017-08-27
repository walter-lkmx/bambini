<script type="text/javascript">
$ = jQuery;

</script>
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
<!--End of Tawk.to Script-->
<footer class="content-info">
    <div class="container">
        {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
        <ul>
            <li>
                <a class="brand" href="{{ home_url('/') }}">
                    <img src="@asset('images/logo-inverted.svg')" alt="{{ get_bloginfo('name', 'display') }}">
                </a>
            </li>
        </ul>
        <ul>
            <li>Tu pedido</li>
            <li>Rastrear mi pedido</li>
            <li>Regresa tu pedido</li>
            <li>Envíos y entregas</li>
        </ul>
        <ul>
            <li>Ayuda</li>
            <li>Centro de ayuda</li>
            <li>Formas de pago</li>
            <li>Contacto</li>
        </ul>
        <ul>
            <li>Compra segura</li>
            <li>Términos y condiciones</li>
            <li>Política de privacidad</li>
        </ul>
        <ul class="social">
            <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
        </ul>
    </div>
</footer>
