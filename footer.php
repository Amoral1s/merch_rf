
<footer itemscope itemtype="https://schema.org/WPFooter" class="footer">
  <div class="container">
    <div class="wrap">
      <div class="item first">
        <?php if (is_home()) : ?>
          <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="МЕРЧ.рф">
          </div>
          <?php else : ?>
          <a href="/" class="logo" title="Вернуться на главную">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="МЕРЧ.рф" >
          </a>
        <?php endif; ?>
        <div class="footer-contacts row">
          <div class="phone-wrap">
            <a target="blank" href="tel:<?php echo get_field('phone','options'); ?>"><?php echo get_field('phone','options'); ?></a>
            <span>
              <?php echo get_field('work_time', 'options'); ?>
            </span>
          </div>
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
        <?php if (is_page(390)) : ?>
        <span class="address">
          <?php echo get_field('footer_address', 'options'); ?>
        </span>
        <?php else : ?>
        <a href="<?php the_permalink(390); ?>" class="address">
          <?php echo get_field('footer_address', 'options'); ?>
        </a>
        <?php endif; ?>
        <a href="mailto:<?php echo get_field('email', 'options'); ?>" class="email">
          <?php echo get_field('email', 'options'); ?>
        </a>
        <div class="button call-callback">
          Заказать звонок
        </div>
      </div>
      <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="item menu">
        <b class="roboto">Клиентам</b>
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
          <?php  
            wp_nav_menu( array(
              'menu_class' => '',
              'theme_location' => 'menu-3',
              'container' => null,
              'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
            )); 
          ?>
        </ul>
      </div>
      <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="item menu">
        <b class="roboto">О компании</b>
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
          <?php  
            wp_nav_menu( array(
              'menu_class' => '',
              'theme_location' => 'menu-2',
              'container' => null,
              'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
            )); 
          ?>
        </ul>
      </div>
      <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="item menu">
        <b class="roboto">Каталог</b>
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
          <?php  
            wp_nav_menu( array(
              'menu_class' => '',
              'theme_location' => 'menu-4',
              'container' => null,
              'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
            )); 
          ?>
        </ul>
      </div>
      <div class="item last">
        <b class="roboto">
          Принимаем к оплате
        </b>
        <div class="payment-logos">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="24" viewBox="0 0 48 24" fill="none">
              <g clip-path="url(#clip0_3029_158)">
                <path d="M46.345 10.0415V17.2524H43.7512V12.1941H41.2538V17.2524H38.66V10.041H46.345V10.0415Z" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M33.3331 17.5107C35.655 17.5107 37.3792 16.0974 37.3792 13.9549C37.3792 11.8811 36.1071 10.5347 33.981 10.5347C32.9998 10.5347 32.1902 10.8776 31.5804 11.4692C31.726 10.2464 32.7676 9.35372 33.9144 9.35372C34.1791 9.35372 36.1717 9.34954 36.1717 9.34954L37.2985 7.20898C37.2985 7.20898 34.7968 7.26552 33.6339 7.26552C30.9768 7.31148 29.182 9.70913 29.182 12.6212C29.182 16.0138 30.9325 17.5107 33.3331 17.5107ZM33.3472 12.4307C34.2093 12.4307 34.807 12.9931 34.807 13.9546C34.807 14.82 34.2759 15.5331 33.3472 15.535C32.4588 15.535 31.8612 14.8743 31.8612 13.9694C31.8612 13.0076 32.4588 12.4307 33.3472 12.4307Z" fill="black"/>
                <path d="M27.0708 14.8384C27.0708 14.8384 26.4583 15.1889 25.5434 15.2553C24.4917 15.2862 23.5546 14.6268 23.5546 13.4551C23.5546 12.3122 24.3815 11.6572 25.517 11.6572C26.2132 11.6572 27.1342 12.1362 27.1342 12.1362C27.1342 12.1362 27.8081 10.9085 28.1572 10.2945C27.518 9.81353 26.6665 9.5498 25.6762 9.5498C23.1767 9.5498 21.2408 11.1676 21.2408 13.4406C21.2408 15.7427 23.0604 17.3228 25.6762 17.2751C26.4073 17.2481 27.416 16.9932 28.0307 16.6012L27.0708 14.8384Z" fill="black"/>
                <path d="M0.827637 5.92871L3.64556 10.9289V13.9789L0.830933 18.9692L0.827637 5.92871Z" fill="#5B57A2"/>
                <path d="M11.6473 9.10868L14.2878 7.50208L19.6918 7.49707L11.6473 12.3893V9.10868Z" fill="#D90751"/>
                <path d="M11.6323 5.89904L11.6473 12.5191L8.82275 10.7962V0.900391L11.6323 5.89904Z" fill="#FAB718"/>
                <path d="M19.6917 7.49756L14.2876 7.50256L11.6323 5.89904L8.82275 0.900391L19.6917 7.49756Z" fill="#ED6F26"/>
                <path d="M11.6473 18.9967V15.7849L8.82275 14.0947L8.82431 24.0004L11.6473 18.9967Z" fill="#63B22F"/>
                <path d="M14.2812 17.405L3.64536 10.9289L0.827637 5.92871L19.6803 17.3984L14.2812 17.405Z" fill="#1487C9"/>
                <path d="M8.82458 24.0006L11.6472 18.997L14.2811 17.405L19.6801 17.3984L8.82458 24.0006Z" fill="#017F36"/>
                <path d="M0.830933 18.9695L8.84587 14.0954L6.15128 12.4541L3.64556 13.9791L0.830933 18.9695Z" fill="#984995"/>
              </g>
              <defs>
                <clipPath id="clip0_3029_158">
                  <rect width="46.3448" height="23.1" fill="white" transform="translate(0.827637 0.900391)"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="44" viewBox="0 0 64 44" fill="none">
              <rect width="64" height="44" rx="12" fill="white"/>
              <rect x="0.5" y="0.5" width="63" height="43" rx="11.5" stroke="#2F2B43" stroke-opacity="0.1"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7698 20.1898C30.291 21.4324 28.3729 22.1825 26.2769 22.1825C21.6 22.1825 17.8087 18.448 17.8087 13.8412C17.8087 9.2345 21.6 5.5 26.2769 5.5C28.3729 5.5 30.291 6.2501 31.7698 7.49264C33.2485 6.2501 35.1666 5.5 37.2627 5.5C41.9395 5.5 45.7308 9.2345 45.7308 13.8412C45.7308 18.448 41.9395 22.1825 37.2627 22.1825C35.1666 22.1825 33.2485 21.4324 31.7698 20.1898Z" fill="#ED0006"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7697 20.1899C33.5904 18.66 34.745 16.3834 34.745 13.8412C34.745 11.2991 33.5904 9.0225 31.7697 7.49256C33.2484 6.25007 35.1665 5.5 37.2625 5.5C41.9393 5.5 45.7306 9.2345 45.7306 13.8412C45.7306 18.448 41.9393 22.1825 37.2625 22.1825C35.1665 22.1825 33.2484 21.4324 31.7697 20.1899Z" fill="#F9A000"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M31.7698 20.1894C33.5906 18.6594 34.7451 16.3829 34.7451 13.8408C34.7451 11.2986 33.5906 9.02212 31.7698 7.49219C29.9491 9.02212 28.7946 11.2986 28.7946 13.8408C28.7946 16.3829 29.9491 18.6594 31.7698 20.1894Z" fill="#FF5E00"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M24.3482 36.8968H21.6992L19.7128 29.1199C19.6185 28.7622 19.4183 28.4459 19.1238 28.2969C18.3889 27.9223 17.5791 27.6242 16.6957 27.4738V27.1744H20.963C21.552 27.1744 21.9937 27.6242 22.0673 28.1465L23.098 33.7562L25.7457 27.1744H28.3211L24.3482 36.8968ZM29.7933 36.8968H27.2916L29.3516 27.1744H31.8534L29.7933 36.8968ZM35.0904 29.8678C35.164 29.3442 35.6057 29.0448 36.121 29.0448C36.9308 28.9696 37.813 29.1199 38.5492 29.4932L38.9909 27.4C38.2547 27.1005 37.4449 26.9502 36.71 26.9502C34.2818 26.9502 32.515 28.2969 32.515 30.1659C32.515 31.5878 33.7665 32.3344 34.6499 32.7841C35.6057 33.2326 35.9738 33.532 35.9002 33.9805C35.9002 34.6532 35.164 34.9526 34.4291 34.9526C33.5456 34.9526 32.6622 34.7283 31.8537 34.3538L31.412 36.4483C32.2954 36.8216 33.2512 36.972 34.1346 36.972C36.8572 37.0458 38.5492 35.7004 38.5492 33.6811C38.5492 31.138 35.0904 30.989 35.0904 29.8678ZM47.3044 36.8968L45.3179 27.1744H43.1843C42.7425 27.1744 42.3008 27.4738 42.1536 27.9223L38.4752 36.8968H41.0506L41.5646 35.4762H44.729L45.0235 36.8968H47.3044ZM43.5523 29.7926L44.2872 33.4568H42.2272L43.5523 29.7926Z" fill="#172B85"/>
            </svg>
          </div>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="44" viewBox="0 0 64 44" fill="none">
              <rect width="64" height="44" rx="12" fill="white"/>
              <rect x="0.5" y="0.5" width="63" height="43" rx="11.5" stroke="#2F2B43" stroke-opacity="0.1"/>
              <path d="M43.3091 13.1416C43.9961 14.0424 44.5835 15.0268 45.0533 16.076L31.7911 25.9912L26.2499 22.4678V18.2291L31.7911 21.7525L43.3091 13.1416Z" fill="#21A038"/>
              <path d="M20.5972 22.169C20.5972 21.9789 20.6018 21.7899 20.6109 21.6021L17.2528 21.4316C17.2414 21.6762 17.2345 21.9221 17.2345 22.169C17.2345 26.2455 18.8633 29.937 21.4979 32.6095L23.8788 30.1944C21.8534 28.1376 20.5972 25.2994 20.5972 22.169Z" fill="url(#paint0_linear_3029_171)"/>
              <path d="M31.7893 10.8151C31.9769 10.8151 32.1631 10.822 32.3483 10.8313L32.5164 7.42382C32.2753 7.41223 32.0329 7.40527 31.7893 7.40527C27.7707 7.40527 24.1313 9.05741 21.4967 11.7298L23.8776 14.1449C25.9052 12.0881 28.7033 10.8151 31.7893 10.8151Z" fill="url(#paint1_linear_3029_171)"/>
              <path d="M31.7902 33.523C31.6028 33.523 31.4165 33.5184 31.2313 33.509L31.0632 36.9153C31.3044 36.927 31.5467 36.9338 31.7902 36.9338C35.8089 36.9338 39.4483 35.2817 42.0829 32.6094L39.702 30.1943C37.6743 32.2488 34.8763 33.523 31.7902 33.523Z" fill="url(#paint2_linear_3029_171)"/>
              <path d="M38.102 12.7965L40.9333 10.6806C38.4346 8.63191 35.2549 7.40527 31.7915 7.40527V10.8162C34.1313 10.8151 36.3041 11.5478 38.102 12.7965Z" fill="url(#paint3_linear_3029_171)"/>
              <path d="M46.3449 22.1692C46.3449 21.266 46.2648 20.3825 46.1117 19.5234L42.9787 21.8654C42.981 21.9663 42.9833 22.0671 42.9833 22.168C42.9833 25.5013 41.5591 28.5041 39.2959 30.5829L41.5557 33.1162C44.4966 30.416 46.3449 26.5111 46.3449 22.1692Z" fill="#21A038"/>
              <path d="M31.7913 33.5234C28.5052 33.5234 25.5448 32.0788 23.4954 29.7832L20.9979 32.0753C23.6611 35.0597 27.5107 36.9343 31.7913 36.9343V33.5234Z" fill="url(#paint4_linear_3029_171)"/>
              <path d="M24.2845 13.754L22.0248 11.2207C19.0827 13.9221 17.2345 17.8269 17.2345 22.169H20.5972C20.5983 18.8345 22.0214 15.8328 24.2845 13.754Z" fill="url(#paint5_linear_3029_171)"/>
              <defs>
                <linearGradient id="paint0_linear_3029_171" x1="20.7682" y1="32.1819" x2="17.4996" y2="22.8677" gradientUnits="userSpaceOnUse">
                  <stop offset="0.1444" stop-color="#F2E913"/>
                  <stop offset="0.3037" stop-color="#E7E518"/>
                  <stop offset="0.5823" stop-color="#CADB26"/>
                  <stop offset="0.891" stop-color="#A3CD39"/>
                </linearGradient>
                <linearGradient id="paint1_linear_3029_171" x1="22.4577" y1="10.9837" x2="30.4967" y2="7.9635" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0592" stop-color="#0FA8E0"/>
                  <stop offset="0.5385" stop-color="#0099F9"/>
                  <stop offset="0.9234" stop-color="#0291EB"/>
                </linearGradient>
                <linearGradient id="paint2_linear_3029_171" x1="30.8413" y1="33.7397" x2="40.9105" y2="31.4963" gradientUnits="userSpaceOnUse">
                  <stop offset="0.1226" stop-color="#A3CD39"/>
                  <stop offset="0.2846" stop-color="#86C339"/>
                  <stop offset="0.8693" stop-color="#21A038"/>
                </linearGradient>
                <linearGradient id="paint3_linear_3029_171" x1="31.088" y1="9.92103" x2="39.2435" y2="12.4018" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0566" stop-color="#0291EB"/>
                  <stop offset="0.79" stop-color="#0C8ACB"/>
                </linearGradient>
                <linearGradient id="paint4_linear_3029_171" x1="21.8413" y1="33.0453" x2="30.494" y2="36.2325" gradientUnits="userSpaceOnUse">
                  <stop offset="0.1324" stop-color="#F2E913"/>
                  <stop offset="0.2977" stop-color="#EBE716"/>
                  <stop offset="0.5306" stop-color="#D9E01F"/>
                  <stop offset="0.8023" stop-color="#BBD62D"/>
                  <stop offset="0.9829" stop-color="#A3CD39"/>
                </linearGradient>
                <linearGradient id="paint5_linear_3029_171" x1="20.3515" y1="22.582" x2="23.8604" y2="13.583" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0698" stop-color="#A3CD39"/>
                  <stop offset="0.2599" stop-color="#81C55F"/>
                  <stop offset="0.9216" stop-color="#0FA8E0"/>
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
        <div class="req-mini">
          <p><?php echo get_field('ip', 'options'); ?></p>
          <p><?php echo get_field('inn', 'options'); ?></p>
          <p><?php echo get_field('ogrn', 'options'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container footer-bottom-wrap">
      <div class="footer-bottom-left">
        <span>© МЕРЧ.РФ <?php echo date('Y'); ?></span>
       
      </div>
      <div class="footer-bottom-right">
        <?php if (!is_page(3)) : ?>
          <a href="<?php echo get_the_permalink(3); ?>" target="blank">
            Политика конфиденциальности
          </a>
          <?php else : ?>
          <span>
            Политика конфиденциальности
          </span>
        <?php endif; ?>
        <a href="#">Карта сайта</a>
        <?php if (!is_page(362)) : ?>
          <a href="<?php echo get_the_permalink(362); ?>" target="blank">
            Публичная оферта
          </a>
          <?php else : ?>
          <span>
            Публичная оферта
          </span>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <meta itemprop="copyrightYear" content="2024">
  <meta itemprop="copyrightHolder" content="Мерч.рф">
</footer>

<!-- Popups -->
  <div class="overlay" style="display: none"></div>

  <div class="portfolio-popup">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper">
      <div class="loader">Загрузка...</div>
    </div>
  </div>

  <div class="popup popup-video" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <iframe width="860" height="515" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="popup popup-callback" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper">
      <div class="form form-white">
        <b class="roboto">Возникли вопросы?</b>
        <p class="subtitle">
          Наш эксперт перезвонит вам за 30 секунд, поможет с выбором и предоставит скидку!
        </p>
        <?php echo do_shortcode('[contact-form-7 id="c338e7d" title="Возникли вопросы? (попап)"]'); ?>
      </div>
      <div class="manager">
        <div class="left">
          <div class="avatar">
            <img src="<?php echo get_field('banner_avatar','options'); ?>" alt="<?php echo get_field('banner_name','options'); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php echo get_field('banner_name','options'); ?></b>
            <p><?php echo get_field('banner_place','options'); ?></p>
          </div>
        </div>
        <div class="right">
          <a href="tel:<?php echo get_field('phone','options'); ?>" class="roboto phone">
            <?php echo get_field('phone','options'); ?>
          </a>
          <span><?php echo get_field('work_time', 'options'); ?></span>
        </div>
        
      </div>
    </div>
    
  </div>

  <div class="popup popup-sizes" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper">
      <b class="roboto"><?php echo get_field('size_title', 'blocks'); ?></b>
      <p class="subtitle"><?php echo get_field('size_subtitle', 'blocks'); ?></p>
      <div class="table">
        <?php
          $table = get_field( 'size_table', 'blocks');
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
              echo '<span>'.$table['caption'].'</span>';
          }
        ?>
      </div>
    </div>
    
  </div>

  <div class="popup popup-order" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper">
      <div class="form form-white">
        <b class="roboto">Заказать расчёт</b>
        <p class="subtitle">
          Наш эксперт подготовит смету для вас
        </p>
        <div class="data" id="data-product" style="display: none">
      
        </div>
        <?php echo do_shortcode('[contact-form-7 id="6321e67" title="Заказать расчёт (попап)"]'); ?>
      </div>
      
      <div class="manager">
        <div class="left">
          <div class="avatar">
            <img src="<?php echo get_field('banner_avatar','options'); ?>" alt="<?php echo get_field('banner_name','options'); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php echo get_field('banner_name','options'); ?></b>
            <p><?php echo get_field('banner_place','options'); ?></p>
          </div>
        </div>
        <div class="right">
          <a href="tel:<?php echo get_field('phone','options'); ?>" class="roboto phone">
            <?php echo get_field('phone','options'); ?>
          </a>
          <span><?php echo get_field('work_time', 'options'); ?></span>
        </div>
        
      </div>
    </div>
    
  </div>

  <div class="popup popup-portfolio" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper">
      <div class="form form-white">
        <b class="roboto">Заказать расчёт</b>
        <p class="subtitle">
          Наш эксперт подготовит смету для вас
        </p>
        <?php echo do_shortcode('[contact-form-7 id="293efb6" title="Заказ из портфолио"]'); ?>
      </div>
      <div class="data" id="data-product" style="display: none">

      </div>
      <div class="manager">
        <div class="left">
          <div class="avatar">
            <img src="<?php echo get_field('banner_avatar','options'); ?>" alt="<?php echo get_field('banner_name','options'); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php echo get_field('banner_name','options'); ?></b>
            <p><?php echo get_field('banner_place','options'); ?></p>
          </div>
        </div>
        <div class="right">
          <a href="tel:<?php echo get_field('phone','options'); ?>" class="roboto phone">
            <?php echo get_field('phone','options'); ?>
          </a>
          <span><?php echo get_field('work_time', 'options'); ?></span>
        </div>
        
      </div>
    </div>
    
  </div>

  <div class="popup thanks" id="thx" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper-thx">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
          <rect x="29.6666" y="29.1666" width="45.8333" height="45.8333" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.70837 50C5.70837 74.738 25.7623 94.7917 50.5 94.7917C75.238 94.7917 95.2917 74.738 95.2917 50C95.2917 25.2623 75.238 5.20837 50.5 5.20837C25.7623 5.20837 5.70837 25.2623 5.70837 50ZM69.9821 34.4286C71.6784 35.9835 71.793 38.6193 70.2384 40.3156L47.3217 65.3155C46.5534 66.1534 45.4767 66.6409 44.3405 66.6659C43.2042 66.6905 42.1074 66.25 41.3037 65.4463L30.8871 55.0296C29.2599 53.4025 29.2599 50.7642 30.8871 49.1371C32.5143 47.51 35.1525 47.51 36.7797 49.1371L44.1192 56.4767L64.095 34.6845C65.65 32.9882 68.2859 32.8736 69.9821 34.4286Z" fill="#71E69B"/>
        </svg>
      </div>
      <b>Спасибо за заявку!</b>
      <p>Мы получили вашу заявку и свяжемся с вами через несколько минут</p>
      <div class="button close-button">
        Понятно
      </div>
    </div>
  </div>

  <div class="popup thanks" id="thx-feed" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper-thx">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
          <rect x="29.6666" y="29.1666" width="45.8333" height="45.8333" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.70837 50C5.70837 74.738 25.7623 94.7917 50.5 94.7917C75.238 94.7917 95.2917 74.738 95.2917 50C95.2917 25.2623 75.238 5.20837 50.5 5.20837C25.7623 5.20837 5.70837 25.2623 5.70837 50ZM69.9821 34.4286C71.6784 35.9835 71.793 38.6193 70.2384 40.3156L47.3217 65.3155C46.5534 66.1534 45.4767 66.6409 44.3405 66.6659C43.2042 66.6905 42.1074 66.25 41.3037 65.4463L30.8871 55.0296C29.2599 53.4025 29.2599 50.7642 30.8871 49.1371C32.5143 47.51 35.1525 47.51 36.7797 49.1371L44.1192 56.4767L64.095 34.6845C65.65 32.9882 68.2859 32.8736 69.9821 34.4286Z" fill="#71E69B"/>
        </svg>
      </div>
      <b>Спасибо за отзыв!</b>
      <p>Ваш отзыв будет опубликован после модерации</p>
      <div class="button close-button">
        Понятно
      </div>
    </div>
  </div>

  <div class="popup thanks" id="thx-subscribe" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper-thx">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
          <rect x="29.6666" y="29.1666" width="45.8333" height="45.8333" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.70837 50C5.70837 74.738 25.7623 94.7917 50.5 94.7917C75.238 94.7917 95.2917 74.738 95.2917 50C95.2917 25.2623 75.238 5.20837 50.5 5.20837C25.7623 5.20837 5.70837 25.2623 5.70837 50ZM69.9821 34.4286C71.6784 35.9835 71.793 38.6193 70.2384 40.3156L47.3217 65.3155C46.5534 66.1534 45.4767 66.6409 44.3405 66.6659C43.2042 66.6905 42.1074 66.25 41.3037 65.4463L30.8871 55.0296C29.2599 53.4025 29.2599 50.7642 30.8871 49.1371C32.5143 47.51 35.1525 47.51 36.7797 49.1371L44.1192 56.4767L64.095 34.6845C65.65 32.9882 68.2859 32.8736 69.9821 34.4286Z" fill="#71E69B"/>
        </svg>
      </div>
      <b>Спасибо за подписку!</b>
      <p>Мы присылаем только самые важные публикации</p>
      <div class="button close-button">
        Понятно
      </div>
    </div>
  </div>

  <div class="cookie" style="display: none">
    <b class="roboto">Используем куки для улучшения работы сайта</b>
    <p>Оставаясь с нами, вы <span>соглашаетесь</span> на использование файлов куки</p>
    <div class="button"><span>Понятно</span></div>
  </div>
