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
            
            <div class="services__column">
              <div class="card-bg services__card-bg-1">
                <div class="card-bg__nuar_blk nuar_blk"></div>
                <h4 class="card-bg__title">Услуги в сфере охраны труда</h4>
              </div>
            </div>

            <div class="services__column">
              <div class="card-bg services__card-bg-2">
                <div class="card-bg__nuar_blk nuar_blk"></div>
                <h4 class="card-bg__title">Пожарная безопасность</h4>
              </div>
            </div>

            <div class="services__column">
              <div class="card-bg services__card-bg-3">
                <div class="card-bg__nuar_blk nuar_blk"></div>
                <h4 class="card-bg__title">Электробезопасность</h4>
              </div>
            </div>

            <div class="services__column">
              <div class="card-bg services__card-bg-4">
                <div class="card-bg__nuar_blk nuar_blk"></div>
                <h4 class="card-bg__title">Промышленная безопасность</h4>
              </div>
            </div>

            <div class="services__column">
              <div class="card-bg services__card-bg-5">
                <div class="card-bg__nuar_blk nuar_blk"></div>
                <h4 class="card-bg__title">Гражданская оборона</h4>
              </div>
            </div>

            <div class="services__column">
              <div class="card-bg services__card-bg-6">
                <div class="card-bg__nuar_blk nuar_blk"></div>
                <h4 class="card-bg__title">Кадровое делопроизводство</h4>
              </div>
            </div>

          </div>

        </div>
      </section>

    <?php get_template_part('template-parts/reviews-section');?>

    </main>

<?php get_footer(); 
