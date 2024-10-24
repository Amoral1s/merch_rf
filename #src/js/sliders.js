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
              spaceBetween: 0,
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
            slidesPerView: 3,
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

}); //end