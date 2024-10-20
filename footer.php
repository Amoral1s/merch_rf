
<footer itemscope itemtype="https://schema.org/WPFooter" class="footer" style="display: none">
  <div class="container">
    <div class="wrap">
      <div class="item first">
        <?php if (is_home()) : ?>
          <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ПринтСреда">
          </div>
          <?php else : ?>
          <a href="/" class="logo" title="Вернуться на главную">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ПринтСреда" >
          </a>
        <?php endif; ?>
        <div class="footer-contacts row">
          <div class="phone-wrap">
            <a target="blank" href="tel:<?php echo get_field('phone','options'); ?>"><?php echo get_field('phone','options'); ?></a>
            <span class="call-callback">
              Обратный звонок
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
        <div class="footer-address">
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
        <div class="footer-email">
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
      <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="item menu">
        <b>О компании</b>
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
        <b>Клиентам</b>
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
        <b>Продукция</b>
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
      <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="item menu">
        <b>Услуги</b>
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
          <?php  
            wp_nav_menu( array(
              'menu_class' => '',
              'theme_location' => 'menu-5',
              'container' => null,
              'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
            )); 
          ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container footer-bottom-wrap">
      <div class="footer-bottom-left">
        <?php if (!is_page(3)) : ?>
          <a href="<?php echo get_the_permalink(3); ?>" target="blank">
            Политика конфиденциальности
          </a>
          <?php else : ?>
          <span>
            Политика конфиденциальности
          </span>
        <?php endif; ?>
        <?php if (!is_page(362)) : ?>
          <a href="<?php echo get_the_permalink(362); ?>" target="blank">
            Пользовательское соглашение
          </a>
          <?php else : ?>
          <span>
            Пользовательское соглашение
          </span>
        <?php endif; ?>
      </div>
      <div class="footer-bottom-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="40" viewBox="0 0 58 40" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9171 26.4299H14.4842L11.9099 16.3201C11.7877 15.8551 11.5283 15.444 11.1467 15.2502C10.1943 14.7632 9.14486 14.3757 8 14.1802V13.791H13.5301C14.2934 13.791 14.8658 14.3757 14.9612 15.0547L16.2969 22.3473L19.7281 13.791H23.0656L17.9171 26.4299ZM24.9745 26.4299H21.7324L24.4021 13.791H27.6442L24.9745 26.4299ZM31.8372 17.2929C31.9326 16.6121 32.505 16.2229 33.1729 16.2229C34.2223 16.1252 35.3655 16.3206 36.3196 16.8059L36.892 14.0847C35.9379 13.6955 34.8885 13.5 33.9361 13.5C30.7894 13.5 28.4997 15.2507 28.4997 17.6804C28.4997 19.5288 30.1216 20.4993 31.2665 21.084C32.505 21.667 32.9821 22.0563 32.8867 22.6393C32.8867 23.5137 31.9326 23.903 30.9802 23.903C29.8354 23.903 28.6905 23.6115 27.6427 23.1245L27.0703 25.8474C28.2152 26.3327 29.4538 26.5281 30.5986 26.5281C34.1269 26.6242 36.3196 24.8752 36.3196 22.25C36.3196 18.9441 31.8372 18.7504 31.8372 17.2929ZM47.6666 26.4299L45.0924 13.791H42.3273C41.7549 13.791 41.1824 14.1802 40.9916 14.7632L36.2247 26.4299H39.5622L40.2284 24.5832H44.3291L44.7107 26.4299H47.6666ZM42.8052 17.1953L43.7576 21.9587H41.0879L42.8052 17.1953Z" fill="#885C8C"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="40" viewBox="0 0 58 40" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M28.6312 28.0489C26.6579 29.7121 24.0982 30.7161 21.3011 30.7161C15.0597 30.7161 10 25.7167 10 19.5495C10 13.3823 15.0597 8.38281 21.3011 8.38281C24.0982 8.38281 26.6579 9.38684 28.6312 11.05C30.6046 9.38684 33.1643 8.38281 35.9613 8.38281C42.2028 8.38281 47.2625 13.3823 47.2625 19.5495C47.2625 25.7167 42.2028 30.7161 35.9613 30.7161C33.1643 30.7161 30.6046 29.7121 28.6312 28.0489Z" fill="#885C8C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M28.6312 28.0489C31.0613 26.0007 32.6023 22.9529 32.6023 19.5495C32.6023 16.146 31.0613 13.0982 28.6312 11.05C30.6046 9.38684 33.1643 8.38281 35.9613 8.38281C42.2028 8.38281 47.2625 13.3823 47.2625 19.5495C47.2625 25.7167 42.2028 30.7161 35.9613 30.7161C33.1643 30.7161 30.6046 29.7121 28.6312 28.0489Z" fill="#885C8C"/>
          <path opacity="0.6" fill-rule="evenodd" clip-rule="evenodd" d="M28.6312 28.0487C31.0613 26.0005 32.6023 22.9527 32.6023 19.5492C32.6023 16.1458 31.0613 13.098 28.6312 11.0498C26.2011 13.098 24.6602 16.1458 24.6602 19.5492C24.6602 22.9527 26.2011 26.0005 28.6312 28.0487Z" fill="#48264A"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="40" viewBox="0 0 58 40" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1292 14V14.0053C19.124 14.0053 17.4786 14 17.0398 15.5842C16.6376 17.0369 15.5042 21.0474 15.4728 21.1579H15.1594C15.1594 21.1579 13.9998 17.0579 13.5924 15.579C13.1536 13.9947 11.503 14 11.503 14H7.74219V26.0527H11.503V18.8948H11.6597H11.8164L14.0103 26.0527H16.622L18.8158 18.9H19.1292V26.0527H22.89V14H19.1292Z" fill="#885C8C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M32.8672 14C32.8672 14 31.7651 14.1 31.2479 15.2632L28.584 21.1579H28.2706V14H24.5098V26.0527H28.0617C28.0617 26.0527 29.216 25.9474 29.7332 24.7895L32.3449 18.8948H32.6583V26.0527H36.4191V14H32.8672Z" fill="#885C8C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M38.09 19.4746V26.0536H41.8508V22.2115H45.9251C47.701 22.2115 49.2054 21.0694 49.7643 19.4746H38.09Z" fill="#885C8C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M45.9252 14H37.5625C37.9804 16.2947 39.6884 18.1369 41.8979 18.7369C42.3994 18.8737 42.9269 18.9474 43.4702 18.9474H49.9158C49.9733 18.6737 49.9994 18.3948 49.9994 18.1053C49.9994 15.8369 48.1764 14 45.9252 14Z" fill="#885C8C"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="21" viewBox="0 0 42 21" fill="none">
          <g clip-path="url(#clip0_6214_2840)">
            <path d="M41.2496 8.30904V14.8644H38.899V10.266H36.6357V14.8644H34.2852V8.30859H41.2496V8.30904Z" fill="#885C8C"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.4592 15.0995C31.5634 15.0995 33.126 13.8147 33.126 11.867C33.126 9.9818 31.9731 8.75778 30.0464 8.75778C29.1572 8.75778 28.4235 9.06948 27.8708 9.60731C28.0027 8.49568 28.9467 7.68414 29.986 7.68414C30.2259 7.68414 32.0317 7.68034 32.0317 7.68034L33.0528 5.73438C33.0528 5.73438 30.7857 5.78577 29.7318 5.78577C27.3238 5.82755 25.6973 8.00723 25.6973 10.6546C25.6973 13.7388 27.2836 15.0995 29.4592 15.0995ZM29.472 10.4814C30.2533 10.4814 30.7949 10.9927 30.7949 11.8668C30.7949 12.6535 30.3136 13.3017 29.472 13.3035C28.6669 13.3035 28.1253 12.7029 28.1253 11.8802C28.1253 11.0058 28.6669 10.4814 29.472 10.4814Z" fill="#885C8C"/>
            <path d="M23.7834 12.6711C23.7834 12.6711 23.2283 12.9897 22.3992 13.0501C21.4461 13.0782 20.5968 12.4787 20.5968 11.4136C20.5968 10.3746 21.3462 9.77908 22.3752 9.77908C23.0062 9.77908 23.8409 10.2146 23.8409 10.2146C23.8409 10.2146 24.4516 9.09847 24.768 8.54031C24.1886 8.10304 23.417 7.86328 22.5195 7.86328C20.2544 7.86328 18.5 9.33398 18.5 11.4004C18.5 13.4931 20.149 14.9297 22.5195 14.8863C23.1821 14.8617 24.0962 14.63 24.6533 14.2736L23.7834 12.6711Z" fill="#885C8C"/>
            <path d="M0 4.57031L2.55374 9.11594V11.8886L0.00298745 16.4253L0 4.57031Z" fill="#885C8C"/>
            <path d="M9.80469 7.46315L12.1976 6.0026L17.0949 5.99805L9.80469 10.4455V7.46315Z" fill="#885C8C"/>
            <path d="M9.79228 4.54423L9.80581 10.5625L7.24609 8.99623V0L9.79228 4.54423Z" fill="#885C8C"/>
            <path d="M17.0961 5.99743L12.1986 6.00198L9.79228 4.54422L7.24609 0L17.0961 5.99743Z" fill="#885C8C"/>
            <path d="M9.80581 16.4505V13.5306L7.24609 11.9941L7.2475 20.9993L9.80581 16.4505Z" fill="#885C8C"/>
            <path d="M12.1923 15.0033L2.55357 9.11594L0 4.57031L17.0852 14.9973L12.1923 15.0033Z" fill="#885C8C"/>
            <path d="M7.24805 21L9.80601 16.4512L12.193 15.004L17.0859 14.998L7.24805 21Z" fill="#885C8C"/>
            <path d="M0.00390625 16.427L7.26745 11.996L4.82547 10.5039L2.55466 11.8903L0.00390625 16.427Z" fill="#885C8C"/>
          </g>
          <defs>
            <clipPath id="clip0_6214_2840">
              <rect width="42" height="21" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>
  </div>
  <meta itemprop="copyrightYear" content="2024">
  <meta itemprop="copyrightHolder" content="ООО «Принтмастер»">
