{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="welcome">
        <div class="container">
            @include('partials.slider')
            @include('partials.search-box')
        </div>
    </div>
    <div class="products-content">
      {{-- @include('partials.featured-recommended') --}}
      @include('partials.featured-popular')
      {{-- @include('partials.featured-trending') --}}
      @include('partials.content-page')
      @endwhile
      <?php 
        $related_args = array(
          'orderby' => 'rand',
          'post_type' => 'post',
          'posts_per_page' => 4,
        );
        $related = new WP_Query();
        if( $related->have_posts() ) :
      ?>
      <div class="post-navigation">
        <h3>Te recomendamos leer</h3>
        <ul class="related">
          <?php while( $related->have_posts() ): $related->the_post(); ?>
          <li>
            <div class="related-image"><a href="{{ get_permalink() }}">{{ the_post_thumbnail() }}</a></div>
            <a href="{{ get_permalink() }}">{{ the_title() }}</a>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <aside class="sidebar">
          <a><img src="@asset('images/espacio1.png')"></a>
          <a><img src="@asset('images/espacio2.png')"></a>
          <a><img src="@asset('images/espacio3.png')"></a>
          <a><img src="@asset('images/espacio4.png')"></a>
          <a><img src="@asset('images/espacio5.png')"></a>
          <a><img src="@asset('images/espacio6.png')"></a>
      </aside>
    </div>
  @include('partials.useful-info')
@endsection
