<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<div class="page-top">
  <div class="container">
    <a href="/news" class="back-btn"  onclick="history.back()">
      <div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M5 12L20 11.9998" stroke="#2CB4C2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M8.99992 6.99988L4.70703 11.2928C4.37369 11.6261 4.20703 11.7928 4.20703 11.9999C4.20703 12.207 4.37369 12.3737 4.70703 12.707L8.99992 16.9999" stroke="#2CB4C2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
      </div>
      <span>Назад</span>
    </a>
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>


<section itemid="<?php echo get_permalink(); ?>" itemscope itemtype="http://schema.org/BlogPosting" class="single only-single-page container">
		<meta itemprop="description" content="<?php the_excerpt(); ?>">
		<link itemprop="image" href="<?php the_post_thumbnail_url(); ?>">
		<meta itemprop="author" content="<?php echo get_field('imya'); ?>, <?php echo get_field('dolzhnost'); ?>">
		<meta itemprop="datePublished" content="<?php the_time('c'); ?>">
		<meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">
	
	<div class="single-top">
		<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
		<?php if (get_field('subtitle')) { ?>
		<p class="subtitle"><?php echo get_field('subtitle'); ?></p>
		<?php } ?>
		<div class="meta-wrap">
			<div class="left">
				<div class="author">
					<?php if (get_field('author_image')) : ?>
					<div class="avatar">
						<img src="<?php echo get_field('author_image'); ?>" alt="Автор статьи">
					</div>
					<div itemprop="author" class="name">
						<p><?php echo get_field('author_name'); ?></p>
						<span><?php echo get_field('author_place'); ?></span>
					</div>
					<?php else : ?>
					<div class="avatar">
						<svg xmlns="http://www.w3.org/2000/svg" width="57" height="55" viewBox="0 0 57 55" fill="none">
							<path d="M11.2254 41.4622C12.3943 39.4925 14.899 37.1617 21.7786 35.4546V31.2197C5.58142 33.4192 1.57386 39.0985 0.471786 41.3965C-2.63407 49.5379 10.5575 53.346 11.9935 53.7071C17.4705 54.889 22.2796 54.6592 27.1554 53.9041C21.9122 52.8864 16.2682 50.1289 14.2645 48.7501C11.1252 46.8132 9.65576 44.4167 11.2254 41.4622Z" fill="#885C8C"/>
							<path d="M56.6443 41.8891C54.4736 34.4699 39.2449 31.2855 34.3356 31.1542V35.6845C39.2783 36.5052 42.9853 38.3108 44.9556 40.7401C48.4288 46.1239 41.95 50.9497 36.4062 48.1593C33.4673 46.4851 33.4673 44.4825 33.2335 42.7098C33.2335 33.9118 33.2335 24.7527 33.1667 15.889C31.6639 16.8082 29.8939 17.3663 27.9903 17.3663C26.0867 17.3663 24.4169 16.8082 22.9141 15.9218V41.5608C22.9475 45.2704 24.2165 48.4876 26.1535 50.3916C29.2928 53.5103 32.933 54.6921 36.9071 54.9876C40.9147 55.1189 45.2228 54.1997 48.7962 52.5911C54.4068 50.0962 58.214 46.0911 56.6443 41.8234" fill="#885C8C"/>
							<path d="M25.4188 14.7071C26.2203 15.0354 27.0886 15.1667 27.9903 15.1667C28.892 15.1667 29.7603 15.0026 30.5618 14.7071C33.5675 13.6894 35.7049 10.8662 35.7049 7.58335C35.7049 4.69446 34.0684 2.13384 31.4635 0.820709H31.4301C31.4301 0.820709 29.6267 0.164142 29.5599 0.164142C29.5599 0.164142 28.6916 0.0328283 28.6582 0.0328283C28.6582 0.0328283 28.1239 0 27.9903 0C26.955 0 25.9865 0.19697 24.9847 0.623739C23.8826 1.05051 22.9475 1.60859 22.1794 2.46213C21.5114 3.11869 21.0773 3.84092 20.8101 4.82577C20.4428 5.74496 20.2758 6.66416 20.2758 7.61618C20.2758 10.899 22.4465 13.7223 25.4188 14.7399" fill="#885C8C"/>
						</svg>
					</div>
					<div itemprop="author" class="name">
						<p>Принт Среда</p>
						<span>Администратор</span>
					</div>
					<?php endif; ?>
				</div>
				<div class="meta-wrap-items">
					<div class="item date">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.9955 13.5H12.0045M11.9955 17.5H12.0045M15.991 13.5H16M8 13.5H8.00897M8 17.5H8.00897" stroke="#885C8C" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
								<path d="M17.5 2V6M6.5 2V6" stroke="#885C8C" stroke-width="1.5" stroke-linejoin="round"/>
								<path d="M21 4H3V22H21V4Z" stroke="#885C8C" stroke-width="1.5" stroke-linejoin="round"/>
								<path d="M3 9H21" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<time class="value" datetime="<?php echo get_the_date('d.m.Y') ?>"><?php echo get_the_date('d.m.Y') ?></time>
					</div>
					<div class="item views">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12Z" stroke="#885C8C" stroke-width="1.5"/>
								<path d="M12 5C17.5228 5 22 12 22 12C22 12 17.5228 19 12 19C6.47715 19 2 12 2 12C2 12 6.47715 5 12 5Z" stroke="#885C8C" stroke-width="1.5"/>
							</svg>
						</div>
						<div class="value">
							<?php setPostViews(get_the_ID()); ?>
							<?php echo getPostViews(get_the_ID()); ?>
						</div>
					</div>
					<div class="item read-time">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M8.37563 3C8.16172 3.07993 7.95135 3.16712 7.74481 3.26126M20.7176 16.3011C20.8198 16.0799 20.914 15.8542 20.9999 15.6245M18.4987 19.3647C18.6704 19.2044 18.8364 19.0381 18.9962 18.866M15.2688 21.3723C15.4629 21.2991 15.654 21.22 15.842 21.1351M12.1559 21.9939C11.925 22.0019 11.6925 22.0019 11.4615 21.9939M7.7872 21.1404C7.968 21.2217 8.15172 21.2978 8.33814 21.3683M4.67244 18.9208C4.80913 19.0657 4.95018 19.2064 5.09539 19.3428M2.63259 15.6645C2.70747 15.8622 2.78856 16.0569 2.87561 16.2483M2.00486 12.5053C1.99837 12.2972 1.99839 12.0878 2.00486 11.8794M2.62534 8.73714C2.6989 8.54165 2.77853 8.34913 2.86399 8.1598M4.65591 5.47923C4.80057 5.32514 4.95014 5.17573 5.10439 5.03124" stroke="#885C8C" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
								<path d="M13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12C10.5 11.1716 11.1716 10.5 12 10.5M13.5 12C13.5 11.1716 12.8284 10.5 12 10.5M13.5 12H16M12 10.5V6" stroke="#885C8C" stroke-width="1.5"/>
								<path d="M22 12C22 6.47715 17.5228 2 12 2" stroke="#885C8C" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
							</svg>
						</div>
						<div class="value">
							~ <?php echo gp_read_time(); ?> мин.
						</div>
					</div>
					
				</div>
			</div>
			<div class="share">
				<script src="https://yastatic.net/share2/share.js"></script>
				<div class="row">
					<div class="ya-share2 share-block" data-curtain data-shape="round" data-services="whatsapp,vkontakte,telegram"></div>
					<div class="share-link">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.1766 9.32596C11.8861 8.03543 9.81336 8.00323 8.48436 9.22938C8.14606 9.54138 7.61885 9.52021 7.30677 9.18188C6.99471 8.84363 7.01594 8.31642 7.35421 8.00434C9.33794 6.17424 12.4297 6.22193 14.3552 8.14741C16.3295 10.1218 16.3295 13.3229 14.3552 15.2973L11.9666 17.6858C9.99219 19.6602 6.79111 19.6602 4.81673 17.6858C2.84234 15.7115 2.84234 12.5104 4.81673 10.536L5.20368 10.149C5.52912 9.82354 6.05676 9.82354 6.3822 10.149C6.70763 10.4745 6.70763 11.002 6.38219 11.3275L5.99524 11.7145C4.67173 13.038 4.67173 15.1838 5.99524 16.5073C7.31875 17.8308 9.46461 17.8308 10.7881 16.5073L13.1766 14.1188C14.5002 12.7953 14.5002 10.6495 13.1766 9.32596Z" fill="#885C8C"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0047 3.49267C12.6812 2.16917 10.5354 2.16917 9.2119 3.49267L6.82336 5.88122C5.49986 7.20473 5.49986 9.35054 6.82336 10.674C8.11386 11.9645 10.1866 11.9968 11.5156 10.7706C11.854 10.4586 12.3811 10.4798 12.6932 10.8181C13.0053 11.1564 12.9841 11.6835 12.6458 11.9956C10.6621 13.8258 7.57033 13.778 5.64486 11.8526C3.67046 9.87821 3.67046 6.67709 5.64486 4.70271L8.0334 2.31416C10.0078 0.339777 13.2089 0.339777 15.1833 2.31416C17.1576 4.28855 17.1576 7.48966 15.1833 9.46404L14.7963 9.85096C14.4709 10.1765 13.9432 10.1765 13.6178 9.85096C13.2924 9.52554 13.2924 8.99796 13.6178 8.67246L14.0047 8.28552C15.3283 6.96202 15.3283 4.81618 14.0047 3.49267Z" fill="#885C8C"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="thumb">
			<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" >
		</div>
	</div>
	<?php if (get_field('nav_toggle') == false) : ?>
	<div class="single-nav">
		<b>Содержание статьи</b>
		<div class="single-nav-wrap">
		</div>
	</div>
	<?php endif; ?>

	<div class="content">
		<?php the_content(); ?>
	</div>
	
	<div  class="comments">
		<h2 class="title">Комментарии к статье</h2>
		<?php comments_template(); ?>
	</div>

	
