{{--
  Template Name: Archives
--}}

@extends('layouts.app')

@section('content') 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
          <article @php(post_class())>
  <header>
    <h4 class="entry-title">@php(the_title())</h4>
  </header>
  <div class="entry-summary">
  @php(the_content())
  <h5 class="widget-title">Por autor <i class="fa fa-user" style="vertical-align: baseline;"></i></h5>
  <div>
    <ul>
      <p>@php(wp_list_authors('exclude_admin=0&optioncount=1'))</p>
    </ul>
  </div>

  <h5 class="widget-title">Por categoría <i class="fa fa-list" style="vertical-align: baseline;"></i></h5>
  <div>
    <ul>
      <p>@php(wp_list_categories('orderby&title_li='))</p>
    </ul>
  </div>

  <h5 class="widget-title">Por etiqueta <i class="fa fa-list" style="vertical-align: baseline;"></i></h5>
  <div>
    <ul>
      <p>@php(get_the_tag_list())</p>
    </ul>
  </div>

  <h5 class="widget-title">Por fecha <i class="fa fa-calendar" style="vertical-align: baseline;"></i></h5>
  <div class="archives-by-month-section">
    <ul>
      <p>@php(wp_get_archives('type=monthly'))</p>
    </ul>
  </div>
  </div>

</article>
  @endwhile
@endsection
