<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product', $product ); ?>>
	
	<div class="single-product-left">

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
	</div>

	<div class="summary entry-summary single-product-right">
		
		<h1 class="product-title"><?php the_title(); ?></h1>
		<div class="meta-row">
			<div class="rating">
				<?php if (comments_open()) { ?>
				<div class="star-rating">
					<?php 
						// Функция для склонения слова "отзыв"
						function get_review_word($count) {
							$cases = [2, 0, 1, 1, 1, 2];
							return $count . ' ' . ['отзыв', 'отзыва', 'отзывов'][($count % 100 > 4 && $count % 100 < 20) ? 2 : $cases[min($count % 10, 5)]];
						}
						// Получаем средний рейтинг
						$average = $product->get_average_rating();
						$rating_count = $product->get_rating_count();
						// Если рейтинг отсутствует, задаем значение по умолчанию (например, 0)
						if (empty($average)) {
								$average = 0;
						}

						// Выводим рейтинг
						echo wc_get_star_rating_html($average);
					?>
					
				</div>
				<span class="rating-count"><?php echo get_review_word($rating_count); ?></span>
				<?php } ?>
			</div>
			<div class="sku">
				Артикул: <?php echo $product->get_sku(); ?>
			</div>
			<div class="share">
				<script src="https://yastatic.net/share2/share.js"></script>
				<div class="share-toggle">
					<p>Поделиться</p>
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M21 6.5C21 8.15685 19.6569 9.5 18 9.5C16.3431 9.5 15 8.15685 15 6.5C15 4.84315 16.3431 3.5 18 3.5C19.6569 3.5 21 4.84315 21 6.5Z" stroke="#9CA3AF" stroke-width="1.5"/>
							<path d="M9 12C9 13.6569 7.65685 15 6 15C4.34315 15 3 13.6569 3 12C3 10.3431 4.34315 9 6 9C7.65685 9 9 10.3431 9 12Z" stroke="#9CA3AF" stroke-width="1.5"/>
							<path d="M21 17.5C21 19.1569 19.6569 20.5 18 20.5C16.3431 20.5 15 19.1569 15 17.5C15 15.8431 16.3431 14.5 18 14.5C19.6569 14.5 21 15.8431 21 17.5Z" stroke="#9CA3AF" stroke-width="1.5"/>
							<path d="M8.72852 10.75L15.2285 7.75049M8.72852 13.2505L15.2285 16.25" stroke="#9CA3AF" stroke-width="1.5"/>
						</svg>
					</div>
				</div>
				<div class="wrapper" style="display: none">
					<b>Поделиться ссылкой</b>
					<div class="row">
						<div class="ya-share2 share-block" data-curtain data-shape="round" data-services="whatsapp,vkontakte,telegram"></div>
						<div class="share-link">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.1737 9.32599C11.8832 8.03546 9.81043 8.00326 8.48143 9.22941C8.14313 9.54141 7.61592 9.52024 7.30384 9.18191C6.99178 8.84366 7.01301 8.31645 7.35128 8.00437C9.33501 6.17428 12.4268 6.22196 14.3523 8.14744C16.3266 10.1218 16.3266 13.3229 14.3523 15.2973L11.9637 17.6858C9.98926 19.6602 6.78818 19.6602 4.8138 17.6858C2.83941 15.7115 2.83941 12.5104 4.8138 10.536L5.20075 10.149C5.52619 9.82357 6.05383 9.82357 6.37927 10.1491C6.7047 10.4745 6.7047 11.0021 6.37926 11.3276L5.99231 11.7145C4.6688 13.038 4.6688 15.1838 5.99231 16.5073C7.31582 17.8308 9.46168 17.8308 10.7852 16.5073L13.1737 14.1188C14.4973 12.7953 14.4973 10.6495 13.1737 9.32599Z" fill="#818793"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0077 3.49264C12.6842 2.16913 10.5383 2.16913 9.21483 3.49264L6.82629 5.88118C5.50279 7.2047 5.50279 9.35051 6.82629 10.674C8.11679 11.9645 10.1896 11.9968 11.5186 10.7706C11.8569 10.4586 12.3841 10.4798 12.6962 10.8181C13.0082 11.1563 12.987 11.6835 12.6487 11.9956C10.665 13.8258 7.57326 13.778 5.64779 11.8526C3.67339 9.87818 3.67339 6.67706 5.64779 4.70268L8.03633 2.31413C10.0107 0.339747 13.2118 0.339747 15.1862 2.31413C17.1606 4.28852 17.1606 7.48963 15.1862 9.46401L14.7992 9.85093C14.4738 10.1764 13.9462 10.1764 13.6207 9.85093C13.2953 9.52551 13.2953 8.99793 13.6207 8.67243L14.0077 8.28549C15.3312 6.96198 15.3312 4.81615 14.0077 3.49264Z" fill="#818793"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
		<div class="single-product-bottom">
			<div class="clear-vars">
				Сбросить параметры
			</div>
			<div class="single-product-buttons">
				<div class="button call-order">
					Заказать
				</div>
				<div class="button button-gray moar-btn">
					<span>Уточнить параметры</span>
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
							<path d="M6.75 9L12.0429 14.2929C12.3762 14.6262 12.5429 14.7929 12.75 14.7929C12.9571 14.7929 13.1238 14.6262 13.4571 14.2929L18.75 9" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
			</div>
			<div class="mini-alert">
				Выберите все параметры, что бы разблокировать кнопку "Заказать"
			</div>
			<?php if (get_field('product_min_count') || get_field('product_min_time')) : ?>
			<div class="single-product-order-meta">
				<?php if (get_field('product_min_count')) : ?>
					<div class="meta-item">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M12.4417 14.553L10.1358 17.2531C9.14121 18.4177 8.6439 19 8 19C7.3561 19 6.85879 18.4177 5.86418 17.2531L3.55829 14.553C2.51943 13.3366 2 12.7284 2 12C2 11.2716 2.51943 10.6634 3.55829 9.44699L5.86418 6.74694C6.85879 5.58231 7.3561 5 8 5C8.6439 5 9.14121 5.58231 10.1358 6.74694L12.4417 9.44699C13.4806 10.6634 14 11.2716 14 12C14 12.7284 13.4806 13.3366 12.4417 14.553Z" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13 19L16.5118 14.6032C17.5039 13.361 18 12.7398 18 12C18 11.2602 17.5039 10.639 16.5118 9.39683L13 5" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M17 19L20.5118 14.6032C21.5039 13.361 22 12.7398 22 12C22 11.2602 21.5039 10.639 20.5118 9.39683L17 5" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span>Заказ от <?php echo get_field('product_min_count'); ?> шт</span>
					</div>
				<?php endif; ?>
				<?php if (get_field('product_min_time')) : ?>
					<div class="meta-item">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M2 22H13C17.9706 22 22 17.9706 22 13C22 8.02944 17.9706 4 13 4C8.36745 4 4.49744 7.50005 4 12" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round"/>
								<path d="M18.5 5.5L19.5 4.5M5.5 4.5L6.5 5.5" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M16.5 9L13.5607 11.9393M13.5607 11.9393C13.2892 11.6679 12.9142 11.5 12.5 11.5C11.6716 11.5 11 12.1716 11 13C11 13.8284 11.6716 14.5 12.5 14.5C13.3284 14.5 14 13.8284 14 13C14 12.5858 13.8321 12.2108 13.5607 11.9393Z" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round"/>
								<path d="M12.5 3.5V2" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M10.5 2H14.5" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M2 15H5" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M2 19H7" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span>Изготовим за <?php echo get_field('product_min_time'); ?> дня</span>
					</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</section>