</section>

<?php if (get_field('consult_banner_title', 'options')) : ?>
<section class="consult-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <b class="title sub"><?php echo get_field('consult_banner_title', 'options'); ?></b>
        <p class="subtitle"><?php echo get_field('consult_banner_subtitle', 'options'); ?></p>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="89d9af1" title="Бесплатная консультация (Баннер)"]'); ?>
        </div>
      </div>
      <div class="right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/consult/phone.png" alt="Консультация">
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php 
	$current_post_id = get_the_ID();
	$categories = get_the_category( $current_post_id );
	$category_ids = array();

	if ( ! empty( $categories ) ) {
			// Собираем ID категорий, если они есть
			foreach ( $categories as $category ) {
					$category_ids[] = $category->term_id;
			}
	}

	// Если категории есть, делаем запрос по категориям, иначе берем все посты
	$args_all = array(
			'post_type'      => 'post',
			'posts_per_page' => -1, // Получаем все записи
			'orderby'        => 'date',
			'order'          => 'DESC'
	);

	if ( !empty( $category_ids ) ) {
			$args_all['category__in'] = $category_ids; // Фильтруем по категориям
	}

	$all_posts = new WP_Query( $args_all );

	// Ищем индекс текущей записи
	$current_index = -1; 
	if ( $all_posts->have_posts() ) {
			$posts_array = $all_posts->posts;
			foreach ( $posts_array as $index => $post ) {
					if ( $post->ID == $current_post_id ) {
							$current_index = $index;
							break;
					}
			}
	}

	// Выводим 5 записей до текущей и 5 записей после текущей
	if ( $current_index != -1 ) {
			$related_posts = array();

			// Добавляем 5 записей до текущей записи
			for ( $i = $current_index - 5; $i < $current_index; $i++ ) {
					if ( $i >= 0 && $posts_array[$i]->ID != $current_post_id ) {
							$related_posts[] = $posts_array[$i];
					}
			}

			// Добавляем 5 записей после текущей записи
			for ( $i = $current_index + 1; $i <= $current_index + 5 && $i < count( $posts_array ); $i++ ) {
					if ( $posts_array[$i]->ID != $current_post_id ) {
							$related_posts[] = $posts_array[$i];
					}
			}
	}

	// Выводим только если есть найденные посты
	if ( !empty( $related_posts ) ) {
?>
<section class="news news-slider">
  <div class="container">
    <h2 class="title">Читайте также</h2>
    
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12H20" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            // Выводим записи
            if ( !empty( $related_posts ) ) {
              foreach ( $related_posts as $post ) {
                  setup_postdata( $post );
              ?>
              <a href="<?php the_permalink(); ?>" class="item swiper-slide">
                <?php if (has_post_thumbnail()) : ?>
                    <img itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                    <img itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
                <?php endif; ?>
                <div class="meta">
                  <b><?php the_title(); ?></b>
                  <div class="date"><?php echo get_the_date('d M Y') ?></div>
                </div>
              </a>
              <?php
              }
              wp_reset_postdata();
            }
          ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 7L19.2929 11.2929C19.6262 11.6262 19.7929 11.7929 19.7929 12C19.7929 12.2071 19.6262 12.3738 19.2929 12.7071L15 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dots" style="display: none"></div>
    </div>
  </div>
</section>
<?php }  wp_reset_postdata(); ?>

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

<?php endwhile; ?>

<?php if (get_field('catalog_banner_title', 'options')) : ?>
<section class="catalog-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <b class="title sub"><?php echo get_field('catalog_banner_title', 'options'); ?></b>
        <p class="subtitle"><?php echo get_field('catalog_banner_subtitle', 'options'); ?></p>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="7dc5478" title="Отправка каталога"]'); ?>
        </div>
      </div>
      <div class="right">
        <img src="<?php echo get_field('catalog_banner_bg', 'options'); ?>" alt="<?php echo get_field('catalog_banner_title', 'options'); ?>">
      </div>
    </div>
  </div>
</section>
<?php endif; ?>




<?php get_footer();

