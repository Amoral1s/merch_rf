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
			<?php if (get_field('cat_title', $term_tax.'_'. $term_id)) : ?>
				<?php echo get_field('cat_title', $term_tax .'_'. $term_id); ?>
			<?php else : ?>
				<?php woocommerce_page_title(); ?>
			<?php endif; ?>
			<?php 
				if ($current_page != 1 && !is_search()) {
					echo ' - страница ' . $current_page; 
				}
			?>
		</h1>
		<?php if (get_field('subtitle', $term_tax .'_'. $term_id)) : ?>
			<p class="subtitle"><?php echo get_field('subtitle', $term_tax .'_'. $term_id); ?></p>
		<?php endif; ?>
		<div class="btns-row">
			<div class="button call-order">
				Заказать расчёт
			</div>
			<?php if (get_field('time', $term_tax .'_'. $term_id)) : ?>
			<div class="feat">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M4.79289 3.91789C5.18342 3.52737 5.81658 3.52737 6.20711 3.91789L7.20711 4.91789C7.59763 5.30842 7.59763 5.94158 7.20711 6.33211C6.81658 6.72263 6.18342 6.72263 5.79289 6.33211L4.79289 5.33211C4.40237 4.94158 4.40237 4.30842 4.79289 3.91789ZM20.2071 3.91789C20.5976 4.30842 20.5976 4.94158 20.2071 5.33211L19.2071 6.33211C18.8166 6.72263 18.1834 6.72263 17.7929 6.33211C17.4024 5.94158 17.4024 5.30842 17.7929 4.91789L18.7929 3.91789C19.1834 3.52737 19.8166 3.52737 20.2071 3.91789Z" fill="#0C0C0C"/>
						<path d="M17.2071 8.41789C17.5976 8.80842 17.5976 9.44158 17.2071 9.83211L14.8276 12.2116C14.9388 12.4946 15 12.8029 15 13.125C15 14.5057 13.8807 15.625 12.5 15.625C11.1193 15.625 10 14.5057 10 13.125C10 11.7443 11.1193 10.625 12.5 10.625C12.8221 10.625 13.1304 10.6862 13.4134 10.7974L15.7929 8.41789C16.1834 8.02737 16.8166 8.02737 17.2071 8.41789Z" fill="#0C0C0C"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 2.125C9.5 1.57272 9.94772 1.125 10.5 1.125H14.5C15.0523 1.125 15.5 1.57272 15.5 2.125C15.5 2.67728 15.0523 3.125 14.5 3.125H13.5V3.625C13.5 4.17728 13.0523 4.625 12.5 4.625C11.9477 4.625 11.5 4.17728 11.5 3.625V3.125H10.5C9.94772 3.125 9.5 2.67728 9.5 2.125Z" fill="#0C0C0C"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M12.9773 5.325C8.94624 5.325 5.58436 8.36561 5.15317 12.2571C5.09387 12.7923 4.61091 13.1783 4.07444 13.1191C3.53798 13.0599 3.15116 12.5781 3.21046 12.0429C3.75155 7.15949 7.95376 3.375 12.9773 3.375C18.3746 3.375 22.75 7.74022 22.75 13.125C22.75 18.5098 18.3746 22.875 12.9773 22.875H2.22727C1.68754 22.875 1.25 22.4385 1.25 21.9C1.25 21.3615 1.68754 20.925 2.22727 20.925H12.9773C17.2951 20.925 20.7955 17.4328 20.7955 13.125C20.7955 8.81718 17.2951 5.325 12.9773 5.325ZM1.25 15.075C1.25 14.5365 1.68754 14.1 2.22727 14.1H5.15909C5.69882 14.1 6.13636 14.5365 6.13636 15.075C6.13636 15.6135 5.69882 16.05 5.15909 16.05H2.22727C1.68754 16.05 1.25 15.6135 1.25 15.075ZM1.25 18.4875C1.25 17.949 1.68754 17.5125 2.22727 17.5125H7.11364C7.65337 17.5125 8.09091 17.949 8.09091 18.4875C8.09091 19.026 7.65337 19.4625 7.11364 19.4625H2.22727C1.68754 19.4625 1.25 19.026 1.25 18.4875Z" fill="#0C0C0C"/>
					</svg>
				</div>
				<span><?php echo get_field('time', $term_tax .'_'. $term_id); ?></span>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php
		if ($term_id && $term_tax) {
				// Проверяем наличие поля 'offer_img'
				$offer_img = get_field('offer_img', $term_tax . '_' . $term_id); // Получаем значение поля offer_img

				if ($offer_img) {
						// Если поле 'offer_img' заполнено, выводим его
						$image_url = $offer_img;
				} else {
						// Если поле 'offer_img' пустое, получаем ID изображения категории
						$thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
						
						if ($thumbnail_id) {
								// Если изображение категории есть, получаем его URL
								$image_url = wp_get_attachment_url($thumbnail_id);
						}
				}

				// Проверяем, существует ли $image_url, прежде чем выводить блок
				if (!empty($image_url)) {
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
	<?php
		// Получаем текущую категорию
		$current_term = get_queried_object();

		// Определяем корневую категорию (если текущая категория является подкатегорией, получаем её родителя)
		$root_term_id = ($current_term->parent == 0) ? $current_term->term_id : $current_term->parent;

		// Получаем подкатегории корневой категории
		$subcategories = get_terms(array(
				'taxonomy'   => 'product_cat',
				'parent'     => $root_term_id,
				'hide_empty' => true,
		));

		// Получаем основные (родительские) категории
		$parent_categories = get_terms(array(
				'taxonomy'   => 'product_cat',
				'hide_empty' => true,
				'parent'     => 0, // Только родительские категории
		));
	?>

	<?php if (!empty($subcategories)) : ?>
		<div class="male-toggles">
				<?php
				// Если мы находимся в корневой категории, добавляем элемент "Все" как span с классом active
				if ($current_term->term_id == $root_term_id) : ?>
						<span class="item active">Все</span>
				<?php else : ?>
						<!-- Если находимся в подкатегории, выводим ссылку "Все" на корневую категорию -->
						<a href="<?php echo get_term_link($root_term_id); ?>" class="item">Все</a>
				<?php endif; ?>

				<?php
				// Выводим подкатегории корневой категории
				foreach ($subcategories as $subcategory) :
						// Получаем текст из ACF поля sub_cat_title или название подкатегории, если поле пусто
						$sub_cat_title = get_field('sub_cat_title', 'product_cat_' . $subcategory->term_id);
						$subcategory_name = $sub_cat_title ? $sub_cat_title : $subcategory->name;

						// Определяем, является ли текущая подкатегория активной
						$is_active = ($current_term->term_id == $subcategory->term_id);
				?>
						<?php if ($is_active) : ?>
								<!-- Если подкатегория активна, выводим её как span.item.active -->
								<span class="item active"><?php echo esc_html($subcategory_name); ?></span>
						<?php else : ?>
								<!-- Если подкатегория не активна, выводим её как ссылку -->
								<a href="<?php echo get_term_link($subcategory); ?>" class="item"><?php echo esc_html($subcategory_name); ?></a>
						<?php endif; ?>
				<?php endforeach; ?>
		</div>
	<?php endif; ?>
	
	

	<?php if (!empty($parent_categories)) : ?>
	<div class="cat-toggles-wrapper">
		<div class="cat-toggles">
				<?php
				// Определяем активную родительскую категорию (для случая, если мы в подкатегории)
				$active_parent_id = ($current_term->parent == 0) ? $current_term->term_id : $current_term->parent;

				foreach ($parent_categories as $category) :
						// Проверяем, является ли текущая (или родительская) категория активной
						$is_active = ($active_parent_id == $category->term_id);
						
						// Название категории
						$category_name = $category->name;
				?>
						<?php if ($is_active) : ?>
								<!-- Если категория активна, выводим её как span.active.item -->
								<span class="item active"><?php echo esc_html($category_name); ?></span>
						<?php else : ?>
								<!-- Если категория не активна, выводим её как ссылку -->
								<a href="<?php echo esc_url(get_term_link($category)); ?>" class="item"><?php echo esc_html($category_name); ?></a>
						<?php endif; ?>
				<?php endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
<h2 class="title">
		Варианты пошива
	</h2>
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
<!-- after-catalog blocks -->

<?php if (get_field('primery_off', $term_tax .'_'. $term_id) == false) : ?>
<section class="portfolio-slider">
  <div class="container">
    <div class="title-block">
      <h2 class="title sub">Примеры наших работ</h2>
      <p class="subtitle">Хотим поделиться с вами интересными решениями, которые разработали наши специалисты</p>
      <a href="<?php the_permalink(163); ?>" class="link-all">
        <span>Смотреть все</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
    <?php
      // Создаем пустой массив для всех категорий
      $all_categories = [];

      // Запрашиваем все записи портфолио
      $portfolio_posts = get_posts([
          'post_type' => 'portfolio',
          'numberposts' => -1,
      ]);

      // Проходим по каждой записи и собираем значения из поля filter_type
      foreach ( $portfolio_posts as $post ) {
          $filter_types = get_field('filter_type', $post->ID);

          if ( $filter_types ) {
              // Разделяем строку по запятой и удаляем пробелы после запятых
              $categories = array_map('trim', explode(',', $filter_types));

              // Добавляем категории в общий массив
              $all_categories = array_merge($all_categories, $categories);
          }
      }

      // Оставляем только уникальные категории
      $unique_categories = array_unique($all_categories);

      $show_cat = get_field('show_cat', $term_tax .'_'. $term_id); 
      $show_cat_array = array_map('trim', explode(',', $show_cat));
      
      if (!empty($show_cat)) {
         $all_categories = [];
         $all_categories = array_merge($all_categories, $show_cat_array);
         $unique_categories = array_unique($all_categories);
      }
    ?>
    <div class="tabs-wrapper">
      <div class="tabs">
          <?php foreach ( $unique_categories as $category ) : ?>
              <div class="tab"><?php echo esc_html( $category ); ?></div>
          <?php endforeach; ?>
      </div>
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
            $args = array(
              'posts_per_page' => -1, // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
              'post_type'      => 'portfolio',
              'orderby' => 'date',
              'order' => 'DESC'
            );
            query_posts( $args );

            $allowed_categories = array_filter(array_map('trim', $unique_categories));

            while(have_posts()): the_post(); 
              $raw_filter_types = get_field('filter_type');
              $post_categories = array_filter(array_map('trim', explode(',', (string) $raw_filter_types)));

              // Skip items that do not match the selected category filters.
              if (!empty($allowed_categories) && empty(array_intersect($post_categories, $allowed_categories))) {
                continue;
              }
          ?>
          <div class="item portfolio-popup-toggle swiper-slide" data-id="<?php echo get_the_ID(); ?>" data-type="<?php echo get_field('filter_type'); ?>" data-brand="<?php echo get_field('filter_branding'); ?>">
            <div class="thumb">
              <?php  if (has_post_thumbnail()) : ?>
                  <img itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>">
              <?php else : ?>
                  <img itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
              <?php endif; ?>
            </div>
            <div class="meta">
              <a href="<?php the_permalink(); ?>"  class="roboto"><?php the_title(); ?></a>
              <p><?php echo get_field('excerpt'); ?></p>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
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


<?php if (get_field('material_title', $term_tax .'_'. $term_id)) : ?>
  <?php if (get_field('material_toggle', $term_tax .'_'. $term_id) == false) : ?>
    <section class="material">
      <div class="container">
        <h2 class="title sub"><?php echo get_field('material_title', $term_tax .'_'. $term_id) ?></h2>
        <p class="subtitle"><?php echo get_field('material_subtitle', $term_tax .'_'. $term_id); ?></p> 
        <div class="wrap slider-wrap">
          <div class="arr arr-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php if (have_rows('material', 'blocks')) : while(have_rows('material', 'blocks')) : the_row(); ?>
                <div class="item swiper-slide">
                  <div class="thumb">
                    <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                  </div>
                  <div class="meta">
                    <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                    <p><?php echo get_sub_field('text'); ?></p>
                    <div class="rat">
                      <?php 
                        $count_warm = get_sub_field('warm');
                        $count_width = get_sub_field('width');
                        $count_strength = get_sub_field('strength');
                        if ( !is_numeric($count_warm) ) {
                            $count_warm = 1;
                        } else {
                            $count_warm = (int) $count_warm;
                        }
                        if ( !is_numeric($count_width) ) {
                            $count_width = 1;
                        } else {
                            $count_width = (int) $count_width;
                        }
                        if ( !is_numeric($count_strength) ) {
                            $count_strength = 1;
                        } else {
                            $count_strength = (int) $count_strength;
                        }

                        // Ограничиваем значение от 1 до 3
                        $count_warm = max(1, min($count_warm, 3));
                        $count_width = max(1, min($count_width, 3));
                        $count_strength = max(1, min($count_strength, 3));
                      ?>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_warm; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Теплота</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_width; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Толщина</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_strength; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Прочность</span>
                      </div>
                    </div>
                  </div>
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
        </div>
      </div>
    </section>
  <?php else : ?>
    <section class="material">
      <div class="container">
        <h2 class="title sub"><?php echo get_field('material_title', $term_tax .'_'. $term_id) ?></h2>
        <p class="subtitle"><?php echo get_field('material_subtitle', $term_tax .'_'. $term_id); ?></p>
        <div class="wrap slider-wrap">
          <div class="arr arr-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php if (have_rows('material', $term_tax .'_'. $term_id)) : while(have_rows('material', $term_tax .'_'. $term_id)) : the_row(); ?>
                <div class="item swiper-slide">
                  <div class="thumb">
                    <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                  </div>
                  <div class="meta">
                    <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                    <p><?php echo get_sub_field('text'); ?></p>
                    <div class="rat">
                      <?php 
                        $count_warm = get_sub_field('warm');
                        $count_width = get_sub_field('width');
                        $count_strength = get_sub_field('strength');
                        if ( !is_numeric($count_warm) ) {
                            $count_warm = 1;
                        } else {
                            $count_warm = (int) $count_warm;
                        }
                        if ( !is_numeric($count_width) ) {
                            $count_width = 1;
                        } else {
                            $count_width = (int) $count_width;
                        }
                        if ( !is_numeric($count_strength) ) {
                            $count_strength = 1;
                        } else {
                            $count_strength = (int) $count_strength;
                        }

                        // Ограничиваем значение от 1 до 3
                        $count_warm = max(1, min($count_warm, 3));
                        $count_width = max(1, min($count_width, 3));
                        $count_strength = max(1, min($count_strength, 3));
                      ?>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_warm; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Теплота</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_width; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Толщина</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_strength; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Прочность</span>
                      </div>
                    </div>
                  </div>
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
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>

<?php if (get_field('color_title', $term_tax .'_'. $term_id)) : ?>
  <?php if (get_field('color_toggle', $term_tax .'_'. $term_id) == false) : ?>
    <section class="colors">
      <div class="container">
        <div class="wrap">
          <h2 class="title sub"><?php echo get_field('color_title', $term_tax .'_'. $term_id) ?></h2>
          <p class="subtitle dark"><?php echo get_field('color_subtitle', $term_tax .'_'. $term_id); ?></p>
          <div class="gall">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php $gallery = get_field('color', 'blocks'); if ($gallery) : ?>
                <?php foreach( $gallery as $img ): ?>
                  <div class="item swiper-slide">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Цвет">
                    <?php if ($img['title']) : ?>
                    <span><?php echo $img['title']; ?></span>
                    <?php endif; ?>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  <?php else : ?>
    <section class="colors">
      <div class="container">
        <div class="wrap">
          <h2 class="title sub"><?php echo get_field('color_title', $term_tax .'_'. $term_id) ?></h2>
          <p class="subtitle dark"><?php echo get_field('color_subtitle', $term_tax .'_'. $term_id); ?></p>
          <div class="gall">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php $gallery = get_field('color', $term_tax .'_'. $term_id); if ($gallery) : ?>
                <?php foreach( $gallery as $img ): ?>
                  <div class="item">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Цвет">
                    <?php if ($img['title']) : ?>
                    <span><?php echo $img['title']; ?></span>
                    <?php endif; ?>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  <?php endif; ?>

<?php endif; ?>

<?php if (get_field('seo_title_double', $term_tax .'_'. $term_id)) : ?>
	<section class="seo-double">
		<div class="container">
			<div class="wrap">
				<div class="left">
					<h2 class="title"><?php echo get_field('seo_title_double', $term_tax .'_'. $term_id) ?></h2>
					<div class="content">
						<?php echo get_field('seo_content_double', $term_tax .'_'. $term_id); ?>
					</div>
				</div>
				<?php if (get_field('seo_img_double', $term_tax .'_'. $term_id)) : ?>
				<div class="right">
					<img src="<?php echo get_field('seo_img_double', $term_tax .'_'. $term_id); ?>" alt="<?php echo get_field('seo_title_double', $term_tax .'_'. $term_id) ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if (get_field('treb_toggle', $term_tax .'_'. $term_id) == false) : ?>
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

<?php if (get_field('help_toggle', $term_tax .'_'. $term_id) == false) : ?>
<section class="release-block">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('release_title', 'home') ?></h2>
    <p class="subtitle"><?php echo get_field('release_subtitle', 'home') ?></p>
    <div class="wrap">
      <div class="item left">
        <div class="black">
          <b><?php echo get_field('release_title_1', 'home') ?></b>
          <p><?php echo get_field('release_text_1', 'home') ?></p>
        </div>
        <div class="gall-block">
          <b><?php echo get_field('release_title_2', 'home') ?></b>
          <p><?php echo get_field('release_text_2', 'home') ?></p>
          <div class="gall-block-wrap">
            <?php $gallery = get_field('release_gall_2', 'home'); if ($gallery) : ?>
            <?php foreach( $gallery as $img ): ?>
              <div class="gall-block-item">
                <?php 
                  echo '<img src="' . esc_url($img) . '" alt="brand">';
                ?>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <div class="item center" style="background-image: url(<?php echo get_field('release_bg_3', 'home') ?>)">
        <b><?php echo get_field('release_title_3', 'home') ?></b>
        <p><?php echo get_field('release_text_3', 'home') ?></p>
      </div>
      <div class="item right">
        <div class="gray-block" style="background-image: url(<?php echo get_field('release_bg_4', 'home') ?>)">
          <b><?php echo get_field('release_title_4', 'home') ?></b>
          <p><?php echo get_field('release_text_4', 'home') ?></p>
        </div>
        <div class="black">
          <b><?php echo get_field('release_title_5', 'home') ?></b>
          <p><?php echo get_field('release_text_5', 'home') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('feed_toggle', $term_tax .'_'. $term_id) == false) : ?>
<section class="feed-block">
  <div class="container">
    <h2 class="title"><?php echo get_field('feed_title', $term_tax .'_'. $term_id) ?></h2>
    <div class="feed-block-gall slider-wrap">
      <b class="roboto">Реальные фотографии наших клиентов</b>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php $index = 0; $gallery = get_field('feed_gall', 'feed'); if ($gallery) : ?>
          <?php foreach( $gallery as $img ): ?>
            <?php if ($index < 6) : ?>
              <div class="swiper-slide item gall-item">
                <?php 
                  echo '<img src="' . esc_url($img['sizes']['medium']) . '" alt="Отзыв">';
                ?>
              </div>
            <?php endif; ?>
          <?php $index++; endforeach; endif; ?>
          <a href="<?php echo get_the_permalink(256); ?>" class="swiper-slide item link">
            <?php echo get_field('feed_gall_count', 'feed'); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="hidden-gallery mag-toggle" style="display: none">
      <?php $gallery = get_field('feed_gall', 'feed'); if ($gallery) : ?>
        <?php foreach( $gallery as $img ): ?>
            <a href="<?php echo esc_url($img['url']); ?>" class="item">
              <?php 
                echo '<img src="' . esc_url($img['sizes']['medium']) . '" alt="Отзыв">';
              ?>
            </a>
        <?php endforeach; endif; ?>
    </div>
    <div class="feed-block-text slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('feed', 'feed')) : while(have_rows('feed', 'feed')) : the_row(); ?>
            <div class="item swiper-slide <?php if (get_sub_field('btn_toggle') == true) { echo 'with-btn'; } ?>" style="width: 100%">
              <div class="top">
                <div class="avatar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.8063 14.8372C17.9226 14.9064 18.0663 14.9875 18.229 15.0793C18.9418 15.4814 20.0193 16.0893 20.7575 16.8118C21.2191 17.2637 21.6578 17.8592 21.7375 18.5888C21.8223 19.3646 21.4839 20.0927 20.8048 20.7396C19.6334 21.8556 18.2276 22.75 16.4093 22.75H7.59104C5.77274 22.75 4.36695 21.8556 3.1955 20.7396C2.51649 20.0927 2.17802 19.3646 2.26283 18.5888C2.34257 17.8592 2.78123 17.2637 3.2429 16.8118C3.98106 16.0893 5.05857 15.4814 5.77139 15.0793C5.93404 14.9875 6.07773 14.9064 6.19404 14.8372C9.74809 12.7209 14.2523 12.7209 17.8063 14.8372Z" fill="#71E69B"/>
                    <path d="M6.75018 6.5C6.75018 3.6005 9.10068 1.25 12.0002 1.25C14.8997 1.25 17.2502 3.6005 17.2502 6.5C17.2502 9.39949 14.8997 11.75 12.0002 11.75C9.10068 11.75 6.75018 9.39949 6.75018 6.5Z" fill="#71E69B"/>
                  </svg>
                </div>
                <div class="meta">
                  <b class="roboto"><?php echo get_sub_field('name'); ?></b>
                  <span><?php echo get_sub_field('date'); ?></span>
                  <div class="rating">
                    <?php 
                        $rating = get_sub_field('rating'); // Получаем рейтинг, число от 1 до 5
                    ?>
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <?php if ($i <= $rating): ?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <g clip-path="url(#clip0_3026_2265)">
                              <path d="M8.99756 0.9375C9.78454 0.9375 10.4044 1.5319 10.8001 2.33393L12.1217 4.99887C12.1617 5.08135 12.2568 5.19748 12.3996 5.30373C12.5422 5.40986 12.6819 5.46841 12.7738 5.48385L15.166 5.8846C16.0302 6.0298 16.7544 6.45337 16.9896 7.19093C17.2245 7.92788 16.8803 8.6937 16.2588 9.3162L16.2582 9.31687L14.3998 11.1907C14.3262 11.2649 14.2437 11.4048 14.1919 11.587C14.1405 11.7681 14.136 11.933 14.1593 12.0395L14.1596 12.041L14.6913 14.359C14.9118 15.3238 14.8387 16.2805 14.1583 16.7807C13.4755 17.2825 12.5425 17.06 11.6949 16.5552L9.45244 15.2167C9.35824 15.1605 9.19654 15.1149 9.00131 15.1149C8.80751 15.1149 8.64244 15.1599 8.54209 15.2183L8.54066 15.2191L6.30265 16.5549C5.45602 17.0615 4.52414 17.28 3.84132 16.7776C3.16135 16.2774 3.08459 15.3225 3.30582 14.3585L3.83741 12.041L3.83773 12.0395C3.86104 11.933 3.85648 11.7681 3.80509 11.587C3.75334 11.4048 3.67083 11.2649 3.59717 11.1907L1.73737 9.31545C1.11997 8.69295 0.776894 7.9278 1.00995 7.19194C1.24368 6.45394 1.96656 6.02985 2.83123 5.88454L5.22148 5.48414L5.22223 5.48401C5.30986 5.46881 5.44751 5.41092 5.58985 5.30451C5.73244 5.19791 5.82768 5.08151 5.86783 4.99887L5.86985 4.99475L7.1897 2.33323L7.19023 2.33218C7.58974 1.53081 8.21149 0.9375 8.99756 0.9375Z" fill="#FFB800"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_3026_2265">
                                <rect width="18" height="18" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        <?php else: ?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <g clip-path="url(#clip0_3026_2265)">
                              <path d="M8.99756 0.9375C9.78454 0.9375 10.4044 1.5319 10.8001 2.33393L12.1217 4.99887C12.1617 5.08135 12.2568 5.19748 12.3996 5.30373C12.5422 5.40986 12.6819 5.46841 12.7738 5.48385L15.166 5.8846C16.0302 6.0298 16.7544 6.45337 16.9896 7.19093C17.2245 7.92788 16.8803 8.6937 16.2588 9.3162L16.2582 9.31687L14.3998 11.1907C14.3262 11.2649 14.2437 11.4048 14.1919 11.587C14.1405 11.7681 14.136 11.933 14.1593 12.0395L14.1596 12.041L14.6913 14.359C14.9118 15.3238 14.8387 16.2805 14.1583 16.7807C13.4755 17.2825 12.5425 17.06 11.6949 16.5552L9.45244 15.2167C9.35824 15.1605 9.19654 15.1149 9.00131 15.1149C8.80751 15.1149 8.64244 15.1599 8.54209 15.2183L8.54066 15.2191L6.30265 16.5549C5.45602 17.0615 4.52414 17.28 3.84132 16.7776C3.16135 16.2774 3.08459 15.3225 3.30582 14.3585L3.83741 12.041L3.83773 12.0395C3.86104 11.933 3.85648 11.7681 3.80509 11.587C3.75334 11.4048 3.67083 11.2649 3.59717 11.1907L1.73737 9.31545C1.11997 8.69295 0.776894 7.9278 1.00995 7.19194C1.24368 6.45394 1.96656 6.02985 2.83123 5.88454L5.22148 5.48414L5.22223 5.48401C5.30986 5.46881 5.44751 5.41092 5.58985 5.30451C5.73244 5.19791 5.82768 5.08151 5.86783 4.99887L5.86985 4.99475L7.1897 2.33323L7.19023 2.33218C7.58974 1.53081 8.21149 0.9375 8.99756 0.9375Z" fill="#9CA3AF"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_3026_2265">
                                <rect width="18" height="18" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        <?php endif; ?>
                    <?php endfor; ?>
                  </div>
                </div>
              </div>
              <div class="content">
                <?php echo get_sub_field('content'); ?>
              </div>
              <?php if (get_sub_field('btn_toggle') == true) : ?>
              <a href="<?php echo get_sub_field('btn_link'); ?>" class="btn">
                <?php if (get_sub_field('btn_icon') == 'yandex') : ?>
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M12.0001 22.9256C18.0342 22.9256 22.9258 18.034 22.9258 11.9999C22.9258 5.96581 18.0342 1.07422 12.0001 1.07422C5.966 1.07422 1.0744 5.96581 1.0744 11.9999C1.0744 18.034 5.966 22.9256 12.0001 22.9256Z" fill="#FC3F1D"/>
                      <path d="M15.9536 18.8586H13.5552V6.99626H12.4868C10.5283 6.99626 9.50241 7.9755 9.50241 9.43726C9.50241 11.0957 10.21 11.8641 11.6738 12.8433L12.8801 13.6563L9.41321 18.8566H6.83435L9.95453 14.2138C8.16027 12.9325 7.15063 11.6816 7.15063 9.57107C7.15063 6.93341 8.98948 5.13916 12.4705 5.13916H15.9374V18.8546H15.9536V18.8586Z" fill="white"/>
                    </svg>
                  </div>
                <?php elseif (get_sub_field('btn_icon') == 'google') : ?>
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px">
                      <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/>
                      <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/>
                      <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/>
                      <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/>
                    </svg>
                  </div>
                <?php endif; ?>
                <span>Оригинал отзыва</span>
              </a>
              <?php endif; ?>
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

<?php if (get_field('table_title', $term_tax .'_'. $term_id)) : ?>
<section class="price-table">
  <div class="container">
    <h2 class="title"><?php echo get_field('table_title', $term_tax .'_'. $term_id) ?></h2>
    <div class="wrap">
      <?php
        $table = get_field( 'table', $term_tax .'_'. $term_id);
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

<?php if (get_field('form_toggle', $term_tax .'_'. $term_id) == false) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title', $term_tax .'_'. $term_id) ?></b>
          <p class="subtitle"><?php echo get_field('banner_subtitle', $term_tax .'_'. $term_id); ?></p>
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

<?php if (get_field('seo_title', $term_tax .'_'. $term_id)) : ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php echo get_field('seo_title', $term_tax .'_'. $term_id) ?></h2>
    <div class="content">
      <?php echo get_field('seo_content', $term_tax .'_'. $term_id); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('tech_toggle', $term_tax .'_'. $term_id) == false) : ?>