<!-- Popup's END -->

<!-- PC catalog -->
<div class="pc-catalog" style="display: none">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <?php 
          $current_url = untrailingslashit($_SERVER['REQUEST_URI']); // Текущий URL без конечного слеша
          if (have_rows('cat_menu', 'menu_cat')) : while(have_rows('cat_menu', 'menu_cat')) : the_row(); 
            $main_link_url = untrailingslashit(parse_url(get_sub_field('main_link'), PHP_URL_PATH)); // URL для основного пункта меню
        ?>
        <div class="item-wrapper">
          <?php if ($current_url === $main_link_url) : ?>
            <span class="item">
              <div class="icon">
                <img src="<?php echo get_sub_field('main_img'); ?>" alt="<?php echo get_sub_field('main_title'); ?>">
              </div>
              <p class="roboto"><?php echo get_sub_field('main_title'); ?></p>
            </span>
          <?php else : ?>
            <a href="<?php echo esc_url($main_link_url); ?>" class="item">
              <div class="icon">
                <?php if (get_sub_field('main_img')) : ?>
                  <img src="<?php echo get_sub_field('main_img'); ?>" alt="<?php echo get_sub_field('main_title'); ?>">
                  <?php else : ?>
                  <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php echo get_sub_field('main_title'); ?>">
                <?php endif; ?>
                
              </div>
              <p class="roboto"><?php echo get_sub_field('main_title'); ?></p>
            </a>
          <?php endif; ?>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="right">
        <?php if (have_rows('cat_menu', 'menu_cat')) : while(have_rows('cat_menu', 'menu_cat')) : the_row();  ?>
          <div class="wrapper">
            <?php if (have_rows('sub_menu')) : while(have_rows('sub_menu')) : the_row(); ?>
              <div class="sub-list">
                <?php if (get_sub_field('sub_title')) : ?>
                  <b class="sub-list-title roboto">
                    <?php echo get_sub_field('sub_title'); ?>
                  </b>
                <?php endif; ?>
                <div class="sub-list-menu">
                  <?php if (have_rows('sub_menu_list')) : while(have_rows('sub_menu_list')) : the_row(); ?>
                    <?php 
                      $sub_link_url = untrailingslashit(parse_url(get_sub_field('link'), PHP_URL_PATH)); // URL для основного пункта меню
                    ?>
                    <?php if ($current_url === $sub_link_url) : ?>
                      <span>
                        <?php echo get_sub_field('name'); ?>
                      </span>
                    <?php else : ?>
                      <a href="<?php echo get_sub_field('link'); ?>">
                        <?php echo get_sub_field('name'); ?>
                      </a>
                    <?php endif; ?>
                  <?php endwhile; endif; ?>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- PC catalog END -->

