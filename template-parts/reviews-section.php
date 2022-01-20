<section id="reviews" class="reviews">
  <div class="_container">

    <div class="slider-title d-flex">
      <h2 class="slider-title__title title">Отзывы клиентов</h2>
      <div class="swiper-button-block">
        <div class="swiper-button swiper-button-next reviews-sl-next"></div>
        <div class="swiper-button swiper-button-prev reviews-sl-prev"></div>
      </div>
    </div>

    <div class="reviews-sl slider _swiper">
    <? 
			$reviews = carbon_get_theme_option('complex_reviews');

				if ($reviews) {
					$reviewsIndex = 0;
				foreach ($reviews as $item) {
		?>
      <div class="reviews-sl__slider-slide slider-slide">
        <img src="<?php echo wp_get_attachment_image_src($item['img_reviews'], 'large')[0]; ?>" alt="">				
      </div>
		<?
			$reviewsIndex++; 
					}
				}
		?>
  </div>
</section>