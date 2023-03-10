<?php
/*
Template Name: landing-tuya
Template Post Type: post, page
*/
?>


<!DOCTYPE html>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Туя Смарагд</title>
    <meta name="description" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <link rel="icon" href="<?php bloginfo('template_url');?>/images/faveicon.png" />
    <meta property="og:image" content="images/preview.jpg" />
    
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-reboot.min.css" />	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mains.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />

  <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.6.0.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/commons.js" defer></script>

  </head>

  <body>
    <div class="header_top">
      <div class="container">
        <div class="menu_top flex">
          <div>
            <a href="#"
              ><img src="<?php bloginfo('template_url');?>/images/Logo.svg"class="logo image"	alt="<?php echo get_bloginfo('name'); ?>"></a>
          </div>
          <div class="tel_top">
            <a href="tel:+380672948252">
            <img src="<?php bloginfo('template_url');?>/images/tel.svg"	alt="<?php echo get_bloginfo('name'); ?>"> +380672948252
            </a>&nbsp; &nbsp;
            <a href="tel:+38993962310">
             +38993962310
            </a>
          </div>
          <div class="menu_items flex">

            <a href="#advantages_top" class="items">Переваги</a>
            <a href="#section-work" class="items">Про нас</a>
            <a href="#catalog_two" class="items">Каталог</a>
            <a href="#reviews" class="items">Відгуки</a>
          </div>
        </div>
      </div>
    </div>
    <section class="advantages_top" >
      <div class="container">
        <div class="header grid">
          <div class="header_left flex">
            <h1 class="smaragd flex">Туя Смарагд</h1>
            <ul class="advantages">
              <li>
                Пірамідальна крона з ідеальною формою навіть без підрізки.
              </li>
              <li>Ніжно-зелене соковите забарвлення.</li>
              <li>Невимоглива та морозостійка.</li>
            </ul>
            <a target="_blank" href="https://www.nashsad.co.ua/contact/#cont"><button class="button"> Замовити</button></a>  
          </div>
          <div class="header_right flex">
          <img src="<?php bloginfo('template_url'); ?>/images/Thuja.png"
														alt="<?php echo get_bloginfo('name'); ?>">
          </div>
        </div>
      </div>
    </section>
    <section class="catalog" id="advantages_top">
      <div class="container">
        <div class="catalog_items grid">
          <div class="item item_number item-img grid">
          <img src="<?php bloginfo('template_url'); ?>/images/Thuja1.png"
														alt="<?php echo get_bloginfo('name'); ?>">
          </div>
          <div class="item_list item_number item grid">
            <h2>Переваги використання туї</h2>
            <ul>
              <li>Вічнозелена рослина;</li>
              <li>Приємний декоративний вигляд;</li>
              <li>Має приємний освіжаючий аромат;</li>
              <li>Збагачує повітря киснем, насіченим фітонцидами;</li>
            </ul>
          </div>
          <div class="item_list item_number item grid">
            <h2>Переваги використання туї</h2>
            <ul>
              <li>Невибаглива до умов зростання;</li>
              <li>Стійка до сильних морозів і вітрів;</li>
              <li>Добре переносить стрижку;</li>
              <li>
                Гарне розгалуження, що дозволяє утворити <br />
                густий живий паркан;
              </li>
            </ul>
          </div>
          <div class="item item_number item-img grid">
          <img src="<?php bloginfo('template_url'); ?>/images/Thuja2.png"
														alt="<?php echo get_bloginfo('name'); ?>">
          </div>

          <div class="item item_number item-img grid">
          <img src="<?php bloginfo('template_url'); ?>/images/Thuja3.png"
														alt="<?php echo get_bloginfo('name'); ?>">
          </div>
          <div class="item_list item_number item grid">
            <h2>Живопліт із туй</h2>
            <ul>
              <li>
                Огорожа із живих рослин може бути <br />
                висаджена на присадибній ділянці чи дачі.
              </li>
              <li>Жива огорожа може бути декоративною.</li>
              <li>Виконує захисну функцію.</li>
              <li>Жива огорожа з туї невибаглива.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="buttoncase text-center">
    <a target="_blank" href="https://www.nashsad.co.ua/contact/#cont"><button class="button"> Замовити</button></a>  
    </div>
    <section class="section-work" id="section-work">
      <div class="container">
        <div class="working-text">
          <h2 class="">Чому варто співпрацювати з нами</h2>
        </div>

        <div class="main_work grid">
          <div class="work grid">
          <img src="<?php bloginfo('template_url'); ?>/images/1cart.svg"
														alt="<?php echo get_bloginfo('name'); ?>">
            <p>
              Ми працюємо на ринку понад 10 років. За цей час завоювали довіру
              клієнтів.
            </p>
          </div>
          <div class="work grid">
          <img src="<?php bloginfo('template_url'); ?>/images/2cart.svg"
														alt="<?php echo get_bloginfo('name'); ?>">
            <p>Надсилаємо тільки якісний товар. Відповідний опис рослини.</p>
          </div>
          <div class="work grid">
          <img src="<?php bloginfo('template_url'); ?>/images/3cart.svg"
														alt="<?php echo get_bloginfo('name'); ?>">
            <p>Доступні ціни. Оптовим та постійним клієнтам робимо знижки.</p>
          </div>
          <div class="work grid">
          <img src="<?php bloginfo('template_url'); ?>/images/4cart.svg"
														alt="<?php echo get_bloginfo('name'); ?>">
            <p>
              Якісно пакуємо. Дбаємо, щоб покупці отримали рослину у відмінному
              стані.
            </p>
          </div>
          <div class="work grid">
          <img src="<?php bloginfo('template_url'); ?>/images/5cart.svg"
														alt="<?php echo get_bloginfo('name'); ?>">
            <p>
              Відправляємо накладним платежем, або після невеликої передоплати.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="catalog_two container landing-section" id="catalog_two">
      <div class="container">
        <div class="catalog_text">
          <h2>Каталог садженців туї</h2>
        </div>
        <div class="catalog_cards">
          <div class="products__item">
            <div class="products__image">
            <img src="<?php bloginfo('template_url'); ?>/images/smaragd.png"
														alt="<?php echo get_bloginfo('name'); ?>">
            </div>
            <div class="products__name">
              <p>
                Туя Smaragd – ідеальна рослина для живоплотів. Дерево
                вічнозелене, повільно зростаюче і дуже гарне.
              </p>
            </div>
            <a target="_blank" href="https://www.nashsad.co.ua/contact/#cont" ><button class="button-small"> Замовити</button></a> 
          </div>
          <div class="products__item">
            <div class="products__image">
            <img src="<?php bloginfo('template_url'); ?>/images/samshit.png"
														alt="<?php echo get_bloginfo('name'); ?>">
            </div>
            <div class="products__name">
              <p>
                Самшит - найкраща рослина для топіарі, та створення унікальних
                форм за допомогою декоративної стрижки.
              </p>
            </div>

            <a target="_blank" href="https://www.nashsad.co.ua/contact/#cont"><button class="button-small"> Замовити</button></a> 
          </div>

          <div class="products__item">
            <div class="products__image">
            <img src="<?php bloginfo('template_url'); ?>/images/Thuja11.png"
														alt="<?php echo get_bloginfo('name'); ?>">
            </div>
            <div class="products__name">
              <p>
                Туя західна Даніка - це карликовий, дуже щільний, симетричної
                шаровидної форми сорт, не потребує коректуючої стрижки.
              </p>
            </div><a target="_blank" href="https://www.nashsad.co.ua/contact/#cont"><button class="button-small"> Замовити</button></a>  
            
          </div>
        </div>
      </div>
    </section>
    <section class="reviews" id="reviews">
      <div class="container">
        <div class="reviews_title flex">
          <h2>Відгуки наших клієнтів</h2>
        </div>
        <div class="reviews_items grid">
          <div class="reviews_item grid">
            <h2>Анастасія<img src="<?php bloginfo('template_url'); ?>/images/ico.svg"
														alt="<?php echo get_bloginfo('name'); ?>"></h2>
            <p>
              Дуже порядний та чуйний продавец! Туї дуже гарні та пишні. Всім
              рекомендую
            </p>
          </div>
          <div class="reviews_item grid">
            <h2>Наталля<img src="<?php bloginfo('template_url'); ?>/images/ico.svg"
														alt="<?php echo get_bloginfo('name'); ?>"></h2>

            <p>
              Продавець надав детальну інформацію про рослини. Допоміг
              консультацією щодо посадки та доляду.
            </p>
          </div>
          <div class="reviews_item grid">
            <h2>Юля<img src="<?php bloginfo('template_url'); ?>/images/ico.svg"
														alt="<?php echo get_bloginfo('name'); ?>"></h2>

            <p>Туї якісні. Відповідають опису. Швидко відправили.</p>
          </div>
          <div class="reviews_item grid">
            <h2>Сергій<img src="<?php bloginfo('template_url'); ?>/images/ico.svg"
														alt="<?php echo get_bloginfo('name'); ?>"></h2>

            <p>Гарна консультація. Дуже дякую.</p>
          </div>
        </div>
      </div>
      </div>
      <div class="buttoncase text-center">
    <a target="_blank" href="https://www.nashsad.co.ua/contact/#cont"><button class="button"> Замовити</button></a>  
    </div> 
    </section>
    <!-- <section class="foms landing-section">
      <div class="container">


                    <div class="col-md-12 items-right cards-about-shop">
                        <div class="forms">
                            <h2>Оставить заявку:</h2>
                            <p>Оставьте заявку и я свяжусь с вами в рабочее время с 10:00 до 18:00 c пн-пт.</p>
                            
                        </div>

                    </div>

                </div>


      <div class="reviews_title flex">
          <h2>Залиште своє замовлення замовлення</h2>
        </div> -->
       
        
        <!-- <form class="forms">
							
          <h4>Форма замовлення</h4>
          <p>Оставьте заявку и мы свяжемся с вами в течение 15 минут в рабочее время с 10:00 до 18:00 c пн-пт.</p>
          
          <label>
            <span>Ваше ім'я:</span>
            <input type="text" name="name" required>
          </label>

          <label>
            <span>Ваш телефон:</span>
            <input type="text" name="phone" required>
          </label>

          <div class="button-wrap">
            <button class="button">Відправити</button>
          </div>

          <input type="hidden" name="formname" value="Заявка с верхней формы">

        </form> -->
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer_items grid">
          <div class="my_logo grid">
            <a href="https://www.nashsad.co.ua/tuya/">
            <img src="<?php bloginfo('template_url'); ?>/images/Logos.svg" alt="<?php echo get_bloginfo('name'); ?>">
              </a>
          </div>
        <div class="menus_items">
          <a href="https://www.nashsad.co.ua" class="items_menu">Головна</a>
          <a href="https://www.nashsad.co.ua/prajs/" class="items_menu">Прайс</a>
          <a href="https://www.nashsad.co.ua/about/" class="items_menu">Про мене</a>
          <a href="https://www.nashsad.co.ua/contact/" class="items_menu">Зв'язок</a>
        </div>
        <div class="tels grid">
          <div class="tel_top">
            <a href="tel:+380672948252">
            <img src="<?php bloginfo('template_url'); ?>/images/tel 1.svg" alt="<?php echo get_bloginfo('name'); ?>"> +380672948252
            </a> <br>
            <a href="tel:+380993962310"><img src="<?php bloginfo('template_url'); ?>/images/tel 1.svg" alt="<?php echo get_bloginfo('name'); ?>"> +380993962310
            </a>
          </div>
          <!-- <p>Олександр</p> -->
          <a href="mailto:aleksandrduma9@gmail.com">aleksandrduma9@gmail.com</a> 
        </div>  
        </div>

      </div>
    </footer>
    <div class="top" title="Наверх"></div>
    <div class="hidden">
		
      <form class="forms" id="callback">
  
        <h4>Заявка:</h4>
        <p>Оставьте заявку и мы свяжемся с вами в течение 15 минут в рабочее время с 10:00 до 18:00 c пн-пт.</p>
  
        <label>
          <span>Ваше ім'я:</span>
          <input type="text" name="name" required>
        </label>
  
        <label>
          <span>Ваш телефон:</span>
          <input type="text" name="phone" required>
        </label>
  
        <div class="button-wrap">
          <button class="buttons">Відправити</button>
        </div>
  
        <input type="hidden" name="formname" value="Заявка с нижней формы">
  
      </form>
  
    </div>
 
  </body>
</html>