<div class="mob-catalog" style="display: none">
  <div class="container">
    <div class="wrap">
      <div class="top">
        <div class="mob-catalog-back">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
              <path d="M6.25 15L25 14.9998" stroke="#141B34" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.25 8.74988L5.88385 14.116C5.46718 14.5327 5.25885 14.741 5.25885 14.9999C5.25885 15.2588 5.46718 15.4672 5.88385 15.8838L11.25 21.2499" stroke="#141B34" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <b class="roboto">
            Каталог
          </b>
        </div>
        <div class="mob-catalog-close icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>
      <div class="wrap">
        <?php 
          $current_url = untrailingslashit($_SERVER['REQUEST_URI']); // Текущий URL без конечного слеша
          if (have_rows('cat_menu', 'menu_cat')) : while(have_rows('cat_menu', 'menu_cat')) : the_row(); 
            $main_link_url = untrailingslashit(parse_url(get_sub_field('main_link'), PHP_URL_PATH)); // URL для основного пункта меню
            $main_title = get_sub_field('main_title');
        ?>
        <div class="item-wrapper">
          <?php if ($current_url === $main_link_url) : ?>
            <span class="item">
              <div class="icon">
                <img src="<?php echo get_sub_field('main_img'); ?>" alt="<?php echo get_sub_field('main_title'); ?>">
              </div>
              <p class="roboto"><?php echo get_sub_field('main_title'); ?></p>
            </span>
          <?php else : ?>
            <a href="<?php echo esc_url($main_link_url); ?>" class="item">
              <div class="icon">
                <?php if (get_sub_field('main_img')) : ?>
                  <img src="<?php echo get_sub_field('main_img'); ?>" alt="<?php echo get_sub_field('main_title'); ?>">
                  <?php else : ?>
                  <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php echo get_sub_field('main_title'); ?>">
                <?php endif; ?>
                
              </div>
              <p class="roboto"><?php echo get_sub_field('main_title'); ?></p>
            </a>
          <?php endif; ?>
          <div class="sub-cat-menu">
            <div class="sub-top">
              <div class="sub-top-back">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                    <path d="M6.25 15L25 14.9998" stroke="#141B34" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.25 8.74988L5.88385 14.116C5.46718 14.5327 5.25885 14.741 5.25885 14.9999C5.25885 15.2588 5.46718 15.4672 5.88385 15.8838L11.25 21.2499" stroke="#141B34" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <b class="roboto"><?php echo $main_title; ?></b>
              </div>
              <div class="sub-top-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>
            <?php if (have_rows('sub_menu')) : while(have_rows('sub_menu')) : the_row(); ?>
              <div class="sub-list">
                <?php if (get_sub_field('sub_title')) : ?>
                  <b class="sub-list-title roboto">
                    <?php echo get_sub_field('sub_title'); ?>
                  </b>
                <?php endif; ?>
                <div class="sub-list-menu">
                  <?php if (have_rows('sub_menu_list')) : while(have_rows('sub_menu_list')) : the_row(); ?>
                    <?php 
                      $sub_link_url = untrailingslashit(parse_url(get_sub_field('link'), PHP_URL_PATH)); // URL для основного пункта меню
                    ?>
                    <?php if ($current_url === $sub_link_url) : ?>
                      <span>
                        <?php echo get_sub_field('name'); ?>
                      </span>
                    <?php else : ?>
                      <a href="<?php echo get_sub_field('link'); ?>">
                        <?php echo get_sub_field('name'); ?>
                      </a>
                    <?php endif; ?>
                  <?php endwhile; endif; ?>
                </div>
              </div>
            <?php endwhile; endif; ?>
            <?php if ($current_url != $main_link_url) : ?>
            <div class="all-link-main">
              <a href="<?php echo $main_link_url; ?>">
                <b class="roboto"><?php echo $main_title; ?></b>
                <span>Все товары категории</span>
              </a>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="sub-wrappers">
        <?php if (have_rows('cat_menu', 'menu_cat')) : while(have_rows('cat_menu', 'menu_cat')) : the_row();  ?>
          
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Mob header menu's -->
<div class="mob-menu" style="display: none">
  <div class="container">
    <div class="top">
      <?php if (is_home()) : ?>
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ПринтСреда">
        </div>
        <?php else : ?>
        <a href="/" class="logo" title="Вернуться на главную">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ПринтСреда" >
        </a>
      <?php endif; ?> 
      <div class="close icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <div class="wrap">
      <nav class="menu" itemscope itemtype="http://schema.org/SiteNavigationElement"> 
        <div class="mob-catalog-toggle">
          <span>Каталог</span>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
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
      <div class="mob-menu-contacts">
        <div class="row-left">
          <div class="meta">
            <a class="roboto" target="blank" href="tel:<?php echo get_field('phone','options'); ?>"><?php echo get_field('phone','options'); ?></a>
            <span>Телефон в Москве</span>
          </div>
          <div class="meta">
            <b><?php echo get_field('work_time','options'); ?></b>
            <span>Режим работы</span>
          </div>
        </div>
        <div class="row-right">
          <a href="<?php echo get_field('wa','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.1273 13.8243C16.8738 13.6982 15.6312 13.0904 15.3999 13.0058C15.1685 12.922 15.0001 12.8805 14.8308 13.1327C14.6624 13.3833 14.1785 13.9504 14.0313 14.118C13.8833 14.2865 13.7362 14.3068 13.4836 14.1815C13.231 14.0545 12.4162 13.7896 11.4508 12.933C10.6998 12.266 10.192 11.4424 10.0448 11.1901C9.8977 10.9387 10.0287 10.8024 10.1554 10.6771C10.2694 10.5646 10.408 10.3834 10.5348 10.237C10.6615 10.0897 10.7032 9.98474 10.7874 9.81629C10.8724 9.64869 10.8299 9.50225 10.7661 9.37613C10.7032 9.25 10.1979 8.01162 9.98701 7.50798C9.78203 7.01787 9.57365 7.08474 9.41885 7.07628C9.27085 7.06951 9.10245 7.06781 8.93404 7.06781C8.76563 7.06781 8.49176 7.13045 8.26041 7.3827C8.02821 7.6341 7.37585 8.24271 7.37585 9.48109C7.37585 10.7186 8.28082 11.9147 8.40755 12.0831C8.53428 12.2507 10.1894 14.7918 12.7249 15.8812C13.3288 16.1402 13.7991 16.2951 14.1657 16.4103C14.7713 16.6024 15.3225 16.5753 15.7579 16.5101C16.2427 16.4382 17.2532 15.9015 17.4641 15.3141C17.6742 14.7266 17.6742 14.223 17.6113 14.118C17.5483 14.0131 17.3799 13.9504 17.1265 13.8243H17.1273ZM12.5157 20.0907H12.5123C11.0063 20.091 9.52803 19.6881 8.23234 18.9243L7.92615 18.7431L4.74342 19.5744L5.59311 16.4864L5.39323 16.1699C4.55132 14.8361 4.10577 13.2925 4.10807 11.7175C4.10977 7.10421 7.88107 3.35098 12.5191 3.35098C14.7645 3.35098 16.8755 4.22284 18.4627 5.80404C19.2455 6.57989 19.8659 7.50253 20.2882 8.51857C20.7104 9.53461 20.9259 10.6239 20.9224 11.7234C20.9207 16.3366 17.1494 20.0907 12.5157 20.0907ZM19.6704 4.6029C18.7333 3.6641 17.6183 2.91973 16.39 2.41292C15.1617 1.90611 13.8445 1.64694 12.5148 1.65043C6.94037 1.65043 2.40188 6.16633 2.40018 11.7166C2.39933 13.4908 2.86457 15.2227 3.74999 16.7489L2.31512 21.9656L7.67694 20.5656C9.16018 21.3698 10.8223 21.7912 12.5114 21.7913H12.5157C18.0901 21.7913 22.6286 17.2754 22.6303 11.7242C22.6344 10.4014 22.3749 9.09095 21.8669 7.8686C21.3588 6.64624 20.6123 5.53627 19.6704 4.6029Z" fill="#fff"/>
            </svg>
          </a>
          <a href="<?php echo get_field('tg','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.95103 10.8534C8.29574 8.52476 11.8597 6.9896 13.643 6.24789C18.7345 4.13015 19.7925 3.76228 20.482 3.75013C20.6337 3.74746 20.9728 3.78504 21.1925 3.96329C21.378 4.11379 21.429 4.3171 21.4534 4.45979C21.4778 4.60248 21.5082 4.92754 21.4841 5.18154C21.2082 8.08056 20.0143 15.1157 19.4069 18.3627C19.1499 19.7366 18.6439 20.1972 18.154 20.2423C17.0893 20.3403 16.2808 19.5387 15.2496 18.8627C13.636 17.805 12.7244 17.1465 11.1581 16.1144C9.34796 14.9215 10.5214 14.2659 11.553 13.1945C11.823 12.9141 16.514 8.64722 16.6048 8.26015C16.6161 8.21174 16.6267 8.03129 16.5195 7.93601C16.4123 7.84073 16.254 7.87331 16.1399 7.89922C15.978 7.93596 13.4002 9.63977 8.40651 13.0107C7.67482 13.5131 7.01207 13.7579 6.41827 13.7451C5.76366 13.7309 4.50444 13.375 3.56834 13.0707C2.42017 12.6975 1.50764 12.5001 1.5871 11.8663C1.62849 11.5361 2.08313 11.1985 2.95103 10.8534Z" fill="#fff"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mob header menu's END -->

<!-- Filters popup -->

<!-- Filters popup END -->

<div id="up-arr" style="display: none">
  <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
      <path d="M15 6.25L15.0002 25" stroke="#141B34" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M21.2502 11.25L15.884 5.88391C15.4674 5.46724 15.259 5.25891 15.0001 5.25891C14.7413 5.25891 14.5329 5.46724 14.1163 5.88391L8.75013 11.25" stroke="#141B34" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
</div>

<?php wp_footer(); ?>

<?php if (/* !is_page(380) &&  */!is_archive() && !is_singular('post')) : ?>
<div itemscope itemtype="http://schema.org/Organization" style="display: none;">
  <span itemprop="name">ООО «Принтмастер»</span>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">вн.тер.г. Муниципальный Округ Академический, ул Ивана Бабушкина, д. 18, к. 2</span>,
    <span itemprop="addressLocality">Г.Москва</span>,
    <span itemprop="postalCode">117292Пн-Пт: 10.00 - 19.00</span>
  </div>
  Телефон: <span itemprop="telephone"><?php the_field('phone','options'); ?></span>
</div>
<?php endif; ?>
</body>
</html>
