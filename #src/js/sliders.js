jQuery(document).ready(function ($) {
  const prodHomeSlider = document.querySelector('.cat-slider');
	if (prodHomeSlider) {
      const swiper = prodHomeSlider.querySelector('.swiper');
      const arrNext = prodHomeSlider.querySelector('.arr-next');
      const arrPrev = prodHomeSlider.querySelector('.arr-prev');
    
      new Swiper(swiper, {
        spaceBetween: 15,
        lazy: false,
        loop: false,
        speed: 300,
        slidesPerView: 3,
        navigation: {
          nextEl: arrNext,
          prevEl: arrPrev
        },
        breakpoints: {
          300: {
            autoHeight: false,
            slidesPerView: 3,
            spaceBetween: 8,
          },
          460: {
            slidesPerView: 4,
            spaceBetween: 8,
          },
          578: {
            slidesPerView: 4,
          },
          767: {
            slidesPerView: 6,
          },
          992: {
            slidesPerView: 7,
            spaceBetween: 30
          } 
        }
      });
      
	}

  const teamSlider = document.querySelector('.team');
	if (teamSlider) {
      const wrapper = teamSlider.querySelector('.wrap');
      const swiper = teamSlider.querySelector('.swiper');
      const arrNext = teamSlider.querySelector('.arr-next');
      const arrPrev = teamSlider.querySelector('.arr-prev');
      const items = teamSlider.querySelectorAll('.wrap .item');
      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: false,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          breakpoints: {
            300: {
              slidesPerView: 1,
              spaceBetween: 8,
            },
            578: {
              spaceBetween: 8,
              slidesPerView: 2,
            },  
            768: {
              spaceBetween: 10,
              slidesPerView: 3,
            },  
            992: {
              slidesPerView: 4,
              spaceBetween: 20,
            }
          },
        });
      }
      if (window.screen.width > 992 && items.length > 4) {
        startSlider();
      } else if (window.screen.width < 993 && items.length > 2) {
        startSlider();
      } else if (window.screen.width < 768 && items.length > 1) {
        startSlider();
      } else {
        wrapper.classList.add('disabled-slider');
      }
	}
  const singlePortfolioSlider = document.querySelector('.portfolio-single');
	if (singlePortfolioSlider) {
      const wrapper = singlePortfolioSlider.querySelector('.left');
      const swiper = singlePortfolioSlider.querySelector('.swiper');
      const arrNext = singlePortfolioSlider.querySelector('.arr-next');
      const arrPrev = singlePortfolioSlider.querySelector('.arr-prev');
      const dots = singlePortfolioSlider.querySelector('.dots');
      const items = singlePortfolioSlider.querySelectorAll('.swiper-slide');
      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: true,
          slidesPerView: 1,
          spaceBetween: 8,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          pagination: {
            el: dots,
            clickable: true,
          },
        });
      }
      if (items.length > 1) {
        startSlider();
      }  else {
        wrapper.classList.add('disabled-slider');
      }
	}

  const feedVideos = document.querySelector('.feed-videos');
	if (feedVideos) {
      const wrapper = feedVideos.querySelector('.wrap');
      const swiper = feedVideos.querySelector('.swiper');
      const arrNext = feedVideos.querySelector('.arr-next');
      const arrPrev = feedVideos.querySelector('.arr-prev');
      const items = feedVideos.querySelectorAll('.wrap .item');
      const pagination = feedVideos.querySelector('.dots');

      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: false,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          pagination: {
            el: pagination,
            clickable: true,
          },
          breakpoints: {
            300: {
              slidesPerView: 1,
              spaceBetween: 15,
            },
            578: {
              spaceBetween: 0,
              slidesPerView: 1,
            },  
            768: {
              spaceBetween: 10,
              slidesPerView: 1,
            },  
            992: {
              slidesPerView: 2,
              spaceBetween: 20,
            }
          },
        });
      }
      if (window.screen.width > 992 && items.length > 2) {
        startSlider();
      } else if (window.screen.width < 993 && items.length > 1) {
        startSlider();
      } else if (window.screen.width < 768 && items.length > 1) {
        startSlider();
      } else {
        wrapper.classList.add('disabled-slider');
      }
	}

  const textFeedSlider = document.querySelector('.feed-block-text');
	if (textFeedSlider) {
      const swiper = textFeedSlider.querySelector('.swiper');
      const arrNext = textFeedSlider.querySelector('.arr-next');
      const arrPrev = textFeedSlider.querySelector('.arr-prev');
      const items = textFeedSlider.querySelectorAll('.item');
      const pagination = textFeedSlider.querySelector('.dots');
      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: false,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          pagination: {
            el: pagination,
            clickable: true,
          },
          breakpoints: {
            300: {
              slidesPerView: 1,
              spaceBetween: 15,
            }, 
            992: {
              slidesPerView: 2,
              spaceBetween: 20,
            }
          },
        });
      }
      if (window.screen.width > 992 && items.length > 2) {
        startSlider();
      } else if (window.screen.width < 993 && items.length > 1) {
        startSlider();
      } else {
        textFeedSlider.classList.add('disabled-slider');
      }
	}

  const equipSlider = document.querySelector('.equip-slider');
	if (equipSlider) {
      const swiper = equipSlider.querySelector('.swiper');
      const arrNext = equipSlider.querySelector('.arr-next');
      const wrapper = equipSlider.querySelector('.wrap');
      const arrPrev = equipSlider.querySelector('.arr-prev');
      const items = equipSlider.querySelectorAll('.item');
      const pagination = equipSlider.querySelector('.dots');
      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: false,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          pagination: {
            el: pagination,
            clickable: true,
          },
          breakpoints: {
            300: {
              slidesPerView: 1,
              spaceBetween: 15,
              autoHeight: true,
            }, 
            578: {
              slidesPerView: 2,
              spaceBetween: 8,
              autoHeight: false,
            }, 
            992: {
              slidesPerView: 3,
              spaceBetween: 20,
              autoHeight: false,

            }
          },
        });
      }
      if (window.screen.width > 992 && items.length > 3) {
        startSlider();
      } else if (window.screen.width < 993 && items.length > 2) {
        startSlider();
      } else {
        wrapper.classList.add('disabled-slider');
      }
	}
  
  const sertSlider = document.querySelector('.sertificates');
	if (sertSlider) {
      const wrapper = sertSlider.querySelector('.wrap');
      const swiper = sertSlider.querySelector('.swiper');
      const arrNext = sertSlider.querySelector('.arr-next');
      const arrPrev = sertSlider.querySelector('.arr-prev');
      const items = sertSlider.querySelectorAll('.item');

      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: false,
          spaceBetween: 8,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          breakpoints: {
            300: {
              slidesPerView: 2,
            }, 578: {
              slidesPerView: 2,
            }, 767: {
              slidesPerView: 3,
            }, 
            992: {
              slidesPerView: 5,
              spaceBetween: 20,
            }
          },
        });
      }
      if (window.screen.width > 992 && items.length > 5) {
        startSlider();
      } else if (window.screen.width < 993 && items.length > 3) {
        startSlider();
      } else if (window.screen.width < 768 && items.length > 2) {
        startSlider();
      } else {
        wrapper.classList.add('disabled-slider');
      }
	}
  
  const newsSlider = document.querySelector('.news-slider');
	if (newsSlider) {
      const wrapper = newsSlider.querySelector('.wrap');
      const swiper = newsSlider.querySelector('.swiper');
      const arrNext = newsSlider.querySelector('.arr-next');
      const arrPrev = newsSlider.querySelector('.arr-prev');
      const items = newsSlider.querySelectorAll('.item');

      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: false,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          breakpoints: {
            300: {
              slidesPerView: 1,
              spaceBetween: 8,
            }, 578: {
              slidesPerView: 1,
              spaceBetween: 8,
            }, 767: {
              slidesPerView: 2,
              spaceBetween: 8,
            }, 
            992: {
              slidesPerView: 3,
              spaceBetween: 20,
            }
          },
        });
      }
      if (window.screen.width > 992 && items.length > 3) {
        startSlider();
      } else if (window.screen.width < 993 && items.length > 2) {
        startSlider();
      } else if (window.screen.width < 579 && items.length > 1) {
        startSlider();
      } else {
        wrapper.classList.add('disabled-slider');
      }
	}

  if (window.screen.width < 993) {
    const techSlider = document.querySelector('.tech');
    if (techSlider) {
      const swiper = techSlider.querySelector('.swiper');

      new Swiper(swiper, {
        lazy: false,
        autoHeight: false,
        spaceBetween: 8,
        breakpoints: {
          300: {
            slidesPerView: 1,
          }, 578: {
            slidesPerView: 2,
          }, 767: {
            slidesPerView: 3,
          }
        },
      });
    }

    const feedGallerySlider = document.querySelector('.feed-block-gall');
    if (feedGallerySlider) {
      const swiper = feedGallerySlider.querySelector('.swiper');

      new Swiper(swiper, {
        lazy: false,
        autoHeight: false,
        spaceBetween: 8,
        breakpoints: {
          300: {
            slidesPerView: 3,
          }, 578: {
            slidesPerView: 4,
          }, 767: {
            slidesPerView: 5,
          }
        },
      });
    }
  }

  if (window.screen.width < 579) {
    const helpBrandSLider = document.querySelector('.help-brand');
    if (helpBrandSLider) {
      const swiper = helpBrandSLider.querySelector('.swiper');

      new Swiper(swiper, {
        lazy: false,
        autoHeight: false,
        spaceBetween: 8,
        breakpoints: {
          300: {
            slidesPerView: 4,
          }
        },
      });
    }
    const colorSlider = document.querySelector('.colors');
    if (colorSlider) {
      const swiper = colorSlider.querySelector('.swiper');

      new Swiper(swiper, {
        lazy: false,
        autoHeight: false,
        spaceBetween: 10,
        breakpoints: {
          300: {
            slidesPerView: 4,
            spaceBetween: 10,
          }
        },
      });
    }
    
    const principSLider = document.querySelector('.princip');
    if (principSLider) {
      const swiper = principSLider.querySelector('.swiper');
      const pagination = principSLider.querySelector('.dots');

      new Swiper(swiper, {
        lazy: false,
        autoHeight: false,
        spaceBetween: 15,
        pagination: {
          el: pagination,
          clickable: true,
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
          }
        },
      });
    }

    const howSlider = document.querySelector('.how');
    if (howSlider) {
      const swiper = howSlider.querySelector('.swiper');
      new Swiper(swiper, {
        lazy: false,
        autoHeight: false,
        spaceBetween: 8,
        breakpoints: {
          300: {
            slidesPerView: 1,
          }
        },
      });
    }
  }

  const materialSlider = document.querySelector('.material');
	if (materialSlider) {
      const wrapper = materialSlider.querySelector('.wrap');
      const swiper = materialSlider.querySelector('.swiper');
      const arrNext = materialSlider.querySelector('.arr-next');
      const arrPrev = materialSlider.querySelector('.arr-prev');
      const items = materialSlider.querySelectorAll('.item');

      function startSlider() {
        new Swiper(swiper, {
          lazy: false,
          autoHeight: false,
          navigation: {
            nextEl: arrNext,
            prevEl: arrPrev
          },
          breakpoints: {
            992: {
              slidesPerView: 4,
              spaceBetween: 20,
            }
          },
        });
      }
      if (window.screen.width > 992 && items.length > 4) {
        startSlider();
      } else {
        wrapper.classList.add('disabled-slider');
      }
	}

  const portfolioSlider = document.querySelector('.portfolio-slider');

  if (portfolioSlider) {
      const swiperContainer = portfolioSlider.querySelector('.swiper');
      const swiperWrapper = swiperContainer.querySelector('.swiper-wrapper');
      const arrNext = portfolioSlider.querySelector('.arr-next');
      const arrPrev = portfolioSlider.querySelector('.arr-prev');
      const tabsContainer = portfolioSlider.querySelector('.tabs'); // Контейнер для вкладок
      const tabs = portfolioSlider.querySelectorAll('.tab');
      const allSlides = Array.from(swiperWrapper.children); // Сохраняем все слайды
      let swiperInstance;
  
      // Создаем вкладку "Все работы" и добавляем её в начало контейнера вкладок
      const allTab = document.createElement('div');
      allTab.classList.add('tab', 'active'); // Устанавливаем как активную вкладку по умолчанию
      allTab.textContent = 'Все работы';
      tabsContainer.insertBefore(allTab, tabsContainer.firstChild); // Вставляем в начало
  
      function startSlider() {
          swiperInstance = new Swiper(swiperContainer, {
              lazy: false,
              autoHeight: false,
              navigation: {
                  nextEl: arrNext,
                  prevEl: arrPrev,
              },
              breakpoints: {
                  300: {
                      slidesPerView: 1,
                      spaceBetween: 8,
                  },
                  767: {
                      slidesPerView: 2,
                      spaceBetween: 8,
                  },
                  992: {
                      slidesPerView: 3,
                      spaceBetween: 20,
                  }
              },
          });
      }
  
      function filterSlides(category) {
          // Очищаем все слайды в слайдере
          swiperWrapper.innerHTML = '';
  
          // Добавляем только те слайды, которые соответствуют категории
          const filteredSlides = allSlides.filter(slide => {
              const types = slide.getAttribute('data-type').split(',').map(type => type.trim());
              return category === 'Все работы' || types.includes(category);
          });
  
          filteredSlides.forEach(slide => {
              swiperWrapper.appendChild(slide); // Добавляем отфильтрованные слайды в обертку
          });
  
          // Перезапуск слайдера
          if (swiperInstance) {
              swiperInstance.destroy(true, true); // Уничтожаем текущий экземпляр
          }
          startSlider(); // Перезапускаем слайдер с обновленным набором слайдов
      }
  
      // Инициализация слайдера с фильтром "Все работы"
      startSlider();
      filterSlides('Все работы');
  
      // Обработка кликов по вкладкам .tab
      tabsContainer.querySelectorAll('.tab').forEach(tab => {
          tab.addEventListener('click', () => {
              tabsContainer.querySelectorAll('.tab').forEach(t => t.classList.remove('active')); // Убираем класс active у всех вкладок
              tab.classList.add('active'); // Добавляем класс active к текущей вкладке
              const category = tab.textContent.trim(); // Получаем текст категории
              filterSlides(category); // Фильтруем и перезапускаем слайдер
          });
      });
  }

}); //end