<section class="tech-dark tech">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('tech_title', $term_tax .'_'. $term_id) ?></h2>
    <p class="subtitle"><?php echo get_field('tech_subtitle', $term_tax .'_'. $term_id); ?></p>
    <div class="wrap slider-wrap">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            // Получаем поле с ID записей
            $services_ids = get_field('tech', 'home');
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

<?php if (get_field('faq_title', $term_tax .'_'. $term_id)) : ?>
  <?php if (get_field('faq_toggle', $term_tax .'_'. $term_id) == false) : ?>
    <section itemtype="https://schema.org/FAQPage"  class="faq">  
      <div class="container">
        <div class="title-row">
          <h2 class="title sub"><?php echo get_field('faq_title', $term_tax .'_'. $term_id) ?></h2>  
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
          <h2 class="title sub"><?php echo get_field('faq_title', $term_tax .'_'. $term_id) ?></h2>  
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
          <?php if (have_rows('faq', $term_tax .'_'. $term_id)) : while(have_rows('faq', $term_tax .'_'. $term_id)) : the_row(); ?>
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

<?php if (get_field('video_on', $term_tax .'_'. $term_id) == true) : ?>
<section class="big-video">
  <div class="container">
    <?php 
      $video_image = 'background-image: url('.get_field('video_img', $term_tax .'_'. $term_id).')';
      if (!get_field('video_img', $term_tax .'_'. $term_id)) {
        $video_image = '';
      }
      $video_link = get_field('video_link', $term_tax .'_'. $term_id); 
      if (get_field('video_toggle', $term_tax .'_'. $term_id) == true) {
        $video_link = get_field('video_file', $term_tax .'_'. $term_id); 
      }
    ?>
    <div class="wrap video-data" data-src="<?php echo $video_link; ?>" style="<?php echo $video_image; ?>">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="56" viewBox="0 0 50 56" fill="none">
          <path d="M47 22.8039C51 25.1133 51 30.8868 47 33.1962L9.49999 54.8468C5.49999 57.1562 0.499997 54.2694 0.499997 49.6506L0.499999 6.34935C0.5 1.73055 5.5 -1.15619 9.5 1.15321L47 22.8039Z" fill="white"/>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('equip_toggle', $term_tax .'_'. $term_id) == false) : ?>