<?php if (get_the_content()) : ?>
<section class="single-content">
	<h2 class="title">Описание продукции</h2>
	<div class="wrap content">
		<?php the_content(); ?>
	</div>
</section>
<?php endif; ?>

<?php 
	$video_src = get_field('video_link', 'options');

	if (get_field('video_toggle', 'options') == true) {
		$video_src = get_field('video_file');
	} else {
		$video_src = get_field('video_link');
	}
?>
<?php if ($video_src != '') : ?>
<section class="utp-vid">
	<div class="wrap video-data" data-src="<?php echo $video_src; ?>">
		<?php if (get_field('video_img')) : ?>
			<img src="<?php echo get_field('video_img'); ?>" alt="Видео о товаре">
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/video-thumb.jpg" alt="Видео о товаре">
		<?php endif; ?>
		<div class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="74" height="84" viewBox="0 0 74 84" fill="none">
				<path d="M71 36.8038C75 39.1132 75 44.8868 71 47.1962L9.50001 82.7032C5.50001 85.0126 0.500004 82.1258 0.500004 77.507L0.500007 6.49296C0.500007 1.87416 5.50001 -1.0126 9.50001 1.29681L71 36.8038Z" fill="white"/>
			</svg>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if (get_field('price_title')) : ?>
<section class="price-table">
	<div class="title-row">
		<h2 class="title"><?php echo get_field('table_title') ?></h2>
		<?php if (get_field('table_file')) : ?>
		<a href="<?php echo get_field('table_file'); ?>" class="link" target="blank" download>
			<div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#0C0C0C" stroke-width="1.5"/>
					<path d="M12 16V8M12 16C11.2998 16 9.99153 14.0057 9.5 13.5M12 16C12.7002 16 14.0085 14.0057 14.5 13.5" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<span>Скачать файлом</span>
		</a>
		<?php endif; ?>
		<div class="link call-order">
			<div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M3 10H21" stroke="#0C0C0C" stroke-width="1.5" stroke-linejoin="round"/>
					<path d="M15 6H17" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M21 13V11C21 6.75736 21 4.63604 19.682 3.31802C18.364 2 16.2426 2 12 2C7.75736 2 5.63604 2 4.31802 3.31802C3 4.63604 3 6.75736 3 11V13C3 17.2426 3 19.364 4.31802 20.682C5.63604 22 7.75736 22 12 22C16.2426 22 18.364 22 19.682 20.682C21 19.364 21 17.2426 21 13Z" stroke="#0C0C0C" stroke-width="1.5"/>
					<path d="M7 14H7.52632M11.7368 14H12.2632M16.4737 14H17" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M7 18H7.52632M11.7368 18H12.2632M16.4737 18H17" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<span>Заказать расчёт</span>
		</div>
	</div>
	<div class="wrap">
		<?php
			$table = get_field( 'price_table' );
			if ( ! empty ( $table ) ) {
					echo '<table border="0">';
						if ( ! empty( $table['header'] ) ) {
							echo '<thead>';
								echo '<tr>';
									foreach ( $table['header'] as $th ) {
										echo '<th>';
											echo $th['c'];
										echo '</th>';
									}
								echo '</tr>';
							echo '</thead>';
						}
						echo '<tbody>';
							foreach ( $table['body'] as $tr ) {
								echo '<tr>';
									foreach ( $tr as $td ) {
										echo '<td>';
											echo $td['c'];
										echo '</td>';
									}
								echo '</tr>';
							}
						echo '</tbody>';
					echo '</table>';
			}
		?>
	</div>
