jQuery(document).ready(function($) {
  $('.portfolio-popup-toggle .thumb').on('click', function() {
    var postId = $(this).closest('.portfolio-popup-toggle').data('id');
    $('.overlay').fadeIn(300);
    $('html').addClass('fixed');
    $('.portfolio-popup').fadeIn();
    // Показать loader перед отправкой AJAX-запроса
    $('.portfolio-popup .wrapper').html('<div class="loader">Загрузка...</div>');
    
    $.ajax({
      url: portfolioAjax.ajaxurl, // Используем переменную из wp_localize_script
      type: 'POST',
      data: {
        action: 'load_portfolio_popup',
        post_id: postId
      },
      success: function(response) {
        if (response.success) {
          // Вставляем контент в .wrapper
          $('.portfolio-popup .wrapper').html(response.data);
          // Показываем попап
          $('.portfolio-popup').fadeIn();
          $('.call-portfolio').on('click', function(ev) {
            let target = ev.target;
            $('.popup.popup-portfolio').fadeIn(300);
            $('.popup').removeClass('popup-thx');
            $('.overlay').fadeIn(300);
            $('.popup.popup-portfolio .data-title').val($(target).attr('data-title'));
            $('html').addClass('fixed');
          });
          // Инициализация Swiper
          initSwipers();
        }
      },
      error: function() {
        // Обработка ошибок
        $('.portfolio-popup .wrapper').html('<div class="loader">Произошла ошибка, попробуйте еще раз.</div>');
      }
    });
  });

  // Закрытие попапа
  $(document).on('click', '.portfolio-popup .close', function() {
    $('.portfolio-popup').fadeOut(function() {
      // Очищаем контент внутри .wrapper, чтобы избежать возможных конфликтов
      $('.portfolio-popup .wrapper').empty();
      $('.overlay').fadeOut(300);
      $('html').removeClass('fixed');
    });
  });
  // Функция для инициализации Swiper
  function initSwipers() {
    // Инициализируем Swiper для основного слайдера
    var swiperInstance = new Swiper('.portfolio-popup .swiper', {
      spaceBetween: 0,
      slidesPerView: 1,
      autoHeight: true,
      pagination: {
        el: '.portfolio-popup .dots',
        clickable: true,
      },
      navigation: {
        nextEl: '.portfolio-popup .arr-next',
        prevEl: '.portfolio-popup .arr-prev'
      },
    });
    function initializeGallery(selector) {
      const galleryElements = document.querySelectorAll(selector);
      if (galleryElements.length > 0) {
          galleryElements.forEach(elem => {
              // Добавление атрибута data-src для каждого элемента галереи
              const links = elem.querySelectorAll('a');
              if (links.length > 0) {
                  links.forEach(link => {
                      const imgSrc = link.getAttribute('href');
                      link.setAttribute('data-src', imgSrc);
                  });
              }
              const figures = elem.querySelectorAll('figure');
              if (figures.length > 0) {
                  figures.forEach(figure => {
                    const imgSrc = figure.querySelector('a').getAttribute('href');
                    if (imgSrc) {
                      figure.setAttribute('data-src', imgSrc);
                    }
                  });
              }
              const divs = elem.querySelectorAll('div');
              if (divs.length > 0) {
                  divs.forEach(div => {
                      const imgSrc = div.getAttribute('href');
                      div.setAttribute('data-src', imgSrc);
                  });
              }
              lightGallery(elem, {
                  thumbnail: true,
                  animateThumb: false,
                  showThumbByDefault: false,
                  plugins: [lgThumbnail],
                  swipeThreshold: 50,
                  mode: 'lg-fade',
                  download: false,
                  mobileSettings: {
                      controls: true,
                      showCloseIcon: true
                  }
              });
              console.log('Initialized LightGallery for', selector);
          });
        }
    }
	  initializeGallery('.portfolio-popup .mag-toggle');
  }
});