<section class="equip-slider">
  <div class="container">
    <div class="title-block">
      <h2 class="title sub"><?php echo get_field('equip_title', $term_tax .'_'. $term_id) ?></h2>
      <p class="subtitle"><?php echo get_field('equip_subtitle', $term_tax .'_'. $term_id); ?></p>
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

<?php if (get_field('cat_slider_title', $term_tax .'_'. $term_id)) : ?>
<section class="cat-slider">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('cat_slider_title', $term_tax .'_'. $term_id); ?></h2>
    <p class="subtitle"><?php echo get_field('cat_slider_subtitle', $term_tax .'_'. $term_id); ?></p>
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
            // Получаем значения из поля 'cat_slider'
            $category_ids = get_field('cat_slider', $term_tax .'_'. $term_id); // Замените 'home' на нужный ID или объект

            // Проверяем, если поле 'cat_slider' заполнено
            if (!empty($category_ids) && is_array($category_ids)) {
              // Если 'cat_slider' заполнен, выводим категории по указанным ID, включая родительские и дочерние
              $product_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
                'include'    => $category_ids, // Только категории из 'cat_slider'
              ));
            } else {
              // Если 'cat_slider' пуст, выводим только родительские категории
              $product_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
                'parent'     => 0, // Только родительские категории
              ));
            }

            if (!empty($product_categories) && !is_wp_error($product_categories)) :
              foreach ($product_categories as $category) :
                // Получаем URL категории
                $category_link = get_term_link($category);
                
                // Получаем изображение категории или стандартную заглушку WooCommerce
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : wc_placeholder_img_src();
                
                // Название категории
                $category_name = $category->name;
            ?>
                <a href="<?php echo esc_url($category_link); ?>" class="item swiper-slide">
                    <div class="thumb">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category_name); ?>">
                    </div>
                    <b class="roboto"><?php echo esc_html($category_name); ?></b>
                </a>
            <?php
              endforeach;
            endif;
          ?>
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