</section>
<?php endif; ?>

<section class="single-product-reviews">
	<div class="title-row">
		<h2 class="title">Отзывы о товаре</h2>
		<div class="button call-review-single">
			Оставить отзыв
		</div>
	</div>
	<?php comments_template('/woocommerce/single-product-reviews.php'); ?>
</section>

<?php if (get_field('process_title','s_product')) : ?>
<section class="process-single">
	<h2 class="title"><?php echo get_field('process_title','s_product') ?></h2>
	<div class="wrap slider-wrap">
		<div class="swiper">
			<div class="swiper-wrapper">
				<?php if (have_rows('process','s_product')) : while(have_rows('process','s_product')) : the_row(); ?>
					<div class="item swiper-slide">
						<div class="icon">
							<img src="<?php echo get_sub_field('icon'); ?>" alt="icon">
						</div>
						<b><?php echo get_sub_field('title'); ?></b>
						<p><?php echo get_sub_field('text'); ?></p>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	
	</div>
</section>
<?php endif; ?>

<?php if (get_field('treb_title', 'blocks')) : ?>
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
        <b class="title sub"><?php echo get_field('treb_title', 'blocks'); ?></b>
        <p>
          <?php echo get_field('treb_subtitle', 'blocks'); ?>
        </p>
      </div>
      <a href="<?php echo get_field('treb_link', 'blocks'); ?>" class="button button-green btn-arr">
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
<?php endif; ?>

<?php woocommerce_output_related_products(); ?>

