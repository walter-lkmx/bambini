@extends('layouts.app')

@section('content')
<!--if(have_posts())
endif-->
<div class="blog">
  @include('partials.page-header')
  @if (!have_posts())
    <div class="empty-posts">
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    </div>
  @endif
  @if(have_posts()) @php(the_post())
    @include ('partials.latest-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
  @endif
  <!--php (query_posts('posts_per_page=6&offset=1'))-->
  @while (have_posts()) @php(the_post()) 
    @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
  @endwhile
  <div class="posts-nav-prev">@php(previous_posts_link('<< Recientes'))</div>
  <div class="posts-nav-next">@php(next_posts_link('Antiguos >>'))</div>
</div>
@php(query_posts('posts_per_page=6'))
<aside class="sidebar @if(!have_posts()) display-none @endif">
  <div>
  <p class="recommended">Lecturas recomendadas</p>
    @php(query_posts('posts_per_page=5&orderby=rand'))
    <ol>
    @while (have_posts()) @php(the_post())
      <li><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></li>
    @endwhile
    </ol>
  </div>
  <div>
  <p>Categorías</p>
    <ul>
      @php(wp_list_categories('orderby&title_li='))
    </ul>
  </div>
    <!--div>
  <p>Autores</p>
    <ul>
      php(wp_list_authors('exclude_admin=0&optioncount=1'))
    </ul>
  </div-->

  <!--h5>Por etiqueta <i class="fa fa-list" style="vertical-align: baseline;"></i></h5>
  <div>
    <ul>
      <p>php(get_the_tag_list())</p>
    </ul>
  </div-->
  <!--div>
  <p>Fechas</p>
    <ul>
      php(wp_get_archives('type=monthly'))
    </ul>
  </div-->  
</aside>
@endsection
