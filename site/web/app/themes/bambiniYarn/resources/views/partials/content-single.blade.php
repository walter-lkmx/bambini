<article class="post" @php(post_class())>
  <header>
  @include('partials/entry-meta')
    <p class="entry-title">{{ get_the_title() }}</p>
  </header>
  <div class="entry-content">
    @php(the_post_thumbnail())
    @php(the_content())
    @php(wpb_set_post_views(get_the_ID()))
    <div class="category-list"><div><?php the_tags( 'Tags <br /><p class="label-tags">', '</p> <p class="label-tags">', '</p>' ); ?></p>
    <!--?php foreach((get_the_category()) as $category) { echo '<p class="label-tags">' . $category->cat_name . '</p> '; } ?--></div></div>
    <?php 
      $related_args = array(
        'orderby' => 'rand',
        'post_type' => 'post',
        'posts_per_page' => 4,
      );
      $related = new WP_Query( $related_args );
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
  </div>
  <!--footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer-->
  <!-- */php(comments_template('/partials/comments.blade.php'/* )) -->
</article>
