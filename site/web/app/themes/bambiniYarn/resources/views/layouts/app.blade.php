<!doctype html>
<html @php(language_attributes())> 
  @include('partials.head')
  <body @php(body_class()) style="display: none;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9JKVZS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
    <script src="https://use.typekit.net/afo1ciu.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </body>
</html>
