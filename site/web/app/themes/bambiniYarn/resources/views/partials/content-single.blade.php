<article class="post" @php(post_class())>
  <header>
  @include('partials/entry-meta')
    <p class="entry-title">{{ get_the_title() }}</p>
  </header>
  <div class="entry-content">
    @php(the_post_thumbnail())
    @php(the_content())
    <div class="category-list"><div><?php the_tags( 'Tags <br /><p class="label-tags">', '</p> <p class="label-tags">', '</p>' ); ?></p>
    <!--?php foreach((get_the_category()) as $category) { echo '<p class="label-tags">' . $category->cat_name . '</p> '; } ?--></div></div>
  </div>
  <!--footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer-->
  <!-- */php(comments_template('/partials/comments.blade.php'/* )) -->
</article>
