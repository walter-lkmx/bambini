<article class="blog" @php(post_class())>
	<div class="feature-image">
		<?php if ( has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
	</div>
	<div class="text">
	<!--include('partials/entry-meta')-->
		<p class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></p>
		<div class="entry-summary">
			<?php 
				$trimexcerpt = get_the_excerpt();
				$shortexcerpt = wp_trim_words($trimexcerpt, $count = 20, $more = '...');
				echo '<p>' . $shortexcerpt . '</p>';
			?>
			<!--php(get_excerpt())-->
		</div>
		 <!--div class="category-list"><p><?php foreach((get_the_category()) as $category) { echo $category->cat_name . '</p><p>'; } ?></p></div-->
	</div>
</article>
