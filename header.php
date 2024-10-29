<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="robots" content="noindex">
  <!-- Прелоад header.min.css -->
  <!-- <link rel="preload" as="style" href="<?php echo get_stylesheet_directory_uri(); ?>/css/header.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/header.min.css">
    </noscript> -->
  <!-- Прелоад main.min.css -->
  <!-- <link rel="preload" as="style" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.min.css" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.min.css">
  </noscript> -->
  <?php if (is_home()) : ?>
    <link rel="preload" as="image" href="<?php echo esc_url(get_field('offer_bg','home')); ?>" />
    <link rel="preload" as="image" href="<?php echo esc_url(get_field('offer_photo', 'home')); ?>" />
  <?php else : ?>
    <?php if (get_field('offer_img')) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url(get_field('offer_img')); ?>" />
    <?php endif; ?>
    <?php if ((is_singular('post') || is_singular('product')) && get_the_post_thumbnail_url()) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" />
    <?php endif; ?>
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wdth,wght@8..144,25..151,100..1000&display=swap" rel="stylesheet">
  
  <meta charset="UTF-8">
  <meta name="viewport" id="myViewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/icon.jpg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.webmanifest">
  <link rel="yandex-tableau-widget" href="<?php echo get_template_directory_uri(); ?>/tableau.json">

  <?php wp_head(); ?>

  
</head>

<body id="top">

<div class="mob-header">
  <div class="container">
    <div class="wrap">
      <?php if (is_home()) : ?>
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Мерч.рф">
        </div>
        <?php else : ?>
        <a href="/" class="logo" title="Вернуться на главную">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Мерч.рф" >
        </a>
      <?php endif; ?> 
      <div class="burger">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M4 5H20" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M4 12H20" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M4 19H20" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>

<?php 
  $header_color_class = '';

  if (!is_home()) {
    $header_color_class = 'white-header';
  }

?>


