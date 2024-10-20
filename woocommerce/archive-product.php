<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;



if (is_shop() && !is_search()) :

	get_template_part('page-catalog');

elseif (is_search()) :

  get_template_part('search-products');

else :

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action( 'woocommerce_shop_loop_header' ); 

$current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$term = get_queried_object();
  if ($term && property_exists($term, 'term_id')) {
      $term_id = $term->term_id;
  } else {
      $term_id = null;
  }
  if ($term && property_exists($term, 'taxonomy')) {
      $term_tax = $term->taxonomy;
  } else {
      $term_tax = null;
  }		
  // Проверяем, находимся ли мы в категории продуктов WooCommerce
  if (is_product_category()) {
      // Если мы в категории продуктов, добавляем эту таксономию к переменной
      $term_tax = 'product_cat';
  }


?>

<section class="category-offer">
	<div class="category-offer-left">
		<h1 class="page-title sub">
			<?php if (get_field('title', $term_tax.'_'. $term_id)) : ?>
				<?php echo get_field('title', $term_tax .'_'. $term_id); ?>
			<?php else : ?>
				<?php woocommerce_page_title(); ?>
			<?php endif; ?>
			<?php 
				if ($current_page != 1 && !is_search()) {
					echo ' - страница ' . $current_page; 
				}
			?>
		</h1>
		<?php
			/**
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>
		<?php if (get_field('feat_toggle', $term_tax.'_'. $term_id) == false) : ?>
		<div class="row">
			<?php if (have_rows('feat', $term_tax.'_'. $term_id)) : while(have_rows('feat', $term_tax.'_'. $term_id)) : the_row(); ?>
				<div class="row-item">
					<div class="icon">
						<img src="<?php echo get_sub_field('icon'); ?>" alt="icon">
					</div>
					<span><?php echo get_sub_field('text'); ?></span>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="btns-row">
			<?php if (get_field('calc_row', $term_tax.'_'. $term_id)) : ?>
			<div class="button call-calc">
				Рассчитать стоимость
			</div>
			<?php endif; ?>
			<div class="button button-border call-callback">
				Консультация
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php
		if ($term_id && $term_tax) {
				// Получаем ID изображения категории
				$thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);

				if ($thumbnail_id) {
						// Если изображение есть, выводим блок
						$image_url = wp_get_attachment_url($thumbnail_id);
						?>
						<div class="category-offer-right">
								<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($term->name); ?>">
						</div>
						<?php
				}
		}
	?>
</section>

<div class="products-wrap">
	<div class="filters">
		<b class="title">Мы производим</b>
		<div class="mobile-filters">
			<div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
					<path d="M3.5 7H6.5" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M3.5 17H9.5" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M18.5 17H21.5" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M15.5 7H21.5" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M6.5 7C6.5 6.06812 6.5 5.60218 6.65224 5.23463C6.85523 4.74458 7.24458 4.35523 7.73463 4.15224C8.10218 4 8.56812 4 9.5 4C10.4319 4 10.8978 4 11.2654 4.15224C11.7554 4.35523 12.1448 4.74458 12.3478 5.23463C12.5 5.60218 12.5 6.06812 12.5 7C12.5 7.93188 12.5 8.39782 12.3478 8.76537C12.1448 9.25542 11.7554 9.64477 11.2654 9.84776C10.8978 10 10.4319 10 9.5 10C8.56812 10 8.10218 10 7.73463 9.84776C7.24458 9.64477 6.85523 9.25542 6.65224 8.76537C6.5 8.39782 6.5 7.93188 6.5 7Z" stroke="#8D3595" stroke-width="1.5"/>
					<path d="M12.5 17C12.5 16.0681 12.5 15.6022 12.6522 15.2346C12.8552 14.7446 13.2446 14.3552 13.7346 14.1522C14.1022 14 14.5681 14 15.5 14C16.4319 14 16.8978 14 17.2654 14.1522C17.7554 14.3552 18.1448 14.7446 18.3478 15.2346C18.5 15.6022 18.5 16.0681 18.5 17C18.5 17.9319 18.5 18.3978 18.3478 18.7654C18.1448 19.2554 17.7554 19.6448 17.2654 19.8478C16.8978 20 16.4319 20 15.5 20C14.5681 20 14.1022 20 13.7346 19.8478C13.2446 19.6448 12.8552 19.2554 12.6522 18.7654C12.5 18.3978 12.5 17.9319 12.5 17Z" stroke="#8D3595" stroke-width="1.5"/>
				</svg>
			</div>
			<span>Фильтры</span>
		</div>
		<div class="filters-wrap">
			<div class="container">
				<div class="filters-header">
					<b>Фильтры</b>
					<div class="close">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
				<?php echo do_shortcode('[wpf-filters id=1]'); ?>
				<div class="filters-footer">
					<div class="button close-filters">
						Применить
					</div>
				</div>
			</div>
		</div>
	</div>
<?php

if ( woocommerce_product_loop() ) {
	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
</div>
<?php if (!is_paged() && !is_search()) : ?>
	<?php if (get_field('seo_title', $term_tax.'_'. $term_id)) : ?>
	<section class="seo">
		<div class="container">
			<h2 class="title"><?php echo get_field('seo_title', $term_tax.'_'. $term_id) ?></h2>
			<div class="content">
				<?php echo get_field('seo_content', $term_tax.'_'. $term_id); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('price_title', $term_tax.'_'. $term_id)) : ?> 
	<section class="price-table">
		<div class="container">
			<h2 class="title"><?php echo get_field('price_title', $term_tax.'_'. $term_id) ?></h2>
			<div class="wrap">
				<?php
					$table = get_field( 'price_table' , $term_tax.'_'. $term_id);
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
		</div>
	</section>
	<?php endif; ?>

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

	<section class="services-page">
		<div class="container">
			<div class="features row">
				<?php if (have_rows('features', 'options')) : while(have_rows('features', 'options')) : the_row(); ?>
					<div class="item row">
						<div class="icon">
							<img src="<?php echo get_sub_field('icon'); ?>" alt="<?php echo get_sub_field('text'); ?>">
						</div>
						<p><?php echo get_sub_field('text'); ?></p>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>

	<?php if (get_field('portfolio_title', 'options')) : ?>
	<section class="portfolio-slider portfolio-block">
		<div class="container">
			<h2 class="title">
				<?php echo get_field('portfolio_title', 'options') ?>
				<a href="<?php echo get_field('portfolio_link', 'options'); ?>" class="link-all-mob" style="display: none">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</a>
			</h2>
			<div class="tabs-row">
				<div class="tabs">
					<?php
					$categories = get_terms(array(
						'taxonomy' => 'portfolio-category',
						'hide_empty' => true,
						'number' => 5
					));

					if (!empty($categories) && !is_wp_error($categories)) :
						foreach ($categories as $index => $category) : ?>
							<div class="tab<?php echo $index === 0 ? ' active' : ''; ?>" data-category="<?php echo esc_attr($category->slug); ?>">
								<?php echo esc_html($category->name); ?>
							</div>
						<?php endforeach; 
					endif; ?>
				</div>
				<a href="<?php echo get_field('portfolio_link', 'options'); ?>" class="link-all">
					<span>Смотреть все</span>
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M17 7.00012L6 18.0001" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
							<path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</a>
			</div>
			<?php foreach ($categories as $index => $category) : ?>
				<div class="wrap slider-wrap <?php echo $index === 0 ? ' active' : ''; ?>" data-category="<?php echo esc_attr($category->slug); ?>">
					<div class="arr arr-prev">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M5 12.0002L20 12.0002" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M9 17.0001L4.7071 12.7072C4.3738 12.3739 4.2071 12.2072 4.2071 12.0001C4.2071 11.793 4.3738 11.6263 4.7071 11.293L9 7.0001" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<div class="swiper">
						<div class="swiper-wrapper">
							<?php
							$portfolio_posts = new WP_Query(array(
								'post_type' => 'portfolio',
								'tax_query' => array(
									array(
										'taxonomy' => 'portfolio-category',
										'field' => 'slug',
										'terms' => $category->slug,
									),
								),
							));

							if ($portfolio_posts->have_posts()) :
								while ($portfolio_posts->have_posts()) : $portfolio_posts->the_post();
									$gallery = get_field('gallery');
									?>
									<div class="item swiper-slide portfolio-popup-toggle" data-id="<?php echo get_the_ID(  ); ?>">
										<div class="thumb">
											<img src="<?php echo esc_url($gallery[0]['sizes']['large']); ?>" alt="<?php the_title(); ?>">
										</div>
										<b><?php the_title(); ?></b>
									</div>
								<?php endwhile;
								wp_reset_postdata();
							endif; ?>
						</div>
					</div>
					<div class="arr arr-next">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M19 11.9998H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M15 6.99988L19.2929 11.2928C19.6262 11.6261 19.7929 11.7928 19.7929 11.9999C19.7929 12.207 19.6262 12.3737 19.2929 12.707L15 16.9999" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('seo_title_double', $term_tax.'_'. $term_id)) : ?>
	<section class="seo-double">
		<div class="container">
			<div class="wrap">
				<div class="left">
					<h2 class="title"><?php echo get_field('seo_title_double', $term_tax.'_'. $term_id) ?></h2>
					<div class="content">
						<?php echo get_field('seo_content_double', $term_tax.'_'. $term_id); ?>
					</div>
					<div class="button call-callback">
						Свяжитесь с нами
					</div>
				</div>
				<?php if (get_field('seo_img_double', $term_tax.'_'. $term_id)) : ?>
				<div class="right">
					<img src="<?php echo get_field('seo_img_double', $term_tax.'_'. $term_id); ?>" alt="<?php echo get_field('seo_title_double', 'options') ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('links_title', $term_tax.'_'. $term_id)) : ?>
	<section class="category-links">
		<div class="container">
			<h2 class="title"><?php echo get_field('links_title', $term_tax.'_'. $term_id) ?></h2>
			<div class="wrap">
			<?php if (have_rows('links', $term_tax.'_'. $term_id)) : while(have_rows('links', $term_tax.'_'. $term_id)) : the_row(); ?>
				<a href="<?php echo get_sub_field('link'); ?>" class="item">
					<?php echo get_sub_field('name'); ?>
				</a>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('feed_title', 'options')) : ?>
	<section class="feed-block">
		<div class="container">
			<div class="wrap">
				<div class="left">
					<h2 class="title sub"><?php echo get_field('feed_title', 'options') ?></h2>
					<p class="subtitle"><?php echo get_field('feed_subtitle', 'options'); ?></p>
					<a href="<?php echo get_field('feed_link', 'options'); ?>" class="link-all">
						<span>Смотреть все</span>
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M17 7L6 18" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
								<path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</a>
					<?php if (get_field('feed_ya_link', 'feed')) : ?>
						<a href="<?php echo get_field('feed_ya_link', 'feed'); ?>" class="yandex-rating" target="blank" rel="nofollow" noindex>
							<div class="icon star">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88583 2.00269C8.34269 1.08244 9.65928 1.08244 10.1161 2.00269L11.9332 5.66273L15.998 6.25347C17.0146 6.40122 17.429 7.65048 16.6855 8.37051L13.7471 11.2161L14.4405 15.2354C14.6164 16.2556 13.5427 17.018 12.6362 16.5441L9.00099 14.6432L5.36573 16.5441C4.4593 17.018 3.38553 16.2556 3.56151 15.2354L4.25484 11.2161L1.31648 8.37051C0.572976 7.65048 0.987359 6.40122 2.00398 6.25347L6.06881 5.66273L7.88583 2.00269Z" fill="#F5AF40"/>
								</svg>
							</div>
							<b><?php echo get_field('feed_ya', 'feed'); ?></b>
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.9984 21.6004C17.3004 21.6004 21.5984 17.3023 21.5984 12.0004C21.5984 6.69846 17.3004 2.40039 11.9984 2.40039C6.6965 2.40039 2.39844 6.69846 2.39844 12.0004C2.39844 17.3023 6.6965 21.6004 11.9984 21.6004Z" fill="#FC3F1D"/>
									<path d="M15.4737 18.0274H13.3663V7.60442H12.4275C10.7067 7.60442 9.80527 8.46484 9.80527 9.74924C9.80527 11.2064 10.427 11.8816 11.7132 12.742L12.7731 13.4563L9.72689 18.0257H7.46094L10.2025 13.9462C8.62598 12.8204 7.73884 11.7213 7.73884 9.86681C7.73884 7.5492 9.35457 5.97266 12.4132 5.97266H15.4595V18.0239H15.4737V18.0274Z" fill="white"/>
								</svg>
							</div>
							<p>Рейтинг организации в Яндексе</p>
						</a>
					<?php endif; ?>
				</div>
				<div class="right slider-wrap">
					<div class="arr arr-prev">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M5 12H20" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<div class="swiper">
						<div class="swiper-wrapper">
							<?php $i = 0; if (have_rows('feed_text', 'feed')) : while(have_rows('feed_text', 'feed')) : the_row(); ?>
							<?php if ($i < 10) : ?>
								<div class="item swiper-slide <?php if (get_sub_field('feed_toggle') == 'none') { echo 'no-btn'; } ?>">
									<div class="top">
										<div class="avatar">
											<?php if (get_sub_field('avatar')) : ?>
												<img src="<?php echo get_sub_field('avatar')['sizes']['thumbnail']; ?>" alt="<?php echo get_sub_field('name'); ?>">
											<?php else : ?>
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M17.8063 14.8372C17.9226 14.9064 18.0663 14.9875 18.229 15.0793C18.9418 15.4814 20.0193 16.0893 20.7575 16.8118C21.2191 17.2637 21.6578 17.8592 21.7375 18.5888C21.8223 19.3646 21.4839 20.0927 20.8048 20.7396C19.6334 21.8556 18.2276 22.75 16.4093 22.75H7.59104C5.77274 22.75 4.36695 21.8556 3.1955 20.7396C2.51649 20.0927 2.17802 19.3646 2.26283 18.5888C2.34257 17.8592 2.78123 17.2637 3.2429 16.8118C3.98106 16.0893 5.05857 15.4814 5.77139 15.0793C5.93405 14.9876 6.07773 14.9064 6.19404 14.8372C9.74809 12.7209 14.2523 12.7209 17.8063 14.8372Z" fill="white"/>
													<path opacity="0.4" d="M6.75 6.5C6.75 3.6005 9.1005 1.25 12 1.25C14.8995 1.25 17.25 3.6005 17.25 6.5C17.25 9.39949 14.8995 11.75 12 11.75C9.1005 11.75 6.75 9.39949 6.75 6.5Z" fill="white"/>
												</svg>
											<?php endif; ?>
										</div>
										<div class="meta">
											<div class="name">
												<b><?php echo get_sub_field('name'); ?></b>
												<div class="date"><?php echo get_sub_field('date'); ?></div>
											</div>
											<div class="rating">
												<?php 
														$rating = get_sub_field('rating'); // Получаем рейтинг, число от 1 до 5
												?>

												<?php for ($i = 1; $i <= 5; $i++): ?>
														<?php if ($i <= $rating): ?>
															<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88583 2.00269C8.34269 1.08244 9.65928 1.08244 10.1161 2.00269L11.9332 5.66273L15.998 6.25347C17.0146 6.40122 17.429 7.65048 16.6855 8.37051L13.7471 11.2161L14.4405 15.2354C14.6164 16.2556 13.5427 17.018 12.6362 16.5441L9.00099 14.6432L5.36573 16.5441C4.4593 17.018 3.38553 16.2556 3.56151 15.2354L4.25484 11.2161L1.31648 8.37051C0.572976 7.65048 0.987359 6.40122 2.00398 6.25347L6.06881 5.66273L7.88583 2.00269Z" fill="#F5AF40"/>
															</svg>
														<?php else: ?>
															<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88583 2.00269C8.34269 1.08244 9.65928 1.08244 10.1161 2.00269L11.9332 5.66273L15.998 6.25347C17.0146 6.40122 17.429 7.65048 16.6855 8.37051L13.7471 11.2161L14.4405 15.2354C14.6164 16.2556 13.5427 17.018 12.6362 16.5441L9.00099 14.6432L5.36573 16.5441C4.4593 17.018 3.38553 16.2556 3.56151 15.2354L4.25484 11.2161L1.31648 8.37051C0.572976 7.65048 0.987359 6.40122 2.00398 6.25347L6.06881 5.66273L7.88583 2.00269Z" fill="#9CA3AF" />
															</svg>
														<?php endif; ?>
												<?php endfor; ?>
										</div>
										</div>
									</div>
									<div class="content">
										<?php echo get_sub_field('feed'); ?>
									</div>
									<?php if (get_sub_field('feed_toggle') != 'none') : ?>
									<div class="btn-row">
										<?php if (get_sub_field('feed_toggle') == 'video') : ?>
											<?php 
												$video_link = get_sub_field('video_link');
												if (get_sub_field('video_file') && get_sub_field('video_toggle') == true) {
													$video_link = get_sub_field('video_file');
												}
											?>
											<div class="btn btn-video video-data" data-src="<?php echo $video_link; ?>">
												<div class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M18.8906 12.846C18.5371 14.189 16.8667 15.138 13.5257 17.0361C10.296 18.8709 8.6812 19.7884 7.37983 19.4196C6.8418 19.2671 6.35159 18.9776 5.95624 18.5787C5 17.6139 5 15.7426 5 12C5 8.2574 5 6.3861 5.95624 5.42132C6.35159 5.02245 6.8418 4.73288 7.37983 4.58042C8.6812 4.21165 10.296 5.12907 13.5257 6.96393C16.8667 8.86197 18.5371 9.811 18.8906 11.154C19.0365 11.7084 19.0365 12.2916 18.8906 12.846Z" stroke="#885C8C" stroke-width="1.5" stroke-linejoin="round"/>
													</svg>
												</div>
												<span>Смотреть видеоотзыв</span>
											</div>
										<?php endif; ?>
										<?php if (get_sub_field('feed_toggle') == 'link') : ?>
											<a target="blank" rel="nofollow" noindex class="btn btn-link" href="<?php echo get_sub_field('feed_link'); ?>">
												<?php if (get_sub_field('feed_icon') != 'none') : ?>
												<div class="icon">
													<?php if (get_sub_field('feed_icon') == 'yandex') : ?>
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.9984 21.6004C17.3004 21.6004 21.5984 17.3023 21.5984 12.0004C21.5984 6.69846 17.3004 2.40039 11.9984 2.40039C6.6965 2.40039 2.39844 6.69846 2.39844 12.0004C2.39844 17.3023 6.6965 21.6004 11.9984 21.6004Z" fill="#FC3F1D"/>
															<path d="M15.4737 18.0274H13.3663V7.60442H12.4275C10.7067 7.60442 9.80527 8.46484 9.80527 9.74924C9.80527 11.2064 10.427 11.8816 11.7132 12.742L12.7731 13.4563L9.72689 18.0257H7.46094L10.2025 13.9462C8.62598 12.8204 7.73884 11.7213 7.73884 9.86681C7.73884 7.5492 9.35457 5.97266 12.4132 5.97266H15.4595V18.0239H15.4737V18.0274Z" fill="white"/>
														</svg>
													<?php else : ?>
														<img src="<?php echo get_sub_field('feed_icon_file'); ?>" alt="icon">
													<?php endif; ?>
												</div>
												<?php endif; ?>
												<span>Оригинал отзыва</span>
											</a>
										<?php endif; ?>
									</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php $i++;  endwhile; endif; ?>
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
		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('partners_gall', 'options')) : ?>
	<section class="partners">
		<div class="container">
			<div class="wrap">
				<div class="swiper">
					<div class="swiper-wrapper">
						<?php $gallery = get_field('partners_gall', 'options'); if ($gallery) : ?>
						<?php foreach( $gallery as $img ): ?>
							<div class="swiper-slide item">
								<?php echo '<img src="' . esc_url($img['url']) . '" alt="Партнёр">'; ?>
							</div>
						<?php endforeach; endif; ?>
					</div>
				</div>
				<div class="swiper-pagination dots" style="display: none"></div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('how_title', 'options')) : ?>
	<section class="how">
		<div class="container">
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
		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('actions', 1046)) : ?>
	<section class="actions-page actions-slider">
		<div class="container">
			<div class="title-row">
				<h2 class="title">
					Акции
					<a href="<?php the_permalink(1046); ?>" class="link-all-mob" style="display: none">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</a>
				</h2>
				<a href="<?php the_permalink(1046); ?>" class="link-all">
					<span>Смотреть все</span>
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M17 7.00012L6 18.0001" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
							<path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</a>
			</div>
			<div class="wrap slider-wrap">
				<div class="arr arr-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M5 12.0002L20 12.0002" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M9 17.0001L4.7071 12.7072C4.3738 12.3739 4.2071 12.2072 4.2071 12.0001C4.2071 11.793 4.3738 11.6263 4.7071 11.293L9 7.0001" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div class="swiper">
					<div class="swiper-wrapper">
						<?php if (have_rows('actions', 1046)) : while(have_rows('actions', 1046)) : the_row(); ?>
						<?php 
							$title = get_sub_field('title');
							$subtitle = get_sub_field('subtitle');
							$bg_img = get_sub_field('bg_img');
							$bg_img_mob = get_sub_field('bg_img_mob');
							$bg_color = get_sub_field('bg_color');
							$title_color = get_sub_field('title_color');
							$subtitle_color = get_sub_field('subtitle_color');
							$content = get_sub_field('content');
							$banner_toggle = get_sub_field('banner_toggle');
							$banner_title = get_sub_field('banner_title');
							$banner_subtitle = get_sub_field('banner_subtitle');
							$banner_img = get_sub_field('banner_img');

						?>
						<div class="item swiper-slide" style="
							background-image: url(<?php echo $bg_img; ?>);
							background-color: <?php echo $bg_color; ?>;
						">
							<b style="color: <?php echo $title_color; ?>"><?php echo $title; ?></b>
							<p style="color: <?php echo $subtitle_color; ?>"><?php echo $subtitle; ?></p>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="dots" style="display: none"></div>
				<div class="arr arr-next">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M19 11.9998H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15 6.99988L19.2929 11.2928C19.6262 11.6261 19.7929 11.7928 19.7929 11.9999C19.7929 12.207 19.6262 12.3737 19.2929 12.707L15 16.9999" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<?php if (have_rows('actions', 1046)) : while(have_rows('actions', 1046)) : the_row(); ?>
		<?php 
			$title = get_sub_field('title');
			$subtitle = get_sub_field('subtitle');
			$bg_img = get_sub_field('bg_img');
			$bg_img_mob = get_sub_field('bg_img_mob');
			$bg_color = get_sub_field('bg_color');
			$title_color = get_sub_field('title_color');
			$subtitle_color = get_sub_field('subtitle_color');
			$content = get_sub_field('content');
			$banner_toggle = get_sub_field('banner_toggle');
			$banner_title = get_sub_field('banner_title');
			$banner_subtitle = get_sub_field('banner_subtitle');
			$banner_img = get_sub_field('banner_img');

		?>
		<div class="popup banner-popup" style="display: none">
			<div class="close">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<b class="banner-title"><?php echo $title; ?></b>
			<div class="content"><?php echo $content; ?></div>
				<?php if ($banner_toggle == true) : ?>
			<div class="mini-banner">
				<?php if ($banner_img) : ?>
					<img src="<?php echo $banner_img; ?>" alt="<?php echo $title; ?>">
				<?php endif; ?>
				<div class="meta">
					<b><?php echo $banner_title; ?></b>
					<p><?php echo $banner_subtitle; ?></p>
				</div>
				<div class="button call-sample" data-title="<?php echo $title; ?>" data-banner="<?php echo $banner_title; ?>">
					Получить образец
				</div>
			</div>
			<?php endif; ?>
		</div>
	<?php endwhile; endif; ?>

	<?php if (get_field('faq_toggle', $term_tax.'_'. $term_id) == false) : ?>
		<?php if (get_field('faq_title', $term_tax.'_'. $term_id)) : ?>
		<section itemtype="https://schema.org/FAQPage"  class="faq">
			<div class="container">
				<div class="top-title">
					<h2 class="title sub"><?php echo get_field('faq_title', $term_tax.'_'. $term_id) ?></h2>  
					<a href="<?php echo get_field('faq_link', 'options') ?>" class="link-all-mob" style="display: none">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</a>
				</div>
				<div class="title-row">
					<p class="subtitle"><?php echo get_field('faq_subtitle', 'options') ?></p>
					<a href="<?php echo get_field('faq_link', 'options') ?>" class="link-all">
						<span>Смотреть все</span>
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M17 7L6 18" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
								<path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</a>
				</div>
				<div class="wrap">
					<?php if (have_rows('faq','options')) : while(have_rows('faq','options')) : the_row(); ?>
						<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
							<h3 class="faq-title" itemprop="name">
								<?php echo get_sub_field('question'); ?>
								<div class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
	<?php else : ?>
		<?php if (get_field('faq_title', $term_tax.'_'. $term_id)) : ?>
		<section itemtype="https://schema.org/FAQPage"  class="faq">
			<div class="container">
				<div class="top-title">
					<h2 class="title sub"><?php echo get_field('faq_title', $term_tax.'_'. $term_id) ?></h2>  
					<a href="<?php echo get_field('faq_link', 'options') ?>" class="link-all-mob" style="display: none">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</a>
				</div>
				<div class="title-row">
					<p class="subtitle"><?php echo get_field('faq_subtitle', $term_tax.'_'. $term_id) ?></p>
					<a href="<?php echo get_field('faq_link', 'options') ?>" class="link-all">
						<span>Смотреть все</span>
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M17 7L6 18" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
								<path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</a>
				</div>
				<div class="wrap">
					<?php if (have_rows('faq', $term_tax.'_'. $term_id)) : while(have_rows('faq', $term_tax.'_'. $term_id)) : the_row(); ?>
						<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
							<h3 class="faq-title" itemprop="name">
								<?php echo get_sub_field('question'); ?>
								<div class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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

	<?php if (get_field('subscribe_banner_title', 'options')) : ?>
	<section class="subscribe-banner">
		<div class="container">
			<div class="wrap">
				<div class="left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/subscribe/subscribe.png" alt="Подписка на рассылку">
				</div>
				<div class="right">
					<b class="title sub"><?php echo get_field('subscribe_banner_title', 'options'); ?></b>
					<p class="subtitle"><?php echo get_field('subscribe_banner_subtitle', 'options'); ?></p>
					<div class="form">
						<?php echo do_shortcode('[contact-form-7 id="92b59f6" title="Подписка на email рассылку (Баннер)"]'); ?>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php if (get_field('seo_title_2', $term_tax.'_'. $term_id)) : ?>
	<section class="seo">
		<div class="container">
			<h2 class="title"><?php echo get_field('seo_title_2', $term_tax.'_'. $term_id) ?></h2>
			<div class="content">
				<?php echo get_field('seo_content_2', $term_tax.'_'. $term_id); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

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

	<?php 
  $term_id = 'options';
	?>
	<?php if (get_field('city_title', $term_id)) : ?>
	<section class="city">
		<div class="container">
			<h2 class="title"><?php echo get_field('city_title', $term_id) ?></h2>
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
				<span>Развернуть</span>
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

<?php endif; ?>

<?php get_footer( 'shop' );

endif;