<?php if (get_field('how_title', 'options')) : ?>
<section class="how">
	<h2 class="title"><?php echo get_field('how_title', 'options') ?></h2>
	<div class="wrap">
		<?php if (have_rows('how_sposob', 'options')) : while(have_rows('how_sposob', 'options')) : the_row(); ?>
			<div class="wrap-item first">
				<div class="top">
					<b class="mini-title"><?php echo get_sub_field('zagolovok'); ?></b>
					<div class="row">
						<?php $gallery = get_sub_field('ikonki_platezhek'); if ($gallery) : ?>
						<?php foreach( $gallery as $img ): ?>
								<?php echo '<img src="' . esc_url($img['url']) . '" alt="icon">'; ?>
						<?php endforeach; endif; ?>
					</div>
				</div>
				<div class="bot">
					<?php if (have_rows('sposoby_oplaty')) : while(have_rows('sposoby_oplaty')) : the_row(); ?>
						<div class="item">
							<div class="icon">
								<img src="<?php echo get_sub_field('ikonka'); ?>" alt="icon">
							</div>
							<div class="meta">
								<b><?php echo get_sub_field('zagolovok'); ?></b>
								<p><?php echo get_sub_field('tekst'); ?></p>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
		<?php if (have_rows('how_sroki', 'options')) : while(have_rows('how_sroki', 'options')) : the_row(); ?>
			<div class="wrap-item sec">
				<b class="mini-title"><?php echo get_sub_field('title'); ?></b>
				<p><?php echo get_sub_field('tekst'); ?></p>
			</div>
		<?php endwhile; endif; ?>
		<?php if (have_rows('how_delivery', 'options')) : while(have_rows('how_delivery', 'options')) : the_row(); ?>
			<div class="wrap-item third">
				<div class="left">
					<b class="mini-title"><?php echo get_sub_field('zagolovok'); ?></b>
					<div class="meta">
						<p><?php echo get_sub_field('czena_1'); ?></p>
						<span><?php echo get_sub_field('czena_1_summa_ot'); ?></span>
					</div>
					<div class="meta">
						<p><?php echo get_sub_field('czena_2'); ?></p>
						<span><?php echo get_sub_field('czena_2_summa_ot'); ?></span>
					</div>
				</div>
				<div class="right">
					<b><?php echo get_sub_field('zagolovok_tk'); ?></b>
					<div class="row">
						<?php $gallery = get_sub_field('logo_tk'); if ($gallery) : ?>
						<?php foreach( $gallery as $img ): ?>
								<?php echo '<img src="' . esc_url($img['url']) . '" alt="icon">'; ?>
						<?php endforeach; endif; ?>
					</div>
					<p><?php echo get_sub_field('podzagolovok_tk'); ?></p>
				</div>
			</div>
		<?php endwhile; endif; ?>
		<?php if (have_rows('how_order', 'options')) : while(have_rows('how_order', 'options')) : the_row(); ?>
			<div class="wrap-item four">
				<div class="left">
					<b class="mini-title"><?php echo get_sub_field('zagolovok'); ?></b>
					<p><?php echo get_sub_field('tekst'); ?></p>
				</div>
				<a href="<?php echo get_sub_field('ssylka'); ?>" class="right">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<g clip-path="url(#clip0_6226_219)">
								<path d="M17 14L6 25" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
								<path d="M11 13H17C17.4714 13 17.7071 13 17.8536 13.1465C18 13.2929 18 13.5286 18 14V20" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
							<defs>
								<clipPath id="clip0_6226_219">
									<rect width="24" height="24" fill="white"/>
								</clipPath>
							</defs>
						</svg>
					</div>
					<b><?php echo get_sub_field('zagolovok_ssylki'); ?></b>
					<p><?php echo get_sub_field('tekst_ssylki'); ?></p>
				</a>
				
			</div>
		<?php endwhile; endif; ?>
	</div>
</section>
<?php endif; ?>

<?php if (get_field('links_title')) : ?>
<section class="links">
	<h2 class="title"><?php echo get_field('links_title'); ?></h2>
	<div class="wrap">
	<?php if (have_rows('links')) : while(have_rows('links')) : the_row(); ?>
		<a href="<?php echo get_sub_field('link'); ?>" class="item">
			<?php echo get_sub_field('name'); ?>
		</a>
	<?php endwhile; endif; ?>
	</div>
</section>
<?php endif; ?>

<?php if (get_field('consult_banner_title', 'options')) : ?>
<section class="consult-banner">
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
</section>
<?php endif; ?>

<?php if (get_field('filialy', 'options')) : ?>
<section class="map">
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
</section>
<?php endif; ?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
