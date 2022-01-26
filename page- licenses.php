<?php 

/*
Template Name: Страница Аккредитации и лицензии
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

          <div class="licenses__wrap">
            <? 
					    $licenses = carbon_get_theme_option('complex_licenses');
					      if ($licenses) {
						  $licensesIndex = 0;
					      foreach ($licenses as $item) {
			      ?>
              <div class="licenses__column">
                <div class="licenses__img">
                  <img src="<?php echo wp_get_attachment_image_src($item['img_licenses'], 'large')[0]; ?>" alt="">
                </div>
              </div>
			      <?
				      $licensesIndex++; 
					      }
				      }
			      ?>
          </div>

        </div>
      </section>

    <?php get_template_part('template-parts/reviews-section');?>

    </main>

<?php get_footer(); 
