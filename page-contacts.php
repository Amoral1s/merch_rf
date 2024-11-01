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

<section class="contacts-page">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="row">
      <div class="item">
        <a target="blank" class="roboto" href="tel:<?php echo get_field('phone','options'); ?>"><?php echo get_field('phone','options'); ?></a>
        <span>
          Телефон
        </span>
      </div>
      <div class="item">
        <b class="roboto"><?php echo get_field('footer_address', 'options'); ?></b>
        <span>Адрес</span>
      </div>
      <div class="item">
        <b class="roboto"><?php echo get_field('work_time', 'options'); ?></b>
        <span>Режим работы</span>
      </div>
      <div class="item">
        <a href="mailto:<?php echo get_field('email', 'options'); ?>" class="roboto"><?php echo get_field('email', 'options'); ?></a>
        <span>Служба поддержки</span>
      </div>
      <div class="social">
        <a href="<?php echo get_field('wa','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.1273 13.8243C16.8738 13.6982 15.6312 13.0904 15.3999 13.0058C15.1685 12.922 15.0001 12.8805 14.8308 13.1327C14.6624 13.3833 14.1785 13.9504 14.0313 14.118C13.8833 14.2865 13.7362 14.3068 13.4836 14.1815C13.231 14.0545 12.4162 13.7896 11.4508 12.933C10.6998 12.266 10.192 11.4424 10.0448 11.1901C9.8977 10.9387 10.0287 10.8024 10.1554 10.6771C10.2694 10.5646 10.408 10.3834 10.5348 10.237C10.6615 10.0897 10.7032 9.98474 10.7874 9.81629C10.8724 9.64869 10.8299 9.50225 10.7661 9.37613C10.7032 9.25 10.1979 8.01162 9.98701 7.50798C9.78203 7.01787 9.57365 7.08474 9.41885 7.07628C9.27085 7.06951 9.10245 7.06781 8.93404 7.06781C8.76563 7.06781 8.49176 7.13045 8.26041 7.3827C8.02821 7.6341 7.37585 8.24271 7.37585 9.48109C7.37585 10.7186 8.28082 11.9147 8.40755 12.0831C8.53428 12.2507 10.1894 14.7918 12.7249 15.8812C13.3288 16.1402 13.7991 16.2951 14.1657 16.4103C14.7713 16.6024 15.3225 16.5753 15.7579 16.5101C16.2427 16.4382 17.2532 15.9015 17.4641 15.3141C17.6742 14.7266 17.6742 14.223 17.6113 14.118C17.5483 14.0131 17.3799 13.9504 17.1265 13.8243H17.1273ZM12.5157 20.0907H12.5123C11.0063 20.091 9.52803 19.6881 8.23234 18.9243L7.92615 18.7431L4.74342 19.5744L5.59311 16.4864L5.39323 16.1699C4.55132 14.8361 4.10577 13.2925 4.10807 11.7175C4.10977 7.10421 7.88107 3.35098 12.5191 3.35098C14.7645 3.35098 16.8755 4.22284 18.4627 5.80404C19.2455 6.57989 19.8659 7.50253 20.2882 8.51857C20.7104 9.53461 20.9259 10.6239 20.9224 11.7234C20.9207 16.3366 17.1494 20.0907 12.5157 20.0907ZM19.6704 4.6029C18.7333 3.6641 17.6183 2.91973 16.39 2.41292C15.1617 1.90611 13.8445 1.64694 12.5148 1.65043C6.94037 1.65043 2.40188 6.16633 2.40018 11.7166C2.39933 13.4908 2.86457 15.2227 3.74999 16.7489L2.31512 21.9656L7.67694 20.5656C9.16018 21.3698 10.8223 21.7912 12.5114 21.7913H12.5157C18.0901 21.7913 22.6286 17.2754 22.6303 11.7242C22.6344 10.4014 22.3749 9.09095 21.8669 7.8686C21.3588 6.64624 20.6123 5.53627 19.6704 4.6029Z" fill="#0C0C0C"/>
          </svg>
        </a>
        <a href="<?php echo get_field('tg','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.95103 10.8534C8.29574 8.52476 11.8597 6.9896 13.643 6.24789C18.7345 4.13015 19.7925 3.76228 20.482 3.75013C20.6337 3.74746 20.9728 3.78504 21.1925 3.96329C21.378 4.11379 21.429 4.3171 21.4534 4.45979C21.4778 4.60248 21.5082 4.92754 21.4841 5.18154C21.2082 8.08056 20.0143 15.1157 19.4069 18.3627C19.1499 19.7366 18.6439 20.1972 18.154 20.2423C17.0893 20.3403 16.2808 19.5387 15.2496 18.8627C13.636 17.805 12.7244 17.1465 11.1581 16.1144C9.34796 14.9215 10.5214 14.2659 11.553 13.1945C11.823 12.9141 16.514 8.64722 16.6048 8.26015C16.6161 8.21174 16.6267 8.03129 16.5195 7.93601C16.4123 7.84073 16.254 7.87331 16.1399 7.89922C15.978 7.93596 13.4002 9.63977 8.40651 13.0107C7.67482 13.5131 7.01207 13.7579 6.41827 13.7451C5.76366 13.7309 4.50444 13.375 3.56834 13.0707C2.42017 12.6975 1.50764 12.5001 1.5871 11.8663C1.62849 11.5361 2.08313 11.1985 2.95103 10.8534Z" fill="#0C0C0C"/>
          </svg>
        </a>
      </div>
    </div>
    <div class="wrap">
      <div class="left">
        <iframe src="<?php echo get_field('map', 'options'); ?>" frameborder="0"></iframe>
      </div>
      <div class="right">
        <div class="form">
          <b class="mini-title">Обратная связь</b>
          <p class="mini-subtitle">Мы свяжемся с вами в течение дня</p>
          <?php echo do_shortcode('[contact-form-7 id="69beacb" title="Обратная связь"]'); ?>
        </div>
        <?php if (get_field('code_title', 'options')) : ?>
        <div class="code">
          <div class="avatar">
            <img src="<?php echo get_field('code_avatar', 'options'); ?>" alt="<?php echo get_field('code_title', 'options'); ?>">
          </div>
          <div class="code-right">
            <div class="meta">
              <b class="roboto"><?php echo get_field('code_title', 'options'); ?></b>
              <p><?php echo get_field('code_subtitle', 'options'); ?></p>
            </div>
            <a target="blank" href="mailto:<?php echo get_field('code_email', 'options'); ?>" class="link"><?php echo get_field('code_email', 'options'); ?></a>
          </div>
          
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('req_title', 'options')) : ?>
<section class="req">
  <div class="container">
    <div class="title-row">
      <h2 class="title"><?php echo get_field('req_title', 'options') ?></h2>
      <?php if (get_field('req_file', 'options')) : ?>
        <a href="<?php echo get_field('req_file', 'options'); ?>" target="blank" download>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#0C0C0C" stroke-width="1.5"/>
              <path d="M12 16V8M12 16C11.2998 16 9.99153 14.0057 9.5 13.5M12 16C12.7002 16 14.0085 14.0057 14.5 13.5" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span>Скачать файлом</span>
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

<?php 
  $term_id = 'city';
?>
<?php if (get_field('city_title', 'home')) : ?>
<section class="city">
	<div class="container">
		<h2 class="title"><?php echo get_field('city_title', 'home') ?></h2>
		<ul class="wrap">
      <?php if (have_rows('city', $term_id)) : while(have_rows('city', $term_id)) : the_row(); ?>
        <li class="item">
          <?php if (get_sub_field('link')) : ?>
            <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('name'); ?></a>
          <?php else : ?>
            <span><?php echo get_sub_field('name'); ?></span>
          <?php endif; ?>
        </li>
      <?php endwhile; endif; ?>
		</ul>
    <div class="moar-btn" style="display: none">
      Показать все
    </div>
	</div>
</section>
<?php endif; ?>


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
