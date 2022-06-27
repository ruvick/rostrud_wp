<?php 

/*
Template Name: Страница Дочерняя услуги
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

    <main class="page">

      <section id="security" class="security page-recurring">
        <div class="_container">

        <?php
			    if ( function_exists('yoast_breadcrumb') ) {
				    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			    }
			  ?> 

         <h1 class="security__title title"><? the_title();?></h1>

         <div class="security__wrap d-flex">

          <div class="security__column">
            <div class="security__column-img"> 
              <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "full" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
            </div>
          </div>

          <div class="security__column">
            <div class="security__column-descp">
              <div class="security__column-descp-text"> 
                <?php the_content(); ?>
              </div>
              <div class="security__consult-block">
                <h4 class="security__consult-block-title">
                  Остались вопросы по услуге? <br> 
                  Нужна консультация специалиста?
                </h4>
                <div class="security__consult-block-btn d-flex">
                  <a href="#callback" class="security__consult-block-btn-link btn _popup-link">Заказать звонок</a>
                  <!-- <a href="#callback" class="security__consult-block-btn-link btn _popup-link">Оставить заявку</a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

        <? $tarif = carbon_get_post_meta(get_the_ID(),"tariff_complex");	
	        if (!empty($tarif)) { 
        ?>
          <h2 class="security__title title">Тарифные планы</h2> 
          <div class="tariff-plans__wrap">
        <?
          $tarifIndex = 0;
		        foreach ($tarif as $item) {
        ?>
          <div class="tariff-plans__column">
            <div class="tariff-plans__card">
              <div class="tariff-plans__card-header">
                <h4 class="tariff-plans__card-header-title"><? echo $item['tariff_complex_name']; ?></h4>
              </div>
              <div class="tariff-plans__card-descp">
                <p class="tariff-plans__card-descp-price">от <span><? echo $item['tariff_complex_price']; ?></span> ₽ <? echo $item['tariff_complex_price_param']; ?></p>
                <p class="tariff-plans__card-descp-text"><? echo $item['tariff_complex_descp']; ?></p>
              </div>
              <div class="tariff-plans__card-btn">
                <div class="tariff-plans__card-btn-line"></div>
                <a href="#callback" class="tariff-plans__card-btn-link btn _popup-link">Задать вопрос</a> 
              </div>
            </div>
          </div>
			  <?
			    $tarifIndex++; 
		      }
        ?>
          </div>
        <?
	        }
	      ?>

        <? 
		      $listDescp = carbon_get_post_meta(get_the_ID(),"list_descp_complex"); 
	          if ($listDescp) {
		      $listDescpIndex = 0;
		        foreach ($listDescp as $item) {
			  ?>
          <h2 class="security__title title"><? echo $item['list_descp_complex_title']; ?></h2>
          <div class="security__descp">
            <? echo $item['list_descp_complex_left']; ?>
            <? echo $item['list_descp_complex_right']; ?>
          </div>
			  <?
			    $listDescpIndex++; 
		        }
	        }
	      ?>
	      
        <? $subsid = carbon_get_post_meta(get_the_ID(),"subsid_descp");
	        if (!empty($subsid)) { ?>
            <div class="subsidiary-descp">
              <? echo $subsid; ?>
            </div>
        <? } ?>
        
        <? $footnote = carbon_get_post_meta(get_the_ID(),"footnote_text");
	        if (!empty($footnote)) { ?>
            <p class="security__notification"><? echo $footnote; ?></p>
        <? } ?>

      </div>
    </section>

    <?php get_template_part('template-parts/reviews-section');?>

  </main>

<?php get_footer(); 
