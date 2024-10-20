<?php
/**
 Template Name: Контакты
 */

get_header();
?>

<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>

<section class="contacts-top">
  <div class="container">
    <h1 class="page-title sub"><?php the_title(); ?></h1>
    <div class="wrap">
      <div class="contacts">
        <div class="phone-wrap">
          <a target="blank" href="tel:<?php echo get_field('phone','options'); ?>"><?php echo get_field('phone','options'); ?></a>
          <span>
            Телефон в Москве
          </span>
        </div>
        <a href="<?php echo get_field('wa','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
            <path d="M1.77263 12.4072C1.77199 14.2083 2.24474 15.9668 3.14365 17.517L1.68652 22.8134L7.13095 21.3922C8.63101 22.2059 10.3199 22.6355 12.0387 22.6361H12.0432C17.7035 22.6361 22.3107 18.0507 22.3132 12.4152C22.3143 9.68414 21.2469 7.11645 19.3078 5.18432C17.3689 3.25246 14.7904 2.18797 12.0427 2.18669C6.38208 2.18669 1.77483 6.77142 1.77238 12.4072L1.77263 12.4072ZM12.043 22.636H12.0431H12.043C12.0429 22.636 12.0428 22.636 12.043 22.636Z" fill="url(#paint0_linear_6214_1073)"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.38575 7.97749C9.18659 7.53678 8.97704 7.52796 8.78762 7.52021C8.63259 7.51365 8.45529 7.51407 8.27819 7.51407C8.10088 7.51407 7.8129 7.58031 7.56938 7.84512C7.32565 8.10995 6.63892 8.7501 6.63892 10.052C6.63892 11.3541 7.59158 12.6122 7.72431 12.7889C7.85726 12.9653 9.56331 15.7226 12.265 16.7832C14.5106 17.6647 14.9675 17.4894 15.4549 17.4452C15.9423 17.4012 17.0276 16.8053 17.2491 16.1873C17.4706 15.5695 17.4706 15.0399 17.4042 14.9293C17.3378 14.819 17.1605 14.7527 16.8947 14.6205C16.6288 14.4881 15.3219 13.8479 15.0783 13.7596C14.8346 13.6714 14.6573 13.6273 14.48 13.8922C14.3028 14.1569 13.7937 14.7527 13.6386 14.9293C13.4836 15.1061 13.3284 15.1282 13.0626 14.9958C12.7967 14.863 11.9406 14.5839 10.9249 13.6825C10.1347 12.981 9.60121 12.1148 9.44607 11.8499C9.29104 11.5853 9.42952 11.4419 9.5628 11.31C9.68223 11.1914 9.82871 11.001 9.96167 10.8466C10.0943 10.692 10.1385 10.5817 10.2272 10.4052C10.3159 10.2286 10.2715 10.0741 10.2051 9.94169C10.1385 9.80933 9.62197 8.50069 9.3856 7.97741" fill="white"/>
            <defs>
              <linearGradient id="paint0_linear_6214_1073" x1="12" y1="22.8112" x2="12" y2="2.18452" gradientUnits="userSpaceOnUse">
                <stop stop-color="#20B038"/>
                <stop offset="1" stop-color="#60D66A"/>
              </linearGradient>
            </defs>
          </svg>
        </a>
        <a href="<?php echo get_field('tg','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.95103 11.353C8.29574 9.02439 11.8597 7.48923 13.643 6.74752C18.7345 4.62978 19.7925 4.26191 20.482 4.24976C20.6337 4.24709 20.9728 4.28468 21.1925 4.46292C21.378 4.61342 21.429 4.81673 21.4534 4.95942C21.4778 5.10212 21.5082 5.42718 21.4841 5.68117C21.2082 8.58019 20.0143 15.6154 19.4069 18.8623C19.1499 20.2362 18.6439 20.6969 18.154 20.742C17.0893 20.8399 16.2808 20.0383 15.2496 19.3624C13.636 18.3046 12.7244 17.6462 11.1581 16.614C9.34796 15.4212 10.5214 14.7656 11.553 13.6941C11.823 13.4137 16.514 9.14685 16.6048 8.75979C16.6161 8.71138 16.6267 8.53093 16.5195 8.43564C16.4123 8.34036 16.254 8.37294 16.1399 8.39886C15.978 8.43559 13.4002 10.1394 8.40651 13.5103C7.67482 14.0127 7.01207 14.2576 6.41827 14.2447C5.76366 14.2306 4.50444 13.8746 3.56834 13.5703C2.42017 13.1971 1.50764 12.9998 1.5871 12.3659C1.62849 12.0358 2.08313 11.6981 2.95103 11.353Z" fill="#2AAAEC"/>
          </svg>
        </a>
      </div>
      <div class="button call-callback">
        Обратный звонок
      </div>
      <div class="address">
        <address class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="#885C8C" stroke-width="1.5"/>
              <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="#885C8C" stroke-width="1.5"/>
            </svg>
          </div>
          <span>
            <?php echo get_field('address_short', 'options'); ?>
          </span>
        </address>
        <time>
          <?php echo get_field('work_time', 'options'); ?>
        </time>
      </div>
      <div class="email">
        <a href="mailto:<?php echo get_field('email', 'options'); ?>" class="email">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M2 6L8.91302 9.91697C11.4616 11.361 12.5384 11.361 15.087 9.91697L22 6" stroke="#885C8C" stroke-width="1.5" stroke-linejoin="round"/>
              <path d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z" stroke="#885C8C" stroke-width="1.5" stroke-linejoin="round"/>
            </svg>
          </div>
          <?php echo get_field('email', 'options'); ?>
        </a>
        <span>Служба поддержки</span>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('filialy', 'options')) : ?>