<header itemscope itemtype="http://schema.org/WPHeader" class="header <?php echo $header_color_class; ?>" style="display: none"> 
  <div class="container"> 
    <div class="wrap">
      <div class="left">
        <?php if (is_home()) : ?>
          <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Мерч.рф">
          </div>
          <?php else : ?>
          <a href="/" class="logo" title="Вернуться на главную">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Мерч.рф" >
          </a>
        <?php endif; ?> 
        <div class="catalog-toggle row">
          <div class="icon">
            <svg class="closed" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M4 5H20" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4 12H20" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4 19H20" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <svg class="opened" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span>Каталог</span>
        </div>
        <nav class="menu row" itemscope itemtype="http://schema.org/SiteNavigationElement"> 
          <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList" class="row">
            <?php  
              wp_nav_menu( array(
                'menu_class' => '',
                'theme_location' => 'menu-1',
                'container' => null,
                'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
              )); 
            ?>
          </ul>
        </nav> 
      </div>
      <div class="right">
        <div class="social">
          <a href="<?php echo get_field('wa','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3115 13.5843C17.0495 13.4539 15.7649 12.8256 15.5258 12.7381C15.2866 12.6515 15.1125 12.6086 14.9376 12.8694C14.7635 13.1284 14.2632 13.7146 14.1111 13.8879C13.9581 14.062 13.806 14.083 13.5449 13.9535C13.2838 13.8223 12.4415 13.5484 11.4436 12.6629C10.6673 11.9734 10.1424 11.122 9.99027 10.8613C9.83816 10.6014 9.97356 10.4605 10.1046 10.331C10.2224 10.2146 10.3657 10.0274 10.4967 9.87602C10.6277 9.72377 10.6708 9.61527 10.7578 9.44115C10.8457 9.2679 10.8018 9.11652 10.7358 8.98615C10.6708 8.85577 10.1485 7.57565 9.93048 7.05503C9.71859 6.5484 9.50318 6.61753 9.34317 6.60878C9.19019 6.60178 9.0161 6.60003 8.84202 6.60003C8.66793 6.60003 8.38483 6.66478 8.14568 6.92553C7.90566 7.1854 7.2313 7.81453 7.2313 9.09465C7.2313 10.3739 8.16678 11.6103 8.29779 11.7844C8.42879 11.9576 10.1397 14.5844 12.7607 15.7105C13.3849 15.9783 13.8711 16.1384 14.25 16.2574C14.876 16.456 15.4458 16.428 15.8959 16.3606C16.3971 16.2863 17.4416 15.7315 17.6596 15.1243C17.8768 14.517 17.8768 13.9964 17.8117 13.8879C17.7467 13.7794 17.5726 13.7146 17.3106 13.5843H17.3115ZM12.5444 20.0619H12.5409C10.9842 20.0622 9.45603 19.6457 8.11667 18.8561L7.80015 18.6689L4.51015 19.5281L5.38848 16.3361L5.18186 16.0089C4.31157 14.6302 3.851 13.0346 3.85338 11.4064C3.85513 6.63765 7.75355 2.75791 12.5479 2.75791C14.869 2.75791 17.0512 3.65916 18.6918 5.29365C19.501 6.09566 20.1424 7.0494 20.5788 8.09968C21.0153 9.14997 21.2381 10.276 21.2345 11.4125C21.2327 16.1813 17.3343 20.0619 12.5444 20.0619ZM19.9403 4.05203C18.9716 3.08159 17.819 2.31213 16.5493 1.78823C15.2796 1.26434 13.918 0.996433 12.5435 1.00004C6.78115 1.00004 2.08968 5.66815 2.08792 11.4055C2.08704 13.2395 2.56797 15.0298 3.48323 16.6074L2 22L7.54254 20.5528C9.07578 21.3841 10.7939 21.8197 12.54 21.8198H12.5444C18.3067 21.8198 22.9982 17.1516 22.9999 11.4134C23.0042 10.046 22.736 8.69136 22.2108 7.4278C21.6856 6.16425 20.9139 5.01687 19.9403 4.05203Z" fill="white"/>
            </svg>
          </a>
          <a href="<?php echo get_field('tg','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.95103 10.853C8.29574 8.52439 11.8597 6.98923 13.643 6.24752C18.7345 4.12978 19.7925 3.76191 20.482 3.74976C20.6337 3.74709 20.9728 3.78468 21.1925 3.96292C21.378 4.11342 21.429 4.31673 21.4534 4.45942C21.4778 4.60212 21.5082 4.92718 21.4841 5.18117C21.2082 8.08019 20.0143 15.1154 19.4069 18.3623C19.1499 19.7362 18.6439 20.1969 18.154 20.242C17.0893 20.3399 16.2808 19.5383 15.2496 18.8624C13.636 17.8046 12.7244 17.1462 11.1581 16.114C9.34796 14.9212 10.5214 14.2656 11.553 13.1941C11.823 12.9137 16.514 8.64685 16.6048 8.25979C16.6161 8.21138 16.6267 8.03093 16.5195 7.93564C16.4123 7.84036 16.254 7.87294 16.1399 7.89886C15.978 7.93559 13.4002 9.63941 8.40651 13.0103C7.67482 13.5127 7.01207 13.7576 6.41827 13.7447C5.76366 13.7306 4.50444 13.3746 3.56834 13.0703C2.42017 12.6971 1.50764 12.4998 1.5871 11.8659C1.62849 11.5358 2.08313 11.1981 2.95103 10.853Z" fill="white"/>
            </svg>
          </a>
        </div>
        <div class="phone-toggle">
          <div class="phone roboto">
            <?php echo get_field('phone', 'options'); ?>
          </div>
          <div class="email">
            <?php echo get_field('email', 'options'); ?>
          </div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="phones-wrap">
          <a class="roboto"  target="blank" href="tel:<?php echo get_field('phone', 'options'); ?>"><?php echo get_field('phone', 'options'); ?></a>
          <span>Телефон в Москве</span>
          <a  class="roboto" target="blank" href="mailto:<?php echo get_field('email', 'options'); ?>"><?php echo get_field('email', 'options'); ?></a>
          <span>Почта</span>
          <b class="roboto" ><?php echo get_field('work_time', 'options'); ?></b>
          <span>Режим работы</span>
          <div class="button call-callback">
            Заказать звонок
          </div>
        </div>
      </div>
      
    </div>
  </div>
</header>





	