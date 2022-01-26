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
                <p class="tariff-plans__card-descp-price">от <span><? echo $item['tariff_complex_price']; ?></span> ₽/мес.</p>
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
	        }
	      ?>
        </div>
	      
        <h2 class="security__title title">Наша компания ООО «Рос.Труд» предлагает перевести Вашу компанию на Аутсорсинг по охране труда, что позволит:</h2>
        <div class="security__descp">
          <ul class="security__descp-list">
            <li class="security__descp-list-item">оптимизировать расходы;</li>
            <li class="security__descp-list-item">сконцентрироваться на основных видах деятельности;</li>
            <li class="security__descp-list-item">использовать передовой опыт в области охраны труда;</li>
          </ul>
          <ul class="security__descp-list">
            <li class="security__descp-list-item">получить гарантию качества выполняемых работ;</li>
            <li class="security__descp-list-item">снизить риски ответственности работодателя от нежелательных событий (аварий, несчастных случаев, инцидентов) до уровня приемлемых;</li>
          </ul>
        </div>

        <h2 class="security__title title">Аутсорсинг охраны труда в организации включает:</h2>
        <div class="security__descp">
          <ul class="security__descp-list">
            <li class="security__descp-list-item security__descp-list-item_dots">Разработку документации по охране труда и ведение нормативно-правовой базы по охране труда;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Документооборот по охране труда. Ведение документооборота, управление записями, ведение журналов;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Контроль и аудит. Оперативный контроль, оценка остаточных рисков заказчика в области охраны труда, корректирующие действия по результатам;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Консультирование по вопросам охраны труда;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Участие в работе комиссии по расследованию несчастных случаев, связанных с производством;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Работа с инспектирующими организациями. Взаимодействие и представление интересов компании при проведении проверок инспектирующих организаций, работа по предписаниям;</li>
          </ul>
          <ul class="security__descp-list">
            <li class="security__descp-list-item security__descp-list-item_dots">Взаимодействие с Фондом Социального Страхования (ФСС). Помощь в формировании пакета документов для возмещения до 20% от отчислений за прошедший год;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Организация Обучения сотрудников по охране труда, мерам пожарной безопасности (пож. минимум), электробезопасности и.т.д;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Организация проведения инструктажей по охране труда;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Организация проведения Профессиональных медицинских осмотров;</li>
            <li class="security__descp-list-item security__descp-list-item_dots">Организация проведения Специальной оценки условий труда.</li>
          </ul>
        </div>

        <div class="subsidiary-descp">
          <?echo carbon_get_post_meta(get_the_ID(),"subsid_descp"); ?>
        </div>

        <p class="security__notification">Оказание вышеуказанных услуг осуществляется на основании Уведомления о внесении в реестр аккредитованных организаций, оказывающих услуги в области охраны труда за №3020 аккредитации в Минтруде России (письмо от 23.08.2013 № 15-2-2341).</p>

      </div>
    </section>

    <?php get_template_part('template-parts/reviews-section');?>

  </main>

<?php get_footer(); 
