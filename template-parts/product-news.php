<div class="news__column">
  <a href="<?echo get_the_permalink(get_the_ID());?>" class="card-news">
		<div class="card-news__img">
		  <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
		</div>
		<div class="card-news__descp">
			<p class="card-news__descp-date"><?php the_time('d.m.y'); ?></p>
			<h4 class="card-news__descp-title"><? the_title();?></h4>
			<p class="card-news__descp-subtitle"><?php the_excerpt(); ?></p>
		</div>
  </a>
</div>