<section class="map">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <?php if (have_rows('filialy', 'options')) : ?>
          <?php $first = true; ?>
          <?php while(have_rows('filialy', 'options')) : the_row(); ?>
          <div class="item<?php echo $first ? ' active' : ''; ?>" data-coordinat="<?php echo get_sub_field('koordinaty'); ?>">
            <b><?php echo get_sub_field('zagolovok'); ?></b>
            <p><?php echo get_sub_field('adres'); ?></p>
            <a href="tel:<?php echo get_sub_field('telefon'); ?>" class="phone" target="blank"><?php echo get_sub_field('telefon'); ?></a>
            <span><?php echo get_sub_field('rezhim_raboty'); ?></span>
          </div>
          <?php $first = false; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="right">
        <!-- Карта будет выведена здесь -->
        <div id="yandex-map" style="width: 100%; height: 100%;"></div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('req_title', 'options')) : ?>
<section class="req">
  <div class="container">
    <div class="title-row">
      <h2 class="title"><?php echo get_field('req_title', 'options') ?></h2>
      <?php if (get_field('req_file', 'options')) : ?>
        <a href="<?php echo get_field('req_file', 'options'); ?>" target="blank" download>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M6 20H18" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M12.0005 15L12 4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8 12L11.2929 15.2929C11.6262 15.6262 11.7929 15.7929 12 15.7929C12.2071 15.7929 12.3738 15.6262 12.7071 15.2929L16 12" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span>Скачать файл</span>
        </a>
      <?php endif; ?>
    </div>
    <div class="wrap">
      <?php if (have_rows('req', 'options')) : while(have_rows('req', 'options')) : the_row(); ?>
        <div class="item">
          <p><?php echo get_sub_field('name'); ?></p>
          <b><?php echo get_sub_field('value'); ?></b>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="consult-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <b class="title sub">Есть вопросы?</b>
        <p class="subtitle">Заполните ваши контактные данные и мы перезвоним в течение рабочего дня</p>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="aa474fd" title="Есть вопросы? (Баннер)"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "breadcrumb": {
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "item": {
          "@id": "https://neter.pro/",
          "name": "Главная"
        }
      },{
        "@type": "ListItem",
        "position": 2,
        "item": {
          "@id": "https://neter.pro/contacts",
          "name": "Контакты"
        }
      }]
    },
    "lastReviewed": "2024-03-20",
    "mainContentOfPage": {
      "@type": "WebPageElement",
      "description": "Контактная информация и форма обратной связи."
    }
  }
</script>
<!-- Schema org -->
<div itemscope itemtype="http://schema.org/Organization" style="display: none;">
  <span itemprop="name">ООО «Источники питания»</span>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">ул. Сибгата Хакима, д. 51, помещ. 1029, офис 2</span>,
    <span itemprop="addressLocality">г. Казань</span>,
    <span itemprop="postalCode">421001</span>
  </div>
  Телефон: <span itemprop="telephone"><?php the_field('phone','options'); ?></span>
</div>
<div itemscope itemtype="http://schema.org/LocalBusiness" style="display: none;">
  <span itemprop="name">ООО «Источники питания»</span>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">ул. Сибгата Хакима, д. 51, помещ. 1029, офис 2</span>,
    <span itemprop="addressLocality">г. Казань</span>,
    <span itemprop="postalCode">421001</span>
  </div>
  Телефон: <span itemprop="telephone"><?php the_field('phone','options'); ?></span><br>
  Часы работы: <span itemprop="openingHours">09:00 - 18:00</span><br>
  <span itemprop="description">Аккумуляторы от производителя</span>
</div>
<!-- Schema end -->
<?php
get_footer();
