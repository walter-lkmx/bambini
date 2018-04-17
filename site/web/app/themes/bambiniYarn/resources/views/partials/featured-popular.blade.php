<div class="featured-products">
    <h3>Lo más popular</h3>
    <?php
          echo do_shortcode('[featured_products per_page="6"]');
    ?>

</div>
<div class="featured-products">
    <h3>Te recomendamos</h3>
    <?php
          echo do_shortcode('[product_tag tags="te-recomendamos" per_page="6"]');
    ?>

</div> 
<div class="featured-products">
    <h3>Tendencias</h3>
    <?php
          echo do_shortcode('[product_tag tags="tendencias" per_page="6"]');
    ?>

</div>