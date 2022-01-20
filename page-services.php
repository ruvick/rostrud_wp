<?php 

/*
Template Name: Страница Услуги
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

    <main class="page">

      <section id="services" class="services page-recurring">
        <div class="_container">

        <?php
			    if ( function_exists('yoast_breadcrumb') ) {
				    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			    }
			  ?> 

          <h1 class="services__title title"><? the_title();?></h1>

          <div class="services__wrap">
          <?php
            $page_children = new WP_Query(
	            array(
		            'post_type' => 'page',
		            'post_parent' => '18',
		            'order'       => 'ASC',
	              )
              );
            if ($page_children->have_posts()) :
	          while ($page_children->have_posts()) : $page_children->the_post();
		      ?>
            <div class="services__column">
              <a href="<?php the_permalink(); ?>" class="card-bg" style="background-image: url(<?php the_post_thumbnail_url('full');?>)">
                <div class="card-bg__nuar_blk nuar_blk"></div>
                <h4 class="card-bg__title"><?php the_title(); ?></h4>
              </a>
            </div>
		      <?php
	          endwhile;
            endif;
            wp_reset_query();
          ?>
          </div>

        </div>
      </section>

    <?php get_template_part('template-parts/reviews-section');?>

    </main>

<?php get_footer(); 