<?php if (get_field('seo_title_2', $term_tax .'_'. $term_id)) : ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php echo get_field('seo_title_2', $term_tax .'_'. $term_id) ?></h2>
    <div class="content">
      <?php echo get_field('seo_content_2', $term_tax .'_'. $term_id); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('city_title', $term_tax .'_'. $term_id)) : ?>
  <?php if (get_field('city_toggle', $term_tax .'_'. $term_id) == false) : ?>
    <section class="city">
      <div class="container">
        <h2 class="title"><?php echo get_field('city_title', $main_post_id) ?></h2>
        <ul class="wrap">
          <?php if (have_rows('city', 'home')) : while(have_rows('city', 'home')) : the_row(); ?>
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
        <h2 class="title"><?php echo get_field('city_title', $term_tax .'_'. $term_id) ?></h2>
        <ul class="wrap">
          <?php if (have_rows('city', $term_tax .'_'. $term_id)) : while(have_rows('city', $term_tax .'_'. $term_id)) : the_row(); ?>
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

<?php if (get_field('city_toggle', $term_tax .'_'. $term_id) == false) : ?>
	<section class="city">
		<div class="container">
			<h2 class="title"><?php echo get_field('city_title', 'home') ?></h2>
			<ul class="wrap">
				<?php if (have_rows('city', 'city')) : while(have_rows('city', 'city')) : the_row(); ?>
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


<!-- after-catalog blocks END -->
<?php else : ?>

<?php if (get_field('form_toggle', $term_tax .'_'. $term_id) == false) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title', $term_tax .'_'. $term_id) ?></b>
          <p class="subtitle"><?php echo get_field('banner_subtitle', $term_tax .'_'. $term_id); ?></p>
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

<?php endif; ?>

<?php get_footer( 'shop' );

endif;