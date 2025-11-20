<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>


<section itemid="<?php echo get_permalink(); ?>" itemscope itemtype="http://schema.org/BlogPosting" class="container single-post only-single-page">
	<meta itemprop="description" content="<?php the_excerpt(); ?>">
	<link itemprop="image" href="<?php the_post_thumbnail_url(); ?>">
	<meta itemprop="author" content="<?php echo get_field('imya'); ?>, <?php echo get_field('dolzhnost'); ?>">
	<meta itemprop="datePublished" content="<?php the_time('c'); ?>">
	<meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">

	<h1 itemprop="headline" class="page-title sub"><?php the_title(); ?></h1>
	<?php if (get_field('subtitle')) { ?>
		<p class="subtitle dark"><?php echo get_field('subtitle'); ?></p>
	<?php } ?>
	<div class="single-post__top">
		<?php 
			// Получаем URL профиля автора
			$author_id = get_the_author_meta('ID');
			$author_url = get_author_posts_url($author_id); 
			$author_name = get_field('author_name', 'user_' . $author_id);
			$author_avatar = get_field('author_avatar', 'user_' . $author_id);
			$author_position = get_field('author_place', 'user_' . $author_id);
		?>
		<a href="<?php echo esc_url($author_url); ?>" class="author">
				<div class="avatar">
						<?php
						// Если аватар не задан, используем SVG-заглушку
						if ($author_avatar) {
								echo '<img src="' . esc_url($author_avatar) . '" alt="Аватар автора">';
						} else {
								// SVG-заглушка
								echo '<svg width="96" height="96" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="12" cy="12" r="10" stroke="#333" stroke-width="2"/>
										<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" fill="#333"/>
										<path d="M6 18c1.33-2 3.67-3 6-3s4.67 1 6 3" stroke="#333" stroke-width="2" stroke-linecap="round"/>
										</svg>';
						}
						?>
				</div>
				<div itemprop="author" class="name">
						<p class="roboto"><?php echo esc_html($author_name ? $author_name : 'Администратор'); ?></p>
						<span><?php echo esc_html($author_position ? $author_position : 'Автор статьи'); ?></span>
				</div>
		</a>
		<div class="meta-wrap">
			<div class="item date">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M18 2V4M6 2V4" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M11.9955 13H12.0045M11.9955 17H12.0045M15.991 13H16M8 13H8.00897M8 17H8.00897" stroke="#0C0C0C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M3.5 8H20.5" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M3 8H21" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<time class="value" datetime="<?php echo get_the_date('d.m.Y') ?>"><?php echo get_the_date('d.m.Y') ?></time>
			</div>
			<div class="item views">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M2 8C2 8 6.47715 3 12 3C17.5228 3 22 8 22 8" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round"/>
						<path d="M21.544 13.045C21.848 13.4713 22 13.6845 22 14C22 14.3155 21.848 14.5287 21.544 14.955C20.1779 16.8706 16.6892 21 12 21C7.31078 21 3.8221 16.8706 2.45604 14.955C2.15201 14.5287 2 14.3155 2 14C2 13.6845 2.15201 13.4713 2.45604 13.045C3.8221 11.1294 7.31078 7 12 7C16.6892 7 20.1779 11.1294 21.544 13.045Z" stroke="#0C0C0C" stroke-width="1.5"/>
						<path d="M15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17C13.6569 17 15 15.6569 15 14Z" stroke="#0C0C0C" stroke-width="1.5"/>
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
						<path d="M8.37563 3C8.16172 3.07993 7.95135 3.16712 7.74481 3.26126M20.7176 16.3011C20.8198 16.0799 20.914 15.8542 20.9999 15.6245M18.4987 19.3647C18.6704 19.2044 18.8364 19.0381 18.9962 18.866M15.2688 21.3723C15.4629 21.2991 15.654 21.22 15.842 21.1351M12.1559 21.9939C11.925 22.0019 11.6925 22.0019 11.4615 21.9939M7.7872 21.1404C7.968 21.2217 8.15172 21.2978 8.33814 21.3683M4.67244 18.9208C4.80913 19.0657 4.95018 19.2064 5.09539 19.3428M2.63259 15.6645C2.70747 15.8622 2.78856 16.0569 2.87561 16.2483M2.00486 12.5053C1.99837 12.2972 1.99839 12.0878 2.00486 11.8794M2.62534 8.73714C2.6989 8.54165 2.77853 8.34913 2.86399 8.1598M4.65591 5.47923C4.80057 5.32514 4.95014 5.17573 5.10439 5.03124" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12C10.5 11.1716 11.1716 10.5 12 10.5M13.5 12C13.5 11.1716 12.8284 10.5 12 10.5M13.5 12H16M12 10.5V6" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round"/>
						<path d="M22 12C22 6.47715 17.5228 2 12 2" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round"/>
					</svg>
				</div>
				<div class="value">
					~ <?php echo gp_read_time(); ?> мин.
				</div>
			</div>
			<div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="post-rating item">
				<meta class="bestRating" itemprop="bestRating" content="5">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
						<g clip-path="url(#clip0_3126_8015)">
							<path d="M8.99658 0.9375C9.78356 0.9375 10.4034 1.5319 10.7991 2.33393L12.1207 4.99887C12.1608 5.08135 12.2558 5.19748 12.3986 5.30373C12.5412 5.40986 12.681 5.46841 12.7728 5.48385L15.165 5.8846C16.0292 6.0298 16.7535 6.45337 16.9886 7.19093C17.2235 7.92788 16.8793 8.6937 16.2579 9.3162L16.2573 9.31687L14.3988 11.1907C14.3252 11.2649 14.2427 11.4048 14.1909 11.587C14.1396 11.7681 14.135 11.933 14.1583 12.0395L14.1586 12.041L14.6903 14.359C14.9109 15.3238 14.8377 16.2805 14.1573 16.7807C13.4745 17.2825 12.5415 17.06 11.6939 16.5552L9.45146 15.2167C9.35726 15.1605 9.19556 15.1149 9.00033 15.1149C8.80653 15.1149 8.64146 15.1599 8.54111 15.2183L8.53968 15.2191L6.30167 16.5549C5.45505 17.0615 4.52316 17.28 3.84034 16.7776C3.16038 16.2774 3.08361 15.3225 3.30484 14.3585L3.83643 12.041L3.83676 12.0395C3.86007 11.933 3.85551 11.7681 3.80411 11.587C3.75236 11.4048 3.66985 11.2649 3.59619 11.1907L1.7364 9.31545C1.119 8.69295 0.775917 7.9278 1.00897 7.19194C1.2427 6.45394 1.96558 6.02985 2.83026 5.88454L5.2205 5.48414L5.22126 5.48401C5.30889 5.46881 5.44653 5.41092 5.58887 5.30451C5.73147 5.19791 5.8267 5.08151 5.86685 4.99887L5.86887 4.99475L7.18872 2.33323L7.18925 2.33218C7.58876 1.53081 8.21051 0.9375 8.99658 0.9375Z" fill="#FFB800"/>
						</g>
						<defs>
							<clipPath id="clip0_3126_8015">
								<rect width="18" height="18" fill="white"/>
							</clipPath>
						</defs>
					</svg>
				</div>
				<div class="ratingValue" itemprop="ratingValue" content="0">0</div>
				<!-- <div class="new-rating">
				</div> -->
				<div itemprop="ratingCount" class="votes" content="0">
				</div>
			</div>
		</div>
	</div>
	<?php if (get_the_post_thumbnail_url()) : ?>
		<div class="thumb">
			<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" >
		</div>
	<?php endif; ?>
	<div class="single-post__nav-wrapper">
		<?php if (get_field('nav_toggle') == false) : ?>
		<div class="single-post__nav">
			<b class="roboto">Содержание статьи</b>
			<div class="single-nav-wrap">
			</div>
		</div>
		<?php endif; ?>
		<?php if (get_field('mini_banner_title')) : ?>
		<div class="mini-banner">
			<div class="left">
				<b class="roboto"><?php echo get_field('mini_banner_title'); ?></b>
				<p><?php echo get_field('mini_banner_text'); ?></p>
				<?php if (get_field('mini_banner_btn_text')) : ?>
					<a href="<?php echo get_field('mini_banner_btn_link'); ?>" class="button">
						<?php echo get_field('mini_banner_btn_text'); ?>
					</a>
				<?php endif; ?>
			</div>
			<?php if (get_field('mini_banner_img')) : ?>
				<div class="right">
					<img src="<?php echo get_field('mini_banner_img'); ?>" alt="<?php echo get_field('mini_banner_img'); ?>">
				</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="content">
		<?php the_content(); ?>
	</div>
	<div class="share-post">
		<!--<div class="left" style="opacity: 0">
			<b class="roboto">Оцените статью</b>
			<div class="share-stars">
				
			</div>
		</div>-->
		<div class="right">
			<b class="roboto">Поделитесь в соцсетях</b>
			<div class="share">
				<script src="https://yastatic.net/share2/share.js"></script>
				<div class="ya-share2 share-block" data-curtain data-shape="round" data-services="whatsapp,telegram,vkontakte"></div>
				<div class="share-link">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.1766 9.32584C11.8861 8.03531 9.81336 8.00311 8.48436 9.22926C8.14606 9.54126 7.61885 9.52009 7.30677 9.18176C6.99471 8.84351 7.01594 8.3163 7.35421 8.00422C9.33794 6.17412 12.4297 6.22181 14.3552 8.14729C16.3295 10.1217 16.3295 13.3228 14.3552 15.2972L11.9666 17.6857C9.99219 19.6601 6.79111 19.6601 4.81673 17.6857C2.84234 15.7113 2.84234 12.5103 4.81673 10.5358L5.20368 10.1488C5.52912 9.82342 6.05676 9.82342 6.3822 10.1489C6.70763 10.4743 6.70763 11.0019 6.38219 11.3274L5.99524 11.7143C4.67173 13.0378 4.67173 15.1837 5.99524 16.5072C7.31875 17.8307 9.46461 17.8307 10.7881 16.5072L13.1766 14.1187C14.5002 12.7952 14.5002 10.6493 13.1766 9.32584Z" fill="#0C0C0C"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0047 3.4928C12.6812 2.16929 10.5354 2.16929 9.2119 3.4928L6.82336 5.88134C5.49986 7.20485 5.49986 9.35066 6.82336 10.6742C8.11386 11.9647 10.1866 11.9969 11.5156 10.7707C11.854 10.4587 12.3811 10.4799 12.6932 10.8182C13.0053 11.1565 12.9841 11.6837 12.6458 11.9957C10.6621 13.8259 7.57033 13.7782 5.64486 11.8527C3.67046 9.87833 3.67046 6.67721 5.64486 4.70283L8.0334 2.31429C10.0078 0.339899 13.2089 0.339899 15.1833 2.31429C17.1576 4.28867 17.1576 7.48978 15.1833 9.46416L14.7963 9.85108C14.4709 10.1766 13.9432 10.1766 13.6178 9.85108C13.2924 9.52566 13.2924 8.99808 13.6178 8.67258L14.0047 8.28565C15.3283 6.96214 15.3283 4.8163 14.0047 3.4928Z" fill="#0C0C0C"/>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<!--<div  class="comments">
		<h2 class="title">Комментарии к статье</h2>
		<?php //comments_template(); ?>
	</div>-->
