    <header id="header" class="header">

      <div class="header__navigation">
        <div class="header__navigation-container _container">
          <a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>

          <? $adr = carbon_get_theme_option("as_address"); if (!empty($adr)){?><p class="header__address"><? echo $adr; ?></p><?}?>

          <? $mail = carbon_get_theme_option("as_email");
			      if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="header__mail"><? echo $mail; ?></a><? } ?>

          <div class="header__soc-block">
            <div class="header__soc-block-icon soc-block-icon">
              <a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="soc-block-icon__link soc-block-icon__link_2"></a>
	            <a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="soc-block-icon__link soc-block-icon__link_3"></a>
	            <a href="<?php echo carbon_get_theme_option('as_whatsapp'); ?>" class="soc-block-icon__link soc-block-icon__link_4"></a>
            </div>
            <p class="header__soc-block-text">МЫ В СОЦСЕТЯХ</p>
          </div>

          <div class="header__contacts d-flex"> 
          <? $tel = carbon_get_theme_option("as_phones_1"); 
				    if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header__phone"><? echo $tel; ?></a><?}?> 
            <a href="#callback" class="header__callback btn _popup-link">ЗАКАЗКАТЬ ЗВОНОК</a>
          </div>
          <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-phone-icon header__mob-phone-icon"></a>

          <div class="icon-menu" aria-label="Бургер меню">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>

      <div class="header__menu">
        <div class="header__menu-container _container">
      <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list header__menu-list d-flex',
      'container_class' => 'menu-list header__menu-list d-flex','container' => false )); ?> 
    </div>
  </div>

</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
    <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
  'container_class' => 'mob-menu__list','container' => false )); ?> 

  <div class="header__soc-block header__soc-block_mob">
    <div class="header__soc-block-icon soc-block-icon">
      <a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="soc-block-icon__link soc-block-icon__link_1"></a>
	    <a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="soc-block-icon__link soc-block-icon__link_2"></a>
	    <a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="soc-block-icon__link soc-block-icon__link_3"></a>
	    <a href="<?php echo carbon_get_theme_option('as_whatsapp'); ?>" class="soc-block-icon__link soc-block-icon__link_4"></a>
    </div>
    <p class="header__soc-block-text">МЫ В СОЦСЕТЯХ</p>
  </div>
  <a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div> 