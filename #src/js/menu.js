jQuery(document).ready(function ($) {
  function topScroll(time) {
    var destination = $('#top').offset().top;
    $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, time);
    return false;
  }


if (window.screen.width > 992) {
  var catalogTimer;
  var menuTimerLi;
  var menuHovered = false;
  var closeMenuDelay = 500; // Задержка перед закрытием меню в миллисекундах
  var openMenuDelay = 100;  // Задержка перед открытием меню в миллисекундах
  var closeCatalogDelay = 700; // Задержка перед закрытием каталога

  $('#up-arr').on('click', function() {
    topScroll(500);
  })
  $(window).scroll(function() { 
    if ($(window).scrollTop() > 200) {
      $('.header').addClass('scrolled');
      $('.pc-catalog').addClass('scrolled');
      $('#up-arr').fadeIn(200);
    } else {
      $('.header').removeClass('scrolled');
      $('.pc-catalog').removeClass('scrolled');
      $('#up-arr').fadeOut(200);
    }
  });
  
  // Функция для открытия подменю с задержкой
  function openSubMenu(_this) {
      clearTimeout(menuTimerLi);
      if (!$(_this).hasClass('opened')) { // Проверяем, уже открыто ли меню
          menuTimerLi = setTimeout(function() {
              // Закрываем все открытые подменю
              $('li.menu-item-has-children').removeClass('opened').children('ul').slideUp(0);
              // Открываем текущее меню
              $(_this).children('ul').slideDown(200);
              $(_this).addClass('opened');
          }, openMenuDelay);
      }
      $('.phones-wrap').slideUp(200);
      $('.phone-toggle').removeClass('active');
  }
  
  // Функция для закрытия подменю с задержкой
  function closeSubMenu(_this) {
      clearTimeout(menuTimerLi);
      menuTimerLi = setTimeout(function() {
              $(_this).children('ul').slideUp(0);
              $(_this).removeClass('opened');
      }, closeMenuDelay);
  }
  
  // Наведение на пункты меню с дочерними элементами
  $('li.menu-item-has-children').hover(function(ev) {
      let _this = ev.target.closest('.menu-item-has-children');
      clearTimeout(menuTimerLi); // Очищаем таймер закрытия при наведении
      openSubMenu(_this);        // Открываем меню с задержкой
  }, function(ev) {
      /* let _this = ev.target.closest('.menu-item-has-children'); */
      let _this = $('li.menu-item-has-children');
      closeSubMenu(_this);       // Закрываем меню с задержкой
  });
  
  // Если пользователь переводит курсор на другой элемент li.menu-item-has-children
  $('li.menu-item-has-children').mouseenter(function(ev) {
      let _this = ev.target.closest('.menu-item-has-children');
      clearTimeout(menuTimerLi); // Очищаем таймер закрытия при смене элемента
      openSubMenu(_this);        // Сразу открываем новое меню
  });
  
  // Наведение на элемент .catalog-toggle
  $('.catalog-toggle').on('click', function(ev) {
      if ($(this).hasClass('active')) {
        $('html').removeClass('fixed');
        $('.header').removeClass('header-open-menu');
        $('.catalog-toggle').removeClass('active');
        $('.pc-catalog').slideUp(300);
      } else {
        if (!$('.pc-catalog').hasClass('scrolled')) {
          topScroll(300);
        } 
        $('html').addClass('fixed');
        $('.header').addClass('header-open-menu');
        $('.catalog-toggle').addClass('active');
        $('.pc-catalog').slideDown(300);
        $('.header li.menu-item-has-children').children('ul').slideUp(0);
        $('.header li.menu-item-has-children').removeClass('opened');
      }
      $('.phones-wrap').slideUp(200);
      $('.phone-toggle').removeClass('active');
  });

  let clickedOnce = false;
  let currentIndex = -1; // Индекс текущего элемента
  
  $('.pc-catalog .left .item').on('click', function(event) {
      const $this = $(this);
      const $parent = $this.closest('.pc-catalog');
      const $wrappers = $parent.find('.right .wrapper');
      const $items = $parent.find('.left .item');
      const newIndex = $items.index($this);
      const $targetWrapper = $wrappers.eq(newIndex);
  
      // Проверяем, есть ли внутри .wrapper хотя бы один элемент .sub-list
      if ($targetWrapper.find('.sub-list').length === 0) {
          // Если это ссылка, не блокируем переход
          if ($this.is('a')) {
              return; // Разрешаем переход по ссылке
          }
      }
  
      // Если ссылка и это первое нажатие
      if ($this.is('a') && !clickedOnce) {
          event.preventDefault(); // Отключаем переход по ссылке на первое нажатие
          clickedOnce = true; // Отмечаем, что клик был один раз
          currentIndex = newIndex; // Сохраняем индекс текущего элемента
          
          // Скрываем все другие .wrapper и показываем только нужный
          $wrappers.hide().eq(newIndex).css('display', 'flex');
          
          // Удаляем класс .active у всех .item и добавляем только к текущему
          $items.removeClass('active');
          $this.addClass('active');
      } else if ($this.is('a') && clickedOnce && currentIndex === newIndex) {
          // Если это второй клик на ту же ссылку, разрешаем переход
          clickedOnce = false; // Сбрасываем флаг клика
      } else if (!$this.is('a')) {
          // Если элемент не является ссылкой, просто показываем нужный .wrapper
          $wrappers.hide().eq(newIndex).css('display', 'flex');
          
          // Удаляем класс .active у всех .item и добавляем к текущему
          $items.removeClass('active');
          $this.addClass('active');
      } else {
          // Если клик по другой ссылке, сбрасываем состояние и повторяем логику
          event.preventDefault();
          clickedOnce = true;
          currentIndex = newIndex;
          
          // Скрываем все другие .wrapper и показываем нужный
          $wrappers.hide().eq(newIndex).css('display', 'flex');
          
          // Удаляем класс .active у всех .item и добавляем к текущему
          $items.removeClass('active');
          $this.addClass('active');
      }
  });

  $('.phone-toggle').on('click', function() {
    $('.phones-wrap').slideToggle(200);
    $(this).toggleClass('active');
  });
  

} else {

  $('.mob-header .burger').on('click', function() {
      $('.mob-menu').slideDown(200);
      $('html').addClass('fixed');
  });

  $('.mob-menu .close').on('click', function() {
      $('html').removeClass('fixed');
      $('.mob-menu').slideUp(200);
      $('.mob-menu li.menu-item-has-children ul').slideUp(200);
      $('.mob-menu li.menu-item-has-children > a').removeClass('active');
  });

  $('.mob-menu li.menu-item-has-children > a').on('click', function(ev) {
      ev.preventDefault();
      if ($(this).hasClass('active')) {
        window.location.href = $(this).attr('href');
      } else {
        $(this).addClass('active');
        $(this).parent().find('ul').slideDown(200);
      }
  });

  $('.mob-menu li.menu-item-has-children > span').on('click', function(ev) {
      ev.preventDefault();
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).parent().find('ul').slideUp(200);
      } else {
        $(this).addClass('active');
        $(this).parent().find('ul').slideDown(200);
      }
  });
  //mob catalog scripts
  $('.mob-catalog-toggle').on('click', function(ev) {
    ev.preventDefault();
    if ($(this).hasClass('active')) {
      window.location.href = $(this).attr('data-href');
    } else {
      $(this).addClass('active');
      $('.mob-catalog').slideDown(200);
    }
  })
  $('.mob-catalog .close').on('click', function(ev) {
    $('.mob-catalog').slideUp(200);
    $('.mob-catalog .sub-menu').slideUp(200);
    $('.mob-catalog .sub-menu .sub-menu-last').slideUp(200);
    $('.mob-catalog-toggle').removeClass('active');
  });
  $('.mob-catalog .has-sub-menu').on('click', function(ev) {
    ev.preventDefault();
    $(this).next().slideDown(200);
  });
  $('.mob-catalog .has-last-menu .title-link').on('click', function(ev) {
    ev.preventDefault();
    $(this).next().slideDown(200);
  });
  $('.mob-catalog .back-last').on('click', function(ev) {
    ev.preventDefault();
    $(this).closest('.sub-menu-last').slideUp(200);
  });
  $('.mob-catalog .back-middle').on('click', function(ev) {
    ev.preventDefault();
    $(this).closest('.sub-menu').slideUp(200);
  });

  $('.mob-catalog .has-sub-menu').on('click', function(ev) {
    ev.preventDefault();
    $(this).next().slideDown(200);
  });
  $('.mob-search-toggle').on('click', function(ev) {
    $('.mob-catalog .search .js-dgwt-wcas-enable-mobile-form.dgwt-wcas-enable-mobile-form').trigger('click');
  });

  //mob catalog scripts END



} //endif screen width

}); //end
