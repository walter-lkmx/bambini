<header class="banner">
    <div class="container">
        {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
        <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
        <nav class="nav-primary">
            {{-- @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!} @endif --}}
            <a class="menu-toggle" href="" title="">
                <div class="open">
                    <img src="@asset('images/menu-hamburger.svg')" alt="" />
                    <span>Comprar por</span>
                </div>
                <div class="close"> 
                    <img src="@asset('images/menu-close.svg')" alt="" />
                    <span>Cerrar menú</span> 
                </div>
            </a>
            {{-- <a href="/catalogo" title="">Catálogo</a> --}}
            <?php
                get_product_search_form();
            ?> 
        </nav>
        <nav class="nav-secondary">
            <a class="icon-account" href="/blog" title=""><i class="icons8-comments"></i></a>
            <a class="my-accountText" href="/blog" title="">Blog</a>
            <a class="icon-account" href="/mi-cuenta" title=""><i class="icons8-circled-female-user-2"></i></a>
            <a class="my-accountText" href="/mi-cuenta" title="">Mi cuenta</a>
             <a class="cart-info" href="<?php echo wc_get_cart_url(); ?>" title=""><i class="icons8-shopping-cart"></i>
            <span class="cart-items"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </span>
            </a>  
        </nav>       
        <div class="nice-menu">@php(dynamic_sidebar('sidebar-header')) </div>                
    </div>
</header>