</section>

<?php endwhile; ?>

<?php if (get_field('subscribe_banner_toggle') == false) : ?>
<section class="unisender-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <b class="roboto"><?php echo get_field('uni_title', 'blocks'); ?></b>
        <p><?php echo get_field('uni_subtitle', 'blocks'); ?></p>
      </div>
      <div class="right">
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="b0f62b8" title="Подписка на рассылку"]'); ?>
        </div>
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
	<?php if (get_field('related_title')) : ?>
	<section class="news news-slider">
		<div class="container">
			<div class="title-row">
				<h2 class="title"><?php echo get_field('related_title'); ?></h2>
				<a href="<?php echo get_field('news_link', 'home'); ?>" class="link-all">
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
						
						<?php

							$news_ids = get_field('related_ids');
							if ($news_ids) {
								$args = array(
									'post_type'      => 'post',
									'post__in'       => $news_ids,
									'orderby'        => 'post__in',
								);
							} else {
								
							}
							// Выводим записи
							if ( !empty( $related_posts ) ) {
								foreach ( $related_posts as $post ) {
										setup_postdata( $post );
								?>
								<a href="<?php the_permalink(); ?>" class="item swiper-slide">
									<div class="thumb">
										<?php if (has_post_thumbnail()) : ?>
												<img itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo get_the_title(); ?>">
										<?php else : ?>
												<img itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
										<?php endif; ?>
									</div>
								<div class="meta">
									<div class="date"><?php echo get_the_date('d M Y') ?></div>
									<b class="roboto"><?php the_title(); ?></b>
									<?php 
										$subtitle = get_field('subtitle'); // Получаем значение поля ACF
										$word_limit = 10; // Указываем количество слов

										// Проверяем, если текст не пустой
										if ($subtitle) {
												$words = explode(' ', $subtitle); // Разделяем текст на слова
												if (count($words) > $word_limit) {
														$subtitle = implode(' ', array_slice($words, 0, $word_limit)) . '...'; // Обрезаем текст и добавляем троеточие
												}
												echo '<p>'.$subtitle.'</p>'; // Выводим ограниченный текст
										}
									?>
								</div>
								</a>
								<?php
								}
								wp_reset_postdata();
							}
						?>
					</div>
				</div>
				<div class="arr arr-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
<?php }  wp_reset_postdata(); ?>

<?php if (get_field('form_title')) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('form_title') ?></b>
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







<?php get_footer();