</footer>

<!-- Popups -->


  <div class="overlay" style="display: none"></div>

  <div class="popup popup-video" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <iframe width="860" height="515" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="popup popup-callback" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper">
      <div class="form form-white">
        <b>Бесплатная консультация</b>
        <p class="subtitle">
          Заполните ваши контактные данные и мы перезвоним в течение рабочего дня
        </p>
        <?php echo do_shortcode('[contact-form-7 id="85543e7" title="Консультация (Popup)"]'); ?>
      </div>
    </div>
    
  </div>

  <div class="popup thanks" id="thx" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper-thx">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="80" viewBox="0 0 81 80" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M40.5 75.8334C20.7098 75.8334 4.66669 59.7904 4.66669 40C4.66669 20.2098 20.7098 4.16669 40.5 4.16669C60.2904 4.16669 76.3334 20.2098 76.3334 40C76.3334 59.7904 60.2904 75.8334 40.5 75.8334ZM55.4333 31.2586C57.0484 30.3753 57.6417 28.3498 56.7584 26.7346C55.875 25.1194 53.8497 24.5261 52.2347 25.4094C46.139 28.7429 41.0987 35.1764 37.7097 40.3654C36.4574 42.2834 35.3874 44.099 34.5314 45.637C33.7328 44.8624 32.942 44.19 32.2346 43.6307C31.309 42.899 30.4761 42.3217 29.8688 41.924L28.8187 41.2717C27.2195 40.3597 25.1838 40.9167 24.2718 42.516C23.3599 44.1147 23.9165 46.1497 25.5148 47.0624L26.2157 47.5007C26.6918 47.8124 27.3588 48.2744 28.0999 48.8604C29.6251 50.066 31.2709 51.6467 32.3066 53.3784C32.9423 54.441 34.1147 55.0637 35.351 54.9957C36.587 54.9273 37.6837 54.1787 38.1987 53.053L38.5264 52.3684C38.752 51.907 39.09 51.2324 39.53 50.4014C40.4117 48.7357 41.6937 46.4574 43.2914 44.0107C46.5694 38.9917 50.862 33.7584 55.4333 31.2586Z" fill="#12B76A"/>
        </svg>
      </div>
      <b>Спасибо за заявку</b>
      <p>Наши менеджеры свяжутся с вами в ближайшее время</p>
      <div class="button close-button">
        Понятно
      </div>
    </div>
  </div>

  <div class="popup thanks" id="thx-faq" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper-thx">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="80" viewBox="0 0 81 80" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M40.5 75.8334C20.7098 75.8334 4.66669 59.7904 4.66669 40C4.66669 20.2098 20.7098 4.16669 40.5 4.16669C60.2904 4.16669 76.3334 20.2098 76.3334 40C76.3334 59.7904 60.2904 75.8334 40.5 75.8334ZM55.4333 31.2586C57.0484 30.3753 57.6417 28.3498 56.7584 26.7346C55.875 25.1194 53.8497 24.5261 52.2347 25.4094C46.139 28.7429 41.0987 35.1764 37.7097 40.3654C36.4574 42.2834 35.3874 44.099 34.5314 45.637C33.7328 44.8624 32.942 44.19 32.2346 43.6307C31.309 42.899 30.4761 42.3217 29.8688 41.924L28.8187 41.2717C27.2195 40.3597 25.1838 40.9167 24.2718 42.516C23.3599 44.1147 23.9165 46.1497 25.5148 47.0624L26.2157 47.5007C26.6918 47.8124 27.3588 48.2744 28.0999 48.8604C29.6251 50.066 31.2709 51.6467 32.3066 53.3784C32.9423 54.441 34.1147 55.0637 35.351 54.9957C36.587 54.9273 37.6837 54.1787 38.1987 53.053L38.5264 52.3684C38.752 51.907 39.09 51.2324 39.53 50.4014C40.4117 48.7357 41.6937 46.4574 43.2914 44.0107C46.5694 38.9917 50.862 33.7584 55.4333 31.2586Z" fill="#12B76A"/>
        </svg>
      </div>
      <b>Спасибо за вопрос</b>
      <p>Наши менеджеры ответят на него в ближайшее время</p>
      <div class="button close-button">
        Понятно
      </div>
    </div>
  </div>

  <div class="popup thanks" id="thx-sub" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper-thx">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="80" viewBox="0 0 81 80" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M40.5 75.8334C20.7098 75.8334 4.66669 59.7904 4.66669 40C4.66669 20.2098 20.7098 4.16669 40.5 4.16669C60.2904 4.16669 76.3334 20.2098 76.3334 40C76.3334 59.7904 60.2904 75.8334 40.5 75.8334ZM55.4333 31.2586C57.0484 30.3753 57.6417 28.3498 56.7584 26.7346C55.875 25.1194 53.8497 24.5261 52.2347 25.4094C46.139 28.7429 41.0987 35.1764 37.7097 40.3654C36.4574 42.2834 35.3874 44.099 34.5314 45.637C33.7328 44.8624 32.942 44.19 32.2346 43.6307C31.309 42.899 30.4761 42.3217 29.8688 41.924L28.8187 41.2717C27.2195 40.3597 25.1838 40.9167 24.2718 42.516C23.3599 44.1147 23.9165 46.1497 25.5148 47.0624L26.2157 47.5007C26.6918 47.8124 27.3588 48.2744 28.0999 48.8604C29.6251 50.066 31.2709 51.6467 32.3066 53.3784C32.9423 54.441 34.1147 55.0637 35.351 54.9957C36.587 54.9273 37.6837 54.1787 38.1987 53.053L38.5264 52.3684C38.752 51.907 39.09 51.2324 39.53 50.4014C40.4117 48.7357 41.6937 46.4574 43.2914 44.0107C46.5694 38.9917 50.862 33.7584 55.4333 31.2586Z" fill="#12B76A"/>
        </svg>
      </div>
      <b>Спасибо за подписку</b>
      <p>Вы получите только самые важные новости</p>
      <div class="button close-button">
        Понятно
      </div>
    </div>
  </div>

  <div class="popup thanks" id="thx-feed" style="display: none">
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="wrapper-thx">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="81" height="80" viewBox="0 0 81 80" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M40.5 75.8334C20.7098 75.8334 4.66669 59.7904 4.66669 40C4.66669 20.2098 20.7098 4.16669 40.5 4.16669C60.2904 4.16669 76.3334 20.2098 76.3334 40C76.3334 59.7904 60.2904 75.8334 40.5 75.8334ZM55.4333 31.2586C57.0484 30.3753 57.6417 28.3498 56.7584 26.7346C55.875 25.1194 53.8497 24.5261 52.2347 25.4094C46.139 28.7429 41.0987 35.1764 37.7097 40.3654C36.4574 42.2834 35.3874 44.099 34.5314 45.637C33.7328 44.8624 32.942 44.19 32.2346 43.6307C31.309 42.899 30.4761 42.3217 29.8688 41.924L28.8187 41.2717C27.2195 40.3597 25.1838 40.9167 24.2718 42.516C23.3599 44.1147 23.9165 46.1497 25.5148 47.0624L26.2157 47.5007C26.6918 47.8124 27.3588 48.2744 28.0999 48.8604C29.6251 50.066 31.2709 51.6467 32.3066 53.3784C32.9423 54.441 34.1147 55.0637 35.351 54.9957C36.587 54.9273 37.6837 54.1787 38.1987 53.053L38.5264 52.3684C38.752 51.907 39.09 51.2324 39.53 50.4014C40.4117 48.7357 41.6937 46.4574 43.2914 44.0107C46.5694 38.9917 50.862 33.7584 55.4333 31.2586Z" fill="#12B76A"/>
        </svg>
      </div>
      <b>Спасибо за отзыв</b>
      <p>Мы опубликуем его после модерации</p>
      <div class="button close-button">
        Понятно
      </div>
    </div>
  </div>

  <div class="cookie" style="display: none">
    <b>Используем куки для улучшения работы сайта</b>
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

