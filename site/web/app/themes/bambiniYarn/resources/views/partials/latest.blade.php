<article class="latest" @php(post_class())>
	<div class="feature-image">
		<?php if ( has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
	</div>
	<div class="text">
	@include('partials/entry-meta')
		<p class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></p>
		<div class="entry-summary">
		    <?php 
				$trimexcerpttwo = get_the_excerpt();
				$shortexcerpttwo = wp_trim_words($trimexcerpttwo, $num_words = 50, $more = '...');
				echo '<p>' . $shortexcerpttwo . '</p>';
			?>
			<!--php(the_excerpt())-->
		</div>
		 <!--div class="category-list"><p><?php foreach((get_the_category()) as $category) { echo $category->cat_name . '</p><p>'; } ?></p></div-->
	</div>
</article>
