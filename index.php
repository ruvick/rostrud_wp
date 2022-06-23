<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section id="slider-main" class="slider-main">

		<div class="slider-bg-wrap">  
			<div class="slider-bg _swiper">
			<?
			$pict = carbon_get_theme_option('slider_index');
			if ($pict) {
				$pictIndex = 0;
				foreach ($pict as $item) {
					?>
				<div class="slider-bg__slide slider__slide slider-main__slide" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
					<div class="nuar_blk"></div>
					<div class="slider-bg__container _container"> 
					<? if (!empty($item['slider_title'])) { ?>
							<h1 class="slider-bg__title"><? echo $item['slider_title']; ?></h1>
							<p class="slider-bg__subtitle"><? echo $item['slider_subtitle']; ?></p>
						<? } ?>
					</div>
				</div>
					<?
					$pictIndex++;
				}
			}
			?> 
			</div>
			<div class="slider-bg__swiper-button-block swiper-button-block"> 
				<div class="_container">
					<div class="swiper-button swiper-button-next slider-main-next"></div>
					<div class="swiper-button swiper-button-prev slider-main-prev"></div>
				</div>
			</div>
		</div>

	</section>

	<section id="about" class="about">
		<div class="_container">
			<? $abouttc = carbon_get_theme_option("about_home");
				if (!empty($abouttc)) { ?>
				<p class="company__tagline"></p>
				<h2 class="about__title"><?php echo carbon_get_theme_option('about_home_title'); ?></h2>
				<div class="about__subtitle">
					<p><? echo $abouttc; ?></p>
				</div>
			<? } ?>

			<!-- <div class="about__row d-flex">
				<div class="about__column-text">
					<h2 class="about__column-text-title">
						Наша цель - долгосрочные <br>
						партнерские отношения
					</h2>
					<p class="about__column-text-subtitle">
						Мы динамично развивающаяся компания в сфере охраны труда и промышленной безопасности.
						Наше быстрое развитие основывается за счет команды профессионалов в сфере безопасности труда.
					</p>
				</div>
				<div class="about__column-icon">
					<ul class="about__column-icon-list d-flex">
						<li class="about__column-icon-list-item about__column-icon-list-item_1">Гарантии качества</li>
						<li class="about__column-icon-list-item about__column-icon-list-item_2">Профессионализм</li>
						<li class="about__column-icon-list-item about__column-icon-list-item_3">Профессионализм</li>
						<li class="about__column-icon-list-item about__column-icon-list-item_4">Работа по договору</li>
						<li class="about__column-icon-list-item about__column-icon-list-item_5">Большой опыт работы</li>
					</ul>
				</div>
			</div> -->

		</div>
	</section>

	<section id="advant" class="advant">
		<div class="_container">
			<h2 class="advant__title title">Наши преимущества</h2>
			<div class="advant__wrap d-flex">

				<div class="advant__column">
					<div class="advant__card">
						<div class="advant__card-name d-flex">
							<div class="advant__card-icon advant__card-icon_01"></div>
							<h4 class="advant__card-title">
								Качественно оказание <br>
								услуг
							</h4>
						</div>
						<p class="advant__card-text">
							Работаем на качество, в полном соответствии с актуальными изменениями в Законодательстве РФ, 
							что минимизирует риск возникновения штрафных санкций контролирующих структур.
						</p>
					</div>
				</div>

				<div class="advant__column">
					<div class="advant__card">
						<div class="advant__card-name d-flex">
							<div class="advant__card-icon advant__card-icon_02"></div>
							<h4 class="advant__card-title">
								Гибкая ценовая <br>
								политика
							</h4>
						</div>
						<p class="advant__card-text">
							Обеспечиваем гибкое ценообразование и систему бонусов по индивидуальному согласованию с Заказчиком 
						</p>
					</div>
				</div>

				<div class="advant__column">
					<div class="advant__card">
						<div class="advant__card-name d-flex">
							<div class="advant__card-icon advant__card-icon_03"></div>
							<h4 class="advant__card-title">
								Гарантии и ответственность
							</h4>
						</div>
						<p class="advant__card-text">
							На договорной основе устанавливаем нашу ответственность за некачественное или несвоевременное оказание услуг
						</p>
					</div>
				</div>

				<div class="advant__column">
					<div class="advant__card">
						<div class="advant__card-name d-flex">
							<div class="advant__card-icon advant__card-icon_04"></div>
							<h4 class="advant__card-title">
								Опыт и Профессионализм
							</h4>
						</div>
						<p class="advant__card-text">
							Штатные специалисты имеют подтвержденную документами, постоянно повышаемую квалификацию и огромный опыт оказания заявленных услуг 
						</p>
					</div>
				</div>

				<div class="advant__column">
					<div class="advant__card">
						<div class="advant__card-name d-flex">
							<div class="advant__card-icon advant__card-icon_05"></div>
							<h4 class="advant__card-title">
								Минимальный риск <br>
								для бизнеса 
							</h4>
						</div>
						<p class="advant__card-text">
							Работа с нами снизит нагрузку на работодателя и позволит переложить часть 
							ответственности на плечи профессионалов своего дела
						</p>
					</div>
				</div>

				<div class="advant__column">
					<div class="advant__card">
						<div class="advant__card-name d-flex">
							<div class="advant__card-icon advant__card-icon_06"></div>
							<h4 class="advant__card-title">
								Наличие <br>
								аккредитации
							</h4>
						</div>
						<p class="advant__card-text">
							ООО «ЦТПБ «УНИКАПРОФ» аккредитована в Министерстве труда на право оказания услуг по охране труда. Номер в реестре №3020
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="licenses" class="licenses">
		<div class="_container">

			<div class="slider-title d-flex">
				<h2 class="slider-title__title title">Лицензии и аккредитации</h2>
				<div class="swiper-button-block">
					<div class="swiper-button swiper-button-next licenses-sl-next"></div>
					<div class="swiper-button swiper-button-prev licenses-sl-prev"></div>
				</div>
			</div>

			<div class="licenses-sl slider _swiper">
				<? 
					$licenses = carbon_get_theme_option('complex_licenses');

					if ($licenses) {
						$licensesIndex = 0;
					foreach ($licenses as $item) {
			?>
				<a href="<?php echo wp_get_attachment_image_src($item['img_licenses'], 'large')[0]; ?>" data-lightbox="gallery" class="licenses-sl__slider-slide slider-slide">
					<img src="<?php echo wp_get_attachment_image_src($item['img_licenses'], 'large')[0]; ?>" alt="">				
				</a>
			<?
				$licensesIndex++; 
					}
				}
			?>
		</div>
	</section>

						<section id="clients" class="clients">
							<div class="_container">

								<div class="slider-title d-flex">
									<h2 class="slider-title__title title">Наши клиенты и партнеры</h2>
									<div class="swiper-button-block">
										<div class="swiper-button swiper-button-next clients-sl-next"></div>
										<div class="swiper-button swiper-button-prev clients-sl-prev"></div>
									</div>
								</div>

								<div class="clients-sl slider _swiper">
									<? 
										$clients = carbon_get_theme_option('complex_clients');

										if ($clients) {
											$clientsIndex = 0;
										foreach ($clients as $item) {
									?>
										<div class="clients-sl__slider-slide slider-slide">
											<div class="clients-sl__img">
												<img src="<?php echo wp_get_attachment_image_src($item['img_clients'], 'large')[0]; ?>" alt="">				
											</div>
										</div>
									<?
										$clientsIndex++; 
											}
										}
									?>
							</div>
						</section>

										<section id="news" class="news">
											<div class="_container">
												<h2 class="news__title title">Новости</h2>

												<div class="news__wrap">
												<?php 
													$posts = get_posts( array(
														'numberposts' => 3,
														'category'    => 3,
														'orderby'     => 'date',
														// 'orderby'     => '612,616,626',
														'order'       => 'DESC',
														// 'include'     => '612,608,606',
														'include'     => array(),
														'exclude'     => array(),
														'meta_key'    => '',
														'meta_value'  =>'',
														'post_type'   => 'post',
														'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
														) );

													$result = wp_get_recent_posts( $args );

													foreach( $posts as $post ){
												?>
												<?php get_template_part('template-parts/product-news');?>	
												<?php 
													} 
												?>
												</div>

											</div>
										</section>

    						<?php get_template_part('template-parts/reviews-section');?>

							</main>

		<?php get_footer(); ?> 