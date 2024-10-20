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
/*   

  const productGallery = document.querySelector('.single-product-gallery');
  if (productGallery) {
      const swiperContainer = productGallery.querySelector('.swiper');
      const wrapper = productGallery.querySelector('.slider-wrap');
      const arrNext = productGallery.querySelector('.arr-next');
      const arrPrev = productGallery.querySelector('.arr-prev');
      const pagination = productGallery.querySelector('.dots');
      const items = productGallery.querySelectorAll('.swiper-slide');
      const thumbs = productGallery.querySelectorAll('.slider-thumb');
      let swiperInstance; // Переменная для хранения инстанса слайдера
  
      function startSlider() {
          swiperInstance = new Swiper(swiperContainer, {
              spaceBetween: 20,
              lazy: true,
              slidesPerView: 1,
              autoHeight: false,
              pagination: {
                el: pagination,
                clickable: true,
              },
              navigation: {
                  nextEl: arrNext,
                  prevEl: arrPrev
              },
              on: {
                  // При смене слайда обновляем активную миниатюру
                  slideChange: function() {
                      updateActiveThumb(swiperInstance.activeIndex);
                  }
              }
          });
      }
  
      // Функция для обновления активной миниатюры
      function updateActiveThumb(activeIndex) {
          thumbs.forEach((thumb, index) => {
              if (index === activeIndex) {
                  thumb.classList.add('active');
              } else {
                  thumb.classList.remove('active');
              }
          });
      }
  
      if (items.length > 1) {
          startSlider();
      } else {
          // Если слайд только один, добавляем класс disabled-slider
          wrapper.classList.add('disabled-slider');
      }
  
      // Связываем миниатюры с главным слайдером
      thumbs.forEach((thumb, index) => {
          thumb.addEventListener('click', function() {
              if (swiperInstance) {
                  swiperInstance.slideTo(index);
              }
          });
      });
  
      // Устанавливаем активную миниатюру при загрузке
      if (thumbs.length > 0) {
          updateActiveThumb(0); // Устанавливаем первую миниатюру как активную
      }
  }

  const portfolioSlider = document.querySelectorAll('.portfolio-slider');
	if (portfolioSlider.length > 0) {
    portfolioSlider.forEach(block => {
      const sliders = block.querySelectorAll('.wrap');
      const tabs = block.querySelectorAll('.tabs-row .tab');
      if (sliders.length > 0) {
        sliders.forEach(slider => {
          const swiper = slider.querySelector('.swiper');
          const items = slider.querySelectorAll('.item');
          const arrNext = slider.querySelector('.arr-next');
          const arrPrev = slider.querySelector('.arr-prev');
          const pagination = slider.querySelector('.dots');
  
          if (items.length > 3) {
            const sliderStart = new Swiper(swiper, {
              spaceBetween: 10,
              lazy: false,
              loop: false,
              speed: 300,
              slidesPerView: 1,
              pagination: {
                el: pagination,
                clickable: true,
              },
              navigation: {
                nextEl: arrNext,
                prevEl: arrPrev
              },
              breakpoints: {
                300: {
                  autoHeight: false,
                  slidesPerView: 1,
                },
                578: {
                  slidesPerView: 2,
                },
                767: {
                  slidesPerView: 2,
                },
                992: {
                  slidesPerView: 3,
                  spaceBetween: 20
                } 
              }
            });
          } else {
            slider.classList.add('disabled-slider');
          }
        });
      }
      if (tabs) {
        tabs.forEach((el, i) => {
          el.addEventListener('click', () => {
            tabs.forEach(e => e.classList.remove('active'));
            sliders.forEach(e => e.classList.remove('active'));
            sliders[i].classList.add('active');
            el.classList.add('active');
          });
        });
      }
    });
	} 

  
  const relatedSlider = document.querySelector('.related');
	if (relatedSlider) {
      const wrapper = relatedSlider.querySelector('.wrap');
      const swiper = relatedSlider.querySelector('.swiper');
      const arrNext = relatedSlider.querySelector('.arr-next');
      const arrPrev = relatedSlider.querySelector('.arr-prev');
      const itemsWrap = relatedSlider.querySelector('ul.products');
      const items = relatedSlider.querySelectorAll('li.product');
      itemsWrap.classList.add('swiper-wrapper');
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
            768: {
              spaceBetween: 10,
              slidesPerView: 2,
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

    
  */




 
}); //end