<!-- Mob catalog -->
<div class="mob-catalog" style="display: none">
  <div class="container">
    <div class="top">
      <b class="mini-title">Каталог</b>
      <div class="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <div class="search">
      <div class="fake-search">
        <p>Я хочу найти...</p>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17.5 17.5L22 22" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z" stroke="#9CA3AF" stroke-width="1.5" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>
      <?php echo do_shortcode('[fibosearch]'); ?>
    </div>
    <div class="wrap">
      <?php 
      $current_url = untrailingslashit($_SERVER['REQUEST_URI']); // Текущий URL без конечного слеша
      if (have_rows('menu_catalog', 'cat_menu')) : while(have_rows('menu_catalog', 'cat_menu')) : the_row(); 
          $main_link_url = untrailingslashit(parse_url(get_sub_field('main_link'), PHP_URL_PATH)); // URL для основного пункта меню
          $title = get_sub_field('title');
          ?>
        <div class="wrapper">
          <?php if ($current_url === $main_link_url) : ?>
            <span class="item <?php if (get_sub_field('sub_menu')) { echo 'has-sub-menu'; } ?>">
              <div class="icon">
                <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
              <p><?php echo $title; ?></p>
              <?php if (get_sub_field('sub_menu')) : ?>
              <div class="arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <?php endif; ?>
            </span>
          <?php else : ?>
            <a href="<?php echo esc_url($main_link_url); ?>" class="item <?php if (get_sub_field('sub_menu')) { echo 'has-sub-menu'; } ?>">
              <div class="icon">
                <?php if (get_sub_field('img')) : ?>
                  <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                  <?php else : ?>
                  <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php echo get_sub_field('title'); ?>">
                <?php endif; ?>
              </div>
              <p><?php echo $title; ?></p>
              <?php if (get_sub_field('sub_menu')) : ?>
                <div class="arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              <?php endif; ?>
            </a>
          <?php endif; ?>

          <?php if (have_rows('sub_menu')) : ?>
            <div class="sub-menu">
              <div class="container">
                <div class="sub-menu-top">
                  <b class="mini-title back-middle">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M15 6L9.7071 11.2929C9.3738 11.6262 9.2071 11.7929 9.2071 12C9.2071 12.2071 9.3738 12.3738 9.7071 12.7071L15 18" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <?php echo $title; ?>
                  </b>
                  <div class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
                <?php while(have_rows('sub_menu')) : the_row(); ?>
                  <?php $sub_title = get_sub_field('title_sub'); ?>
                  <div class="sub-menu-wrap <?php if (get_sub_field('sub_links')) { echo 'has-last-menu'; } ?>">
                    <?php 
                      if (get_sub_field('title_link')) : 
                      $title_link_url = untrailingslashit(parse_url(get_sub_field('title_link'), PHP_URL_PATH)); // URL для подпункта меню
                    ?>
                    <?php if ($current_url === $title_link_url) : ?>
                      <b class="title-link">
                        <?php echo get_sub_field('title_sub'); ?>
                        <?php if (get_sub_field('sub_links')) : ?>
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </div>
                        <?php endif; ?>
                      </b>
                      <?php else : ?>
                      <a class="title-link" href="<?php echo get_sub_field('title_link'); ?>">
                        <?php echo get_sub_field('title_sub'); ?>
                        <?php if (get_sub_field('sub_links')) : ?>
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </div>
                        <?php endif; ?>
                      </a>
                    <?php endif; ?>
                    <?php else : ?>
                      <b>
                        <?php echo get_sub_field('title_sub'); ?>
                        <?php if (get_sub_field('sub_links')) : ?>
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </div>
                        <?php endif; ?>
                      </b>
                    <?php endif; ?>
                    <?php if (get_sub_field('sub_links')) : ?>
                    <div class="sub-menu-last">
                      <div class="container">
                        <div class="top">
                          <div class="mini-title back-last">
                            <div class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15 6L9.7071 11.2929C9.3738 11.6262 9.2071 11.7929 9.2071 12C9.2071 12.2071 9.3738 12.3738 9.7071 12.7071L15 18" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </div>
                            <?php echo $sub_title; ?>
                          </div>
                          <div class="close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M19 5L5 19M5 5L19 19" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </div>
                        </div>
                        <ul>
                          <?php if (have_rows('sub_links')) : while(have_rows('sub_links')) : the_row(); 
                              $sub_link_url = untrailingslashit(parse_url(get_sub_field('link'), PHP_URL_PATH)); // URL для подпункта меню
                              ?>
                            <li>
                              <?php if ($current_url === $sub_link_url) : ?>
                                <span><?php echo get_sub_field('name'); ?></span>
                              <?php else : ?>
                                <a href="<?php echo esc_url($sub_link_url); ?>">
                                  <?php echo get_sub_field('name'); ?>
                                </a>
                              <?php endif; ?>
                            </li>
                          <?php endwhile; endif; ?>
                        </ul>
                        <?php if ($current_url != $title_link_url) : ?>
                          <a href="<?php echo $title_link_url; ?>" class="sub-menu-all-last">
                            Смотреть все
                            <div class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </div>
                          </a>
                        <?php endif; ?>
                      </div>
                    </div>
                    <?php endif; ?>

                  </div>
                <?php endwhile; ?>
                <?php if ($current_url != $main_link_url) : ?>
                  <a href="<?php echo $main_link_url; ?>" class="sub-menu-all">
                    Смотреть все
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<!-- Mob catalog END -->

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
      <div class="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
          <path d="M19 5.5L5 19.5M5 5.5L19 19.5" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <div class="wrap">
      <nav class="menu" itemscope itemtype="http://schema.org/SiteNavigationElement"> 
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
        <div class="contacts-row">
          <div class="phone-wrap">
            <a target="blank" href="tel:<?php echo get_field('phone','options'); ?>"><?php echo get_field('phone','options'); ?></a>
            <span class="call-callback">
              Обратный звонок
            </span>
          </div>
          <a href="<?php echo get_field('wa','options'); ?>" target="blank" rel="nofollow" noindex class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M1.77263 12.4072C1.77199 14.2083 2.24474 15.9668 3.14365 17.517L1.68652 22.8134L7.13095 21.3922C8.63101 22.2059 10.3199 22.6355 12.0387 22.6361H12.0432C17.7035 22.6361 22.3107 18.0507 22.3132 12.4152C22.3143 9.68414 21.2469 7.11645 19.3078 5.18432C17.3689 3.25246 14.7904 2.18797 12.0427 2.18669C6.38208 2.18669 1.77483 6.77142 1.77238 12.4072L1.77263 12.4072ZM12.043 22.636H12.0431H12.043C12.0429 22.636 12.0428 22.636 12.043 22.636Z" fill="url(#paint0_linear_6214_1072)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M9.38575 7.97749C9.18659 7.53678 8.97704 7.52796 8.78762 7.52021C8.63259 7.51365 8.45529 7.51407 8.27819 7.51407C8.10088 7.51407 7.8129 7.58031 7.56938 7.84512C7.32565 8.10995 6.63892 8.7501 6.63892 10.052C6.63892 11.3541 7.59158 12.6122 7.72431 12.7889C7.85726 12.9653 9.56331 15.7226 12.265 16.7832C14.5106 17.6647 14.9675 17.4894 15.4549 17.4452C15.9423 17.4012 17.0276 16.8053 17.2491 16.1873C17.4706 15.5695 17.4706 15.0399 17.4042 14.9293C17.3378 14.819 17.1605 14.7527 16.8947 14.6205C16.6288 14.4881 15.3219 13.8479 15.0783 13.7596C14.8346 13.6714 14.6573 13.6273 14.48 13.8922C14.3028 14.1569 13.7937 14.7527 13.6386 14.9293C13.4836 15.1061 13.3284 15.1282 13.0626 14.9958C12.7967 14.863 11.9406 14.5839 10.9249 13.6825C10.1347 12.981 9.60121 12.1148 9.44607 11.8499C9.29104 11.5853 9.42952 11.4419 9.5628 11.31C9.68223 11.1914 9.82871 11.001 9.96167 10.8466C10.0943 10.692 10.1385 10.5817 10.2272 10.4052C10.3159 10.2286 10.2715 10.0741 10.2051 9.94169C10.1385 9.80933 9.62197 8.50069 9.3856 7.97741" fill="white"/>
              <defs>
                <linearGradient id="paint0_linear_6214_1072" x1="12" y1="22.8112" x2="12" y2="2.18452" gradientUnits="userSpaceOnUse">
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
  </div>
</div>

<!-- Mob header menu's END -->

<!-- Cart -->

<!-- Cart END -->

<!-- Filters popup -->

<!-- Filters popup END -->

<?php wp_footer(); ?>

<?php if (!is_page(380) && !is_archive() && !is_singular('post')) : ?>
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
