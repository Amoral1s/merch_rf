<?php get_header(); ?>

<section class="home-offer" style="background-image: url(<?php echo get_field('offer_bg','home'); ?>);" >
  <div class="container">
    <div class="wrap">
      <h1><?php echo get_field('offer_title', 'home'); ?></h1>
      <p class="subtitle"><?php echo get_field('offer_subtitle', 'home'); ?></p>
      <div class="photo">
        <img src="<?php echo get_field('offer_photo', 'home'); ?>" alt="<?php echo get_field('offer_title', 'home'); ?>">
      </div>
      <div class="btns">
        <div class="button call-callback">
          Рассчитать стоимость
        </div>
        <div class="feat">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.79289 3.91789C5.18342 3.52737 5.81658 3.52737 6.20711 3.91789L7.20711 4.91789C7.59763 5.30842 7.59763 5.94158 7.20711 6.33211C6.81658 6.72263 6.18342 6.72263 5.79289 6.33211L4.79289 5.33211C4.40237 4.94158 4.40237 4.30842 4.79289 3.91789ZM20.2071 3.91789C20.5976 4.30842 20.5976 4.94158 20.2071 5.33211L19.2071 6.33211C18.8166 6.72263 18.1834 6.72263 17.7929 6.33211C17.4024 5.94158 17.4024 5.30842 17.7929 4.91789L18.7929 3.91789C19.1834 3.52737 19.8166 3.52737 20.2071 3.91789Z" fill="#0C0C0C"/>
              <path d="M17.2071 8.41789C17.5976 8.80842 17.5976 9.44158 17.2071 9.83211L14.8276 12.2116C14.9388 12.4946 15 12.8029 15 13.125C15 14.5057 13.8807 15.625 12.5 15.625C11.1193 15.625 10 14.5057 10 13.125C10 11.7443 11.1193 10.625 12.5 10.625C12.8221 10.625 13.1304 10.6862 13.4134 10.7974L15.7929 8.41789C16.1834 8.02737 16.8166 8.02737 17.2071 8.41789Z" fill="#0C0C0C"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 2.125C9.5 1.57272 9.94772 1.125 10.5 1.125H14.5C15.0523 1.125 15.5 1.57272 15.5 2.125C15.5 2.67728 15.0523 3.125 14.5 3.125H13.5V3.625C13.5 4.17728 13.0523 4.625 12.5 4.625C11.9477 4.625 11.5 4.17728 11.5 3.625V3.125H10.5C9.94772 3.125 9.5 2.67728 9.5 2.125Z" fill="#0C0C0C"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9773 5.325C8.94624 5.325 5.58436 8.36561 5.15317 12.2571C5.09387 12.7923 4.61091 13.1783 4.07444 13.1191C3.53798 13.0599 3.15116 12.5781 3.21046 12.0429C3.75155 7.15949 7.95376 3.375 12.9773 3.375C18.3746 3.375 22.75 7.74022 22.75 13.125C22.75 18.5098 18.3746 22.875 12.9773 22.875H2.22727C1.68754 22.875 1.25 22.4385 1.25 21.9C1.25 21.3615 1.68754 20.925 2.22727 20.925H12.9773C17.2951 20.925 20.7955 17.4328 20.7955 13.125C20.7955 8.81718 17.2951 5.325 12.9773 5.325ZM1.25 15.075C1.25 14.5365 1.68754 14.1 2.22727 14.1H5.15909C5.69882 14.1 6.13636 14.5365 6.13636 15.075C6.13636 15.6135 5.69882 16.05 5.15909 16.05H2.22727C1.68754 16.05 1.25 15.6135 1.25 15.075ZM1.25 18.4875C1.25 17.949 1.68754 17.5125 2.22727 17.5125H7.11364C7.65337 17.5125 8.09091 17.949 8.09091 18.4875C8.09091 19.026 7.65337 19.4625 7.11364 19.4625H2.22727C1.68754 19.4625 1.25 19.026 1.25 18.4875Z" fill="#0C0C0C"/>
            </svg>
          </div>
          <span><?php echo get_field('offer_time', 'home'); ?></span>
        </div>
      </div>
    </div>
  </div>
  <div class="text-line">
    <div class="marquee">
     <div>
      <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мерч</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Вышивка</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Коммуникация</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Печать</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Дизайн</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Бренд</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Футболки</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мода</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мерч</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Вышивка</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Коммуникация</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Печать</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Дизайн</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Бренд</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Футболки</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мода</span>
     </div>
     <div>
      <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мерч</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Вышивка</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Коммуникация</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Печать</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Дизайн</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Бренд</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Футболки</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мода</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мерч</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Вышивка</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Коммуникация</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Печать</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Дизайн</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Бренд</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Футболки</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мода</span>
     </div>
     <div>
      <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мерч</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Вышивка</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Коммуникация</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Печать</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Дизайн</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Бренд</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Футболки</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мода</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мерч</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Вышивка</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Коммуникация</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Печать</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Дизайн</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Бренд</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Футболки</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
            <path d="M14.3009 18.3654L19.8126 26.9545L25.3198 23.4291L18.8576 15.2959L28.4893 12.5747L26.5482 6.56329L17.3719 10.2363L18.0118 0.28292L11.2567 0.168544L11.5593 10.1378L2.51256 6.15632L0.369116 12.0985L9.90314 15.1443L3.11693 23.0532L8.50079 26.8154L14.3009 18.3654Z" fill="#71E69B"/>
          </svg>
        </div>
        <span>Мода</span>
     </div>
    </div>
  </div>
