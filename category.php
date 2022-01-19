<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

<main class="page">
  <section class="content page-recurring"> 
		<div class="_container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

				<h1 class="services__title title"><? single_cat_title(); ?></h1>

        <div class="news__wrap">
        <?php
        while (have_posts()) :
          the_post();
          get_template_part('template-parts/product-news');
        endwhile;
        ?>
      </div>

		</div>
	</section>
</main>

<?php get_footer(); ?>  