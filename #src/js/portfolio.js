jQuery(document).ready(function($) {
  const portfolioPage = $('.portfolio-page');

  if (portfolioPage.length) {
      const wrap = portfolioPage.find('.wrap');
      const mainCats = portfolioPage.find('.main-cats .item');
      const subCats = portfolioPage.find('.sub-cats .item');
      let showMoreBtn = $('<button class="button show-more">Показать еще</button>').insertAfter(wrap);
      let activeType = '';
      let activeBrand = '';
      let postsToShow = 9;

      // Добавляем "Все работы" в каждый блок sub-cats
      subCats.each(function() {
          $(this).prepend('<div class="tab all-work active">Все работы</div>');
      });

      // Инициализация: отображаем только первый .sub-cats с display: flex
      subCats.hide().first().css('display', 'flex').show();

      // Инициализация показа постов и кнопки
      showPosts();
      toggleShowMoreBtn();

      // Переключение вкладок main-cats
      mainCats.on('click', function() {
        const index = $(this).index();
        mainCats.removeClass('active');
        $(this).addClass('active');
        subCats.hide().eq(index).css('display', 'flex').show(); // Устанавливаем display: flex для активной вкладки

        // Сброс активных фильтров
        activeType = '';
        activeBrand = '';
        subCats.find('.tab').removeClass('active');
        subCats.eq(index).find('.all-work').addClass('active');
        postsToShow = 9; // Сбрасываем количество видимых постов на 9
        showPosts(); // Показываем посты с учетом сброшенных фильтров
        toggleShowMoreBtn(); // Перезапускаем отображение кнопки "Показать еще"
      });

      // Клик по "Все работы" для сброса фильтров
      subCats.find('.all-work').on('click', function() {
          activeType = '';
          activeBrand = '';
          subCats.find('.tab').removeClass('active');
          $(this).addClass('active');
          postsToShow = 9;
          showPosts();
          toggleShowMoreBtn();
      });

      // Клик по фильтрам в sub-cats
      subCats.find('.tab').not('.all-work').on('click', function() {
          const parentIndex = $(this).closest('.item').index();
          const value = $(this).text().trim();

          // Устанавливаем активный фильтр
          $(this).toggleClass('active').siblings().removeClass('active');
          subCats.eq(parentIndex).find('.all-work').removeClass('active');
          if (parentIndex === 0) {
              activeType = $(this).hasClass('active') ? value : '';
          } else if (parentIndex === 1) {
              activeBrand = $(this).hasClass('active') ? value : '';
          }

          // Сброс количества видимых постов и обновление отображения
          postsToShow = 9;
          showPosts();
          toggleShowMoreBtn();
      });

      // Показать посты с фильтрацией
      function showPosts() {
          let visibleCount = 0;

          wrap.find('.item').each(function() {
              const item = $(this);
              const dataType = item.data('type') ? item.data('type').split(',').map(e => e.trim()) : [];
              const dataBrand = item.data('brand') ? item.data('brand').split(',').map(e => e.trim()) : [];

              // Проверка соответствия фильтрам
              const matchesType = !activeType || dataType.includes(activeType);
              const matchesBrand = !activeBrand || dataBrand.includes(activeBrand);

              if (matchesType && matchesBrand && visibleCount < postsToShow) {
                  item.show();
                  visibleCount++;
              } else {
                  item.hide();
              }
          });
      }

      // Кнопка "Показать еще"
      showMoreBtn.on('click', function() {
          if (showMoreBtn.text() === 'Показать еще') {
              postsToShow += 9;
          } else {
              postsToShow = 9; // Сброс к начальным 9 постам при клике на "Свернуть"
          }
          showPosts();
          toggleShowMoreBtn();
      });

      // Отображение или скрытие кнопки "Показать еще"
      function toggleShowMoreBtn() {
          const visibleItems = wrap.find('.item:visible').length;
          const totalItems = wrap.find('.item').filter(function() {
              const dataType = $(this).data('type') ? $(this).data('type').split(',').map(e => e.trim()) : [];
              const dataBrand = $(this).data('brand') ? $(this).data('brand').split(',').map(e => e.trim()) : [];

              const matchesType = !activeType || dataType.includes(activeType);
              const matchesBrand = !activeBrand || dataBrand.includes(activeBrand);

              return matchesType && matchesBrand;
          }).length;

          if (totalItems > visibleItems) {
              showMoreBtn.show().text('Показать еще');
          } else if (totalItems <= visibleItems && totalItems > 9) {
              showMoreBtn.show().text('Свернуть');
          } else {
              showMoreBtn.hide();
          }
      }
  }

});