</section>

<?php if (get_field('services_title','home')) : ?>
<section class="services-block">
  <div class="container">
    <h2 class="title"><?php echo get_field('services_title','home') ?></h2>
    <div class="wrap">
    <?php if (have_rows('services','home')) : while(have_rows('services','home')) : the_row(); ?>
      <a href="<?php echo get_sub_field('link'); ?>" class="item" style="background-image: url(<?php echo get_sub_field('bg'); ?>)">
        <span class="roboto"><?php echo get_sub_field('title'); ?></span>
      </a>
    <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('cat_slider_title','home')) : ?>
<section class="cat-slider">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('cat_slider_title', 'home'); ?></h2>
    <p class="subtitle"><?php echo get_field('cat_slider_subtitle', 'home'); ?></p>
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

<?php if (get_field('release_title', 'home')) : ?>
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

<?php if (get_field('seo_title', 'options')) : ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php echo get_field('seo_title', 'options') ?></h2>
    <div class="content">
      <?php echo get_field('seo_content', 'options'); ?>
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


<?php if (get_field('news_title', 'options')) : ?>
<section class="news news-slider">
  <div class="container">
    <div class="title-row">
      <h2 class="title"><?php echo get_field('news_title', 'options') ?></h2>
      <a href="<?php echo get_field('news_link', 'options'); ?>" class="link-all">
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
          <path d="M5 12H20" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            $args = array(
              'post_type'      => 'post',
              'category__not_in' => array(),
              'posts_per_page' => 10,
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
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
          <?php } }  wp_reset_postdata(); ?>
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
<?php endif; ?>

<?php if (get_field('faq_title', 'options')) : ?>
<section itemtype="https://schema.org/FAQPage"  class="faq">
  <div class="container">
    <div class="top-title">
      <h2 class="title sub"><?php echo get_field('faq_title', 'options') ?></h2>  
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


<?php get_footer(); ?>

<!-- Schema org -->
<div itemscope itemtype="http://schema.org/Organization" style="display: none;">
  <span itemprop="name">ООО «Принтмастер»</span>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">вн.тер.г. Муниципальный Округ Академический, ул Ивана Бабушкина, д. 18, к. 2</span>,
    <span itemprop="addressLocality">Г.Москва</span>,
    <span itemprop="postalCode">117292</span>
  </div>
  Телефон: <span itemprop="telephone"><?php the_field('phone','options'); ?></span>
</div>
<div itemscope itemtype="http://schema.org/LocalBusiness" style="display: none;">
  <span itemprop="name">ООО «Принтмастер»</span>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">вн.тер.г. Муниципальный Округ Академический, ул Ивана Бабушкина, д. 18, к. 2</span>,
    <span itemprop="addressLocality">Г.Москва</span>,
    <span itemprop="postalCode">117292</span>
  </div>
  Телефон: <span itemprop="telephone"><?php the_field('phone','options'); ?></span><br>
  Часы работы: <span itemprop="openingHours">Пн-Пт: 10.00 - 19.00</span><br>
  <span itemprop="description">Типография</span>
</div>
<!-- Schema end -->