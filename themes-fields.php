<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field; 

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Главная', array(
      // Field::make( 'image', 'as_logo', 'Логотип в шапке')
      //   ->set_width(30),
      // Field::make( 'image', 'as_logo_white', 'Логотип в подвале')
      //   ->set_width(30),
      Field::make('text', 'about_home_title', 'Заголовок на главной'),
      Field::make('rich_text', 'about_home', 'О нашей компании')
    ))
    ->add_tab('Слайдер', array(
      Field::make('complex', 'slider_index', 'Слайдер на главной')
        ->add_fields(array(
          Field::make('image', 'slider_img', 'Картинка слайдера')
            ->set_width(50),
          Field::make('text', 'slider_title', 'Заголовок слайдера')
            ->set_width(50),
          Field::make('text', 'slider_subtitle', 'Подзаголовок слайдера')
            ->set_width(50),
          // Field::make('text', 'slider_link', 'Ссылка в кнопке')
          //   ->set_width(50),
          // Field::make('text', 'slider_link_text', 'Текст в кнопке')
          //   ->set_width(50),
        ))
    ))
    ->add_tab('Лицензии и аккредитации', array( 
      Field::make('complex', 'complex_licenses', 'Лицензии и аккредитации на главной')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_licenses', 'Фото')
        ->set_width(30),
        // Field::make('text', 'text_promo', 'Текст')   
        // ->set_width(30),
        ))
    ))
    ->add_tab('Клиенты и партнеры', array( 
      Field::make('complex', 'complex_clients', 'Клиенты и партнеры на главной')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_clients', 'Фото')
        ->set_width(30),
        // Field::make('text', 'text_promo', 'Текст')   
        // ->set_width(30),
        ))
    ))
    ->add_tab('Отзывы клиентов', array( 
      Field::make('complex', 'complex_reviews', 'Отзывы клиентов на главной')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_reviews', 'Фото')
        ->set_width(30),
        // Field::make('text', 'text_promo', 'Текст')   
        // ->set_width(30),
        ))
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_company', __( 'Название' ) )
          ->set_width(50),
        Field::make( 'text', 'as_schedule', __( 'Режим работы' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phones_1', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон дополнительный' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_kpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bik', __( 'БИК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_rs', __( 'Р/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ks', __( 'К/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bank', __( 'БАНК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'instagram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_face', __( 'facebook' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_telegr', __( 'telegram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'whatsapp' ) )
          ->set_width(50),
        Field::make('text', 'map_point', 'Координаты карты')
          ->set_width(50),
        Field::make('text', 'text_map', 'Текст метки карты')
          ->set_width(50),
    ) );

  Container::make('post_meta', 'pag-subsidiary', 'Характеристики записи')
  ->show_on_template(array('pag-subsidiary.php'))
      ->add_fields(array(   
      Field::make( 'complex', 'tariff_complex', "Тарифные планы" )
        // ->set_max(2) // Можно будет выбрать только 2 поста
        ->add_fields( array(
          Field::make('text', 'tariff_complex_name', 'Тарифный план')->set_width(30),
          Field::make('text', 'tariff_complex_price', 'Стоимость')->set_width(30),
          Field::make('text', 'tariff_complex_price_param', 'Параметр стоимости')->set_width(30),
          Field::make('text', 'tariff_complex_descp', 'Описание тарифного плана')->set_width(50)      
      ) ),
      Field::make( 'complex', 'list_descp_complex', "Списки с описанием" )
      ->add_fields( array(
        Field::make('text', 'list_descp_complex_title', 'Заголовок списка')->set_width(100),
        Field::make('rich_text', 'list_descp_complex_left', 'Список слева')->set_width(50),       
        Field::make('rich_text', 'list_descp_complex_right', 'Список справа')->set_width(50)     
      ) ),
      Field::make('text', 'footnote_text', 'Текст сноска')->set_width(100),
      Field::make('rich_text', 'subsid_descp', 'Описание')->set_width(100)
  ));

    // Container::make('post_meta', 'ultra_product_cr', 'Характеристики товара')
    // ->show_on_post_type(array( 'ultra'))
    //   ->add_fields(array(   
    //   Field::make('textarea', 'offer_smile_descr', 'Краткое описание')->set_width(100),
    //   // Field::make('text', 'offer_name', 'Название товара')->set_width(30),
    //   // Field::make('text', 'offer_label', 'Метка на товаре')->set_width(30),
    //   Field::make('text', 'offer_weight', 'Вес')->set_width(50),
    //   // Field::make('text', 'offer_allsearch', 'Все артикулы для поиска')->set_width(50),
    //   // Field::make('text', 'offer_siries', 'Серия (для сопутствующих)')->set_width(30),
    //   Field::make('text', 'offer_sticker', 'Стикер')->set_width(50), 
    //   Field::make('text', 'offer_price', 'Цена')->set_width(50),
    //   Field::make('text', 'offer_number', 'Колличество')->set_width(50),
    //   Field::make('text', 'offer_sku', 'Артикул (Базовый)')->set_width(50),
    //   // Field::make('text', 'offer_benefit', 'Выгода')->set_width(50),
    //   Field::make('rich_text', 'prod_descrip', 'Описание товара')->set_width(100),
    //   Field::make('text', 'offer_calories', 'Калории')->set_width(50),
    //   Field::make('text', 'offer_protein', 'Белки')->set_width(50),
    //   Field::make('text', 'offer_fats', 'Жиры')->set_width(50),
    //   Field::make('text', 'offer_carbohyd', 'Углеводы')->set_width(50),

      // Field::make( 'complex', 'offer_cherecter', "Характеристики товара табы, левая колонка" )
      // ->add_fields( array(
      //   Field::make( 'text', 'tab_name', 'Наименование параметра' )->set_width(50),
      //   Field::make( 'text', 'tab_val',  'Значение' )->set_width(50),
      // ) ),
      // Field::make( 'complex', 'offer_cherecter-r', "Характеристики товара табы, правая колонка" )
      // ->add_fields( array(
      //   Field::make( 'text', 'tab_name-r', 'Наименование параметра' )->set_width(50),
      //   Field::make( 'text', 'tab_val-r',  'Значение' )->set_width(50),
      // ) ),
      // Field::make('rich_text', 'acses_text', 'Аксесуары')->set_width(100),
      
      // Field::make('text', 'offer_old_price', 'Старая цена (Базовая)')->set_width(50),
      
      // Field::make( 'complex', 'offer_modification', "Модификация товара" )
      // ->add_fields( array(
      //   Field::make('text', 'mod_name', 'Наименование модификации' )->set_width(20),
      //   Field::make('text', 'mod_sku', 'Артикул модификации')->set_width(20),
      //   Field::make('text', 'mod_price', 'Цена модификации')->set_width(20),
      //   Field::make('text', 'mod_old_price', 'Старая цена модификации')->set_width(20),
      //   Field::make('text', 'mod_picture_id', 'Изображения модификации')->set_width(20),
      // ) ),
        
      // Field::make( 'complex', 'offer_picture', "Галерея товара" )
      // ->add_fields( array(
      //   Field::make('image', 'gal_img', 'Изображение' )->set_width(30),
      //   Field::make('text', 'gal_img_sku', 'ID для модификации')->set_width(30),
      //   Field::make('text', 'gal_img_alt', 'alt и title')->set_width(30)        
      // ) ),

    //   Field::make('complex', 'complex_analogs', 'Ближайшие аналоги')
    //     ->set_max(4) // Можно будет выбрать только 5 постов
    //   ->add_fields(array(
    //     Field::make('image', 'img_analogs', 'Фото')
    //       ->set_width(33),
    //     Field::make('text', 'price_analogs', 'Цена') 
    //       ->set_width(33),
    //     Field::make('text', 'link_analogs', 'Ссылка на товар') 
    //       ->set_width(33),
    // ))

  // ));

  // Container::make('post_meta', 'single-galery', 'Характеристики записи')
  // ->show_on_template(array('single-galery.php'))
  //     ->add_fields(array(   
  //     Field::make('text', 'number_img', 'Колличество изображений') 
  //       ->set_width(33),
  //     Field::make( 'complex', 'galery_prod_complex', "Сопутствующие товары" )
  //       ->set_max(2) // Можно будет выбрать только 2 поста
  //       ->add_fields( array(
  //         Field::make('image', 'galery_works_img', 'Изображение' )->set_width(30),
  //         Field::make('text', 'galery_prod_title', 'Название товара')->set_width(30),
  //         Field::make('text', 'galery_prod_price', 'Стоимость товара')->set_width(50),
  //         Field::make('text', 'galery_prod_link', 'Ссылка на товар')->set_width(50)      
  //     ) ),
  //     Field::make( 'complex', 'galery_works', "Галерея наших работ" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_works_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_works_img_sku', 'ID для модификации')->set_width(30),
  //       Field::make('text', 'galery_works_img_alt', 'alt и title')->set_width(30)        
  //     ) ),
  //     Field::make( 'complex', 'galery_fabrics', "Галерея тканей" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_fabrics_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_fabrics_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  // ));

  // Container::make('post_meta', 'page-gallery-tkaney-obivki-sidenii', 'Характеристики записи')
  // ->show_on_template(array('page-gallery-tkaney-obivki-sidenii.php'))
  //     ->add_fields(array(   
  //     Field::make( 'complex', 'galery_velours', "Велюр" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_velours_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_velours_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  //     Field::make( 'complex', 'galery_eco', "Эко-Кожа" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_eco_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_eco_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  //     Field::make( 'complex', 'galery_leather', "Кожа" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_leather_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_leather_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  // ));

?>