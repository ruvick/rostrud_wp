<?php 

/*
Template Name: Страница Охрана труда
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

    <main class="page">

      <section id="security" class="security page-recurring">
        <div class="_container">

          <p id="breadcrumbs"> 
            <span>
              <span>
                <a href="index.html">
                  Главная
                </a> /
                <a href="services.html">
                  Услуги
                </a> /
                <a href="#">
                  Охрана труда 
                </a> /
                <span class="breadcrumb_last" aria-current="page">
                 Аутсорсинг охраны труда
               </span>
             </span>
           </span>
         </p>

         <h1 class="security__title title">Аутсорсинг по охране труда</h1>

         <div class="security__wrap d-flex">

          <div class="security__column">
            <div class="security__column-img">
              <picture><source srcset="<?php echo get_template_directory_uri();?>/img/security.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/security.jpg?_v=1639488964893" alt=""></picture>
            </div>
          </div>

          <div class="security__column">
            <div class="security__column-descp">
              <p class="security__column-descp-text">
                <span>Охрана труда</span> – кропотливая ежедневная работа, требующая определенной квалификации, а также полного погружения в процесс. 
                Зачастую руководители небольших организаций или берут этот груз на себя, или вовсе пренебрегают этой работой – по причине 
                недостаточного знания законодательства, недооценки финансовых последствий и рисков возможных происшествий, отсутствия времени 
                и т.д. В более крупных организациях встает вопрос либо о зачислении в штат собственного специалиста по охране труда, либо о 
                передаче функций охраны труда на аутсорсинг(полный или частичный). Как правило, после подсчета всех расходов 
                (создание рабочего места, обучения, зарплаты, оплаты социального пакета, налогов и т.д.), компании приходят к выводу, 
                что аутсорсинг охраны труда – это значительная экономия средств организации.
              </p>
              <div class="security__consult-block">
                <h4 class="security__consult-block-title">
                  Остались вопросы по услуге? <br> 
                  Нужна консультация специалиста?
                </h4>
                <div class="security__consult-block-btn d-flex">
                  <a href="#callback" class="security__consult-block-btn-link btn _popup-link">Заказать звонок</a>
                  <a href="#callback" class="security__consult-block-btn-link btn _popup-link">Оставить заявку</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <h2 class="security__title title">Тарифные планы</h2>

        <div class="tariff-plans__wrap">

          <div class="tariff-plans__column">
            <div class="tariff-plans__card">
              <div class="tariff-plans__card-header">
                <h4 class="tariff-plans__card-header-title">Офис</h4>
              </div>
              <div class="tariff-plans__card-descp">
                <p class="tariff-plans__card-descp-price">от <span>10 000</span> ₽/мес.</p>
                <p class="tariff-plans__card-descp-text">Только офисные работники (служащие) численностью до 50 без рабочих и линейных ИТР</p>
              </div>
              <div class="tariff-plans__card-btn">
                <div class="tariff-plans__card-btn-line"></div>
                <a href="#" class="tariff-plans__card-btn-link btn">Подробнее</a>
              </div>
            </div>
          </div>

          <div class="tariff-plans__column">
            <div class="tariff-plans__card">
              <div class="tariff-plans__card-header">
                <h4 class="tariff-plans__card-header-title">Офис +</h4>
              </div>
              <div class="tariff-plans__card-descp">
                <p class="tariff-plans__card-descp-price">от <span>14 000</span> ₽/мес.</p>
                <p class="tariff-plans__card-descp-text">В основе офисные работники, обслуживающие офис работники, линейные ИТР общей численностью до 50</p>
              </div>
              <div class="tariff-plans__card-btn">
                <div class="tariff-plans__card-btn-line"></div>
                <a href="#" class="tariff-plans__card-btn-link btn">Подробнее</a>
              </div>
            </div>
          </div>

          <div class="tariff-plans__column">
            <div class="tariff-plans__card">
              <div class="tariff-plans__card-header">
                <h4 class="tariff-plans__card-header-title">Малое <br> предприятие 50</h4>
              </div>
              <div class="tariff-plans__card-descp">
                <p class="tariff-plans__card-descp-price">от <span>18 000</span> ₽/мес.</p>
                <p class="tariff-plans__card-descp-text">Малые предприятия и организации разных отраслей с общей численностью работников до 50</p>
              </div>
              <div class="tariff-plans__card-btn">
                <div class="tariff-plans__card-btn-line"></div>
                <a href="#" class="tariff-plans__card-btn-link btn">Подробнее</a>
              </div>
            </div>
          </div>

          <div class="tariff-plans__column">
            <div class="tariff-plans__card">
              <div class="tariff-plans__card-header">
                <h4 class="tariff-plans__card-header-title">Малое <br> предприятие 100</h4>
              </div>
              <div class="tariff-plans__card-descp">
                <p class="tariff-plans__card-descp-price">от <span>22 000</span> ₽/мес.</p>
                <p class="tariff-plans__card-descp-text">Малые предприятия и организации разных отраслей с общей численностью работников от 50 до 100</p>
              </div>
              <div class="tariff-plans__card-btn">
                <div class="tariff-plans__card-btn-line"></div>
                <a href="#" class="tariff-plans__card-btn-link btn">Подробнее</a>
              </div>
            </div>
          </div>

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
        <p class="security__notification">Оказание вышеуказанных услуг осуществляется на основании Уведомления о внесении в реестр аккредитованных организаций, оказывающих услуги в области охраны труда за №3020 аккредитации в Минтруде России (письмо от 23.08.2013 № 15-2-2341).</p>

      </div>
    </section>

    <?php get_template_part('template-parts/reviews-section');?>

  </main>

<?php get_footer(); 
