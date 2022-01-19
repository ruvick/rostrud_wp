<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon footer__logo"></a>

			<ul class="footer__menu">
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Главная</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Наши клиенты и партнеры</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">О нас</a></li>
				<li class="footer__menu-item"><a href="services.html" class="footer__menu-item-link">Услуги</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Акции</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Отзывы</a></li>
				<li class="footer__menu-item"><a href="security.html" class="footer__menu-item-link">Аккредитации и лицензии</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Контакты</a></li>
			</ul>
			<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'footer__menu',
      'container_class' => 'footer__menu','container' => false )); ?>  -->

			<div class="footer__address">
				<? $adr = carbon_get_theme_option("as_address"); if (!empty($adr)){?><p class="footer__address-text"><? echo $adr; ?></p><?}?>
				<? $mail = carbon_get_theme_option("as_email");
			    if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="footer__address-email"><? echo $mail; ?></a><? } ?>
			</div>

			<div class="footer__contacts">
				<? $tel = carbon_get_theme_option("as_phones_1"); 
				  if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer__contacts-phone"><? echo $tel; ?></a><?}?> 
				<? $tel2 = carbon_get_theme_option("as_phone_2"); 
				  if (!empty($tel2)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel2); ?>" class="footer__contacts-phone"><? echo $tel2; ?></a><?}?> 
				<a href="#callback" class="footer__popup-link btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
			</div>

		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>