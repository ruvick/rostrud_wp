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
                <a href="<?php echo wp_get_attachment_image_src($item['img_licenses'], 'large')[0]; ?>" class="licenses__img" data-lightbox="gallery">
                  <img src="<?php echo wp_get_attachment_image_src($item['img_licenses'], 'large')[0]; ?>" alt="">
                </a>
              </div>
			      <?
				      $licensesIndex++;  
					      }
				      }
			      ?>
          </div>

        </div>
      </section>

      <section id="reviews" class="reviews">
        <div class="_container">

        <h2 class="services__title title">Отзывы клиентов</h2>

        <div class="licenses__wrap">
          <? 
            $reviews = carbon_get_theme_option('complex_reviews');
              if ($reviews) {
            $reviewsIndex = 0;
              foreach ($reviews as $item) {
          ?>
            <div class="licenses__column">
              <a href="<?php echo wp_get_attachment_image_src($item['img_reviews'], 'large')[0]; ?>" class="licenses__img" data-lightbox="gallery">
                <img src="<?php echo wp_get_attachment_image_src($item['img_reviews'], 'large')[0]; ?>" alt="">
              </a>
            </div>
          <?
            $reviewsIndex++;  
              }
            }
          ?>
        </div>
      </div>
    </section>

    </main>

<?php get_footer(); 
