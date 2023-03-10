<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6"
lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7"
lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8"
lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

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

    <link rel="icon" href="images/favicon.png" />
    <meta property="og:image" content="images/preview.jpg" />
    
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-reboot.min.css" />	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mains.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />

  <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.6.0.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/commons.js" defer></script>
<?php wp_head(); ?>
  </head>

  <body>
    <div class="header_top">
      <div class="container">
        <div class="menu_top flex">
          <div>
            <a href="#"
              ><img src="images/Logo.svg" class="logo image" alt=""
            /></a>
          </div>
          <div class="tel_top">
            <a href="tel:+380986893612">
              <img src="images/tel.svg" alt="" /> 098-689-36-12
            </a>
          </div>
          <div class="menu_items flex">

            <a href="" class="items">Переваги</a>
            <a href="" class="items">Про нас</a>
            <a href="" class="items">Каталог</a>
            <a href="" class="items">Відгуки</a>
          </div>
        </div>
      </div>
    </div>
    <section class="advantages_top">
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
            <button class="button">Замовити</button>
          </div>
          <div class="header_right flex">
            <img src="images/Thuja.png" class="image fon_smaragd" alt="" />
          </div>
        </div>
      </div>
    </section>