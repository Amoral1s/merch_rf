<?php
/**
 Template Name: Услуги
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


<section class="services-block">
  <div class="container">
    <h1 class="page-title"><?php the_title() ; ?></h1>
    <div class="wrap">
      <?php
          // Получаем поле с ID записей
          $services_ids = get_field('services');
          // Проверяем, если поле пустое
          if (empty($services_ids)) {
              // Если пустое, то выводим все записи из категории services-main
              $args = array(
                  'post_type' => 'services',
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'services-category',
                          'field'    => 'slug',
                          'terms'    => 'services-main',
                      ),
                  ),
              );
          } else {
              // Если не пустое, выводим только записи с указанными ID
              $args = array(
                  'post_type' => 'services',
                  'post__in' => $services_ids, // Используем ID из поля
                  'orderby' => 'post__in', // Сохраняем порядок из массива
              );
          }

          // Выполняем запрос
          $query = new WP_Query($args);

          // Проверяем наличие постов
          if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); ?>
                  <?php 
                    $post_bg = get_field('export_bg'); 
                    $post_title = get_field('export_title');
                    if (!$post_title) {
                      $post_title = get_the_title();
                    }
                  ?>
                  <a href="<?php the_permalink(); ?>" class="item" style="background-image: url(<?php echo $post_bg['url']; ?>)">
                      <span class="roboto"><?php echo $post_title; ?></span>
                  </a>
              <?php endwhile;
              wp_reset_postdata(); // Сбрасываем глобальные данные
          endif;
          ?>
    </div>
  </div>
</section>

<?php if (get_field('tech_title')) : ?>
<section class="tech">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('tech_title') ?></h2>
    <p class="subtitle"><?php echo get_field('tech_subtitle'); ?></p>
    <div class="wrap slider-wrap">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            // Получаем поле с ID записей
            $services_ids = get_field('tech');
            // Проверяем, если поле пустое
            if (empty($services_ids)) {
                // Если пустое, то выводим все записи из категории services-technology
                $args = array(
                    'post_type' => 'services',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'services-category',
                            'field'    => 'slug',
                            'terms'    => 'services-technology',
                        ),
                    ),
                );
            } else {
                // Если не пустое, выводим только записи с указанными ID
                $args = array(
                    'post_type' => 'services',
                    'post__in' => $services_ids, // Используем ID из поля
                    'orderby' => 'post__in', // Сохраняем порядок из массива
                );
            }
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="item swiper-slide">
            <?php if (get_field('export_title')) : ?>
              <b class="roboto"><?php echo get_field('export_title'); ?></b>
            <?php else : ?>
              <b class="roboto"><?php the_title(); ?></b>
            <?php endif; ?>
            <?php if (get_field('export_subtitle')) : ?>
              <p><?php echo get_field('export_subtitle'); ?></p>
            <?php endif; ?>
            <div class="meta">
              <div class="thumb">
                <?php 
                  $image = get_field('export_bg'); // Получаем массив изображения
                  if ($image) : 
                ?>
                  <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php endif; ?>
              </div>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path d="M9 18.311L14.2929 13.0181C14.6262 12.6848 14.7929 12.5181 14.7929 12.311C14.7929 12.1039 14.6262 11.9372 14.2929 11.6039L9 6.31104" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>
          </a>
          <?php } }  wp_reset_postdata(); ?>
        </div>
      </div>
      
    </div>
  </div>
</section>
<?php endif; ?>


<?php if (get_field('all_services_title')) : ?>
<section class="all-services-block">
  <div class="container">
    <h2 class="title"><?php echo get_field('all_services_title') ?></h2>
    <div class="wrap">
      <?php
      // Получаем родительскую категорию "Все услуги" (services-all)
      $parent_term = get_term_by('slug', 'services-all', 'services-category');

      if ($parent_term) {
          // Получаем все дочерние категории
          $child_terms = get_terms(array(
              'taxonomy' => 'services-category',
              'parent' => $parent_term->term_id,
              'hide_empty' => false,
          ));

          // Проходим по каждой дочерней категории
          foreach ($child_terms as $child_term) :
              ?>
              <div class="item">
                <b class="roboto"><?php echo esc_html($child_term->name); // Название подкатегории ?></b>
                <ul>
                  <?php
                  // Получаем все записи типа services, принадлежащие текущей подкатегории
                  $services = get_posts(array(
                      'post_type' => 'services',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'services-category',
                              'field' => 'term_id',
                              'terms' => $child_term->term_id,
                          ),
                      ),
                      'posts_per_page' => -1, // Выводим все записи
                  ));

                  // Выводим каждую запись как элемент списка
                  foreach ($services as $service) :
                      ?>
                      <li>
                        <a href="<?php echo get_permalink($service->ID); ?>"><?php echo get_the_title($service->ID); ?></a>
                      </li>
                  <?php endforeach; ?>
                </ul>
              </div>
          <?php endforeach;
      }
      ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="banner-treb">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <svg xmlns="http://www.w3.org/2000/svg" width="127" height="116" viewBox="0 0 127 116" fill="none">
          <rect x="7.46966" y="6.72259" width="89.0716" height="101.396" stroke="url(#paint0_linear_5001_11099)" stroke-width="3.36119"/>
          <rect x="1.6806" y="1.6806" width="12.8846" height="12.8846" fill="white" stroke="#37D7D0" stroke-width="3.36119"/>
          <rect x="1.47097" y="100.627" width="13.3038" height="13.3038" fill="white" stroke="#E6776D" stroke-width="2.94194"/>
          <rect x="89.0712" y="1.6806" width="12.8846" height="12.8846" fill="white" stroke="#38D7CF" stroke-width="3.36119"/>
          <rect x="89.0712" y="100.836" width="12.8846" height="12.8846" fill="white" stroke="#B08194" stroke-width="3.36119"/>
          <path d="M120.511 32.1678L110.949 32.7748L116.374 45.2332L113.004 46.7232L107.579 34.2649L100.646 40.9424L100.66 13.7769L120.511 32.1678Z" fill="white"/>
          <path d="M126.347 34.2368L114.566 34.9956L119.58 46.502L111.757 49.9511L106.743 38.4447L98.2217 46.6675L98.2354 8.21631L126.347 34.2368ZM110.949 32.7743L120.511 32.1673L100.66 13.7764L100.647 40.9419L107.579 34.2644L113.004 46.7227L116.374 45.2327L110.949 32.7743Z" fill="#0C0C0C"/>
          <defs>
            <linearGradient id="paint0_linear_5001_11099" x1="52.0055" y1="5.04199" x2="52.0055" y2="109.799" gradientUnits="userSpaceOnUse">
              <stop stop-color="#65E5A5"/>
              <stop offset="0.328555" stop-color="#07C8FA"/>
              <stop offset="0.725" stop-color="#5A91D2"/>
              <stop offset="1" stop-color="#EF7566"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="center">
        <b class="title sub">Требования к макетам</b>
        <p>
          Ознакомьтесь с требованиям к передаче файлов в печать, это обеспечит максимально быстрый и четкий результат
        </p>
      </div>
      <a href="<?php the_permalink(421); ?>" class="button button-green btn-arr">
        <span>Перейти</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17 7L6 18" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
  </div>
</section>

<?php if (get_field('cat_slider_title')) : ?>
<section class="cat-slider">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('cat_slider_title'); ?></h2>
    <p class="subtitle"><?php echo get_field('cat_slider_subtitle'); ?></p>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('cat_slider','home')) : while(have_rows('cat_slider','home')) : the_row(); ?>
          <a href="<?php echo get_sub_field('link'); ?>" class="item swiper-slide">
            <?php if (get_sub_field('img')) : ?>
              <div class="thumb">
                <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
            <?php else : ?>
              <div class="thumb">
                <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
            <?php endif; ?>
            <b><?php echo get_sub_field('title'); ?></b>
          </a>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12L4 12.0002" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 17.0001L19.2928 12.7072C19.6262 12.3739 19.7928 12.2072 19.7928 12.0001C19.7928 11.793 19.6262 11.6263 19.2928 11.293L15 7.0001" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('banner_title')) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title') ?></b>
          <p class="subtitle"><?php echo get_field('banner_subtitle'); ?></p>
        </div>
        <div class="manager">
          <div class="avatar">
            <img src="<?php echo get_field('banner_avatar','options'); ?>" alt="<?php echo get_field('banner_name','options'); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php echo get_field('banner_name','options'); ?></b>
            <p><?php echo get_field('banner_place','options'); ?></p>
          </div>
        </div>
      </div>
      <div class="right form form-white">
        <b class="roboto mini-title">
          Оставьте заявку
        </b>
        <p class="mini-subtitle">
          Мы свяжемся с вами в течение рабочего дня
        </p>
        <?php echo do_shortcode('[contact-form-7 id="4925d8f" title="Оставьте заявку (баннер)"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('seo_title_double')) : ?>
	<section class="seo-double">
		<div class="container">
			<div class="wrap">
				<div class="left">
					<h2 class="title"><?php echo get_field('seo_title_double') ?></h2>
					<div class="content">
						<?php echo get_field('seo_content_double'); ?>
					</div>
				</div>
				<?php if (get_field('seo_img_double')) : ?>
				<div class="right">
					<img src="<?php echo get_field('seo_img_double'); ?>" alt="<?php echo get_field('seo_title_double') ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if (get_field('faq_title')) : ?>
  <?php if (get_field('faq_toggle') == false) : ?>
    <section itemtype="https://schema.org/FAQPage"  class="faq">  
      <div class="container">
        <div class="title-row">
          <h2 class="title sub"><?php echo get_field('faq_title') ?></h2>  
          <a href="<?php echo get_the_permalink(318); ?>" class="link-all">
            <span>Смотреть все</span>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </a>
        </div>
        <div class="wrap">
          <?php if (have_rows('faq','faq')) : while(have_rows('faq','faq')) : the_row(); ?>
            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
              <h3 class="faq-title" itemprop="name">
                <?php echo get_sub_field('question'); ?>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </h3>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="content">
                <?php echo get_sub_field('answer'); ?>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
  <?php else : ?>
    <section itemtype="https://schema.org/FAQPage"  class="faq">
      <div class="container">
        <div class="title-row">
          <h2 class="title sub"><?php echo get_field('faq_title') ?></h2>
          <a href="<?php echo get_the_permalink(318); ?>" class="link-all">
            <span>Смотреть все</span>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </a>
        </div>
        <div class="wrap">
          <?php if (have_rows('faq')) : while(have_rows('faq')) : the_row(); ?>
            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
              <h3 class="faq-title" itemprop="name">
                <?php echo get_sub_field('question'); ?>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </h3>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="content">
                <?php echo get_sub_field('answer'); ?>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>

<?php if (get_field('equip_title')) : ?>
<section class="equip-slider">
  <div class="container">
    <div class="title-block">
      <h2 class="title sub"><?php echo get_field('equip_title') ?></h2>
      <p class="subtitle"><?php echo get_field('equip_subtitle'); ?></p>
      <a href="<?php the_permalink(449); ?>" class="link-all">
        <span>Смотреть все</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('equip', 449)) : while(have_rows('equip', 449)) : the_row(); ?>
            <div class="item swiper-slide">
              <div class="thumb">
                <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
              <b class="roboto"><?php echo get_sub_field('title'); ?></b>
              <p><?php echo get_sub_field('content'); ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12L4 12.0002" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 17.0001L19.2928 12.7072C19.6262 12.3739 19.7928 12.2072 19.7928 12.0001C19.7928 11.793 19.6262 11.6263 19.2928 11.293L15 7.0001" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dots" style="display: none"></div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('help_brand_title')) : ?>
<section class="help-brand">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h2 class="title"><?php echo get_field('help_brand_title') ?></h2>
        <div class="content">
          <?php echo get_field('help_brand_content', 'home'); ?>
        </div>
        <div class="row">
          <a href="<?php echo get_the_permalink(310); ?>" class="button">
            Подробнее о нас
          </a>
          <div class="meta">
            <b><?php echo get_field('help_brand_orders_num', 'home'); ?></b>
            <p><?php echo get_field('help_brand_orders_text', 'home'); ?></p>
          </div>
          <div class="meta">
            <b><?php echo get_field('help_brand_deliv_num', 'home'); ?></b>
            <p><?php echo get_field('help_brand_deliv_text', 'home'); ?></p>
          </div>
        </div>
      </div>
      <div class="right">
        <b class="roboto"><?php echo get_field('help_brand_brands_title', 'home'); ?></b>
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php $gallery = get_field('help_brand_brands', 'home'); if ($gallery) : ?>
            <?php foreach( $gallery as $img ): ?>
              <div class="swiper-slide item">
                <?php echo '<img src="' . esc_url($img) . '"Бренд">'; ?>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="unisender-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <b class="roboto">Подпишитесь на новости</b>
        <p>Узнавайте первыми о самых горячих предложениях</p>
      </div>
      <div class="right">
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="b0f62b8" title="Подписка на рассылку"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
  $term_id = 'city';
?>
<?php if (get_field('city_title')) : ?>
  <?php if (get_field('city_toggle') == false) : ?>
    <section class="city">
      <div class="container">
        <h2 class="title"><?php echo get_field('city_title') ?></h2>
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
  <?php else : ?>
    <section class="city">
      <div class="container">
        <h2 class="title"><?php echo get_field('city_title', 'home') ?></h2>
        <ul class="wrap">
          <?php if (have_rows('city')) : while(have_rows('city')) : the_row(); ?>
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
<?php endif; ?>

<?php if (get_field('seo_title_2')) : ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php echo get_field('seo_title_2') ?></h2>
    <div class="content">
      <?php echo get_field('seo_content_2'); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
get_footer();
