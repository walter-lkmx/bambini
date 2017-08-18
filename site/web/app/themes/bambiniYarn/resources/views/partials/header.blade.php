<header class="banner">
    <div class="container">
        {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
        <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.svg')" alt="{{ get_bloginfo('name', 'display') }}"></a>
        <nav class="nav-primary">
            {{-- @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!} @endif --}}
            <a href="/tienda" title="">Catálogo</a>
            <a href="" title="">Ipsum item</a>
            <a href="" title="">Dolor item</a>
            <a href="" title="">Amet item</a>
        </nav>
        <nav class="nav-secondary">
            <a href="/mi-cuenta" title="">Mi cuenta</a>
             <a class="cart-info" href="<?php echo wc_get_cart_url(); ?>" title=""><i class="icons8-shopping-cart"></i>
            <span class="cart-items"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </span>
            </a> 
        </nav>                       
    </div>
</header>
