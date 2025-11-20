jQuery(document).ready(function ($) {
	const feedBlock = document.querySelector('.feed-block'); 
	if (feedBlock) {
		const galleryMain = feedBlock.querySelectorAll('.gall-item');
		const galleryHidden = feedBlock.querySelectorAll('.hidden-gallery .item');

		galleryMain.forEach((el, index) => {
			el.addEventListener('click', () => {
				galleryHidden[index].click();
			});
		});
	}


	//old code
	if (window.screen.width < 579) {
		const city = document.querySelectorAll('.city');
		if (city.length > 0) {
			city.forEach(elem => {
				const height = elem.scrollHeight;
				console.log(height)
				if (height > 240) {
					const wrap = elem.querySelector('.wrap');
					wrap.classList.add('active');
					const btn = elem.querySelector('.moar-btn');
					btn.style.display = 'flex';
					btn.classList.add('roboto');
					btn.addEventListener('click', () => {
						if (wrap.classList.contains('active')) {
							btn.classList.add('active');
							wrap.classList.remove('active');
							btn.textContent = 'Свернуть';
						} else {
							btn.classList.remove('active');
							wrap.classList.add('active');
							btn.textContent = 'Показать все';
						}
					})
				}
			})
		}
	}
	//FAQ INDEX
	$('.faq .faq-title').on('click', function() {
		$(this).next().slideToggle(200);
		$(this).toggleClass('active');
		$(this).parent().toggleClass('active');
	})
	


	if (window.screen.width > 992) {
		$(".anchor").click(function () {
			var elementClick;
			$('.anchor').removeClass('active-faq');
			$(this).addClass('active-faq');
			if ($(this).attr('data-href')) {
				elementClick = $(this).attr("data-href");
			} else {
				elementClick = $(this).attr("href");
			}
			var destination = $(elementClick).offset().top - 100;
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
			return false;
		});
	} else {
		$(".anchor").click(function () {
			var elementClick;
			$('.anchor').removeClass('active-faq');
			$(this).addClass('active-faq');
			if ($(this).attr('data-href')) {
				elementClick = $(this).attr("data-href");
			} else {
				elementClick = $(this).attr("href");
			}
			var destination = $(elementClick).offset().top - 70;
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
			return false;
		});
	}

	const html = document.querySelector('html');
	function disableScroll() {
		html.classList.add('fixed');
	}
	function enableScroll() {
		html.classList.remove('fixed');
	}
	// Инициализация LightGallery для всех элементов галереи
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
						// Добавление обработчиков событий для открытия и закрытия галереи
						elem.addEventListener('lgBeforeOpen', () => {
								disableScroll();
						});
						elem.addEventListener('lgAfterClose', () => {
								enableScroll();
						});
						console.log('Initialized LightGallery for', selector);
				});
			}
	}
	// Инициализация
	initializeGallery('.mag-toggle');
	initializeGallery('.content .gallery');
	initializeGallery('.content .wp-block-gallery');

	const commLinks = document.querySelectorAll('.wpd-reply-to');
	if (commLinks.length > 0) {
		commLinks.forEach(el => {
			const link = el.querySelector('a');
			if (link) {
				link.remove();
			}
		})
	}
	const commLinks2 = document.querySelectorAll('.comment-reply-title');
	if (commLinks2.length > 0) {
		commLinks2.forEach(el => {
			const link = el.querySelector('a');
			if (link) {
				link.remove();
			}
		})
	}
	const props = document.querySelectorAll('.req .wrap .item b');
	if (props.length > 0) {
		function copytext(el) {
			var $tmp = $("<textarea>");
			$("body").append($tmp);
			$tmp.val($(el).text()).select();
			document.execCommand("copy");
			$tmp.remove();
		}
		props.forEach(e => {
			e.addEventListener('click', () => {
				console.log(e)
				copytext(e);
				e.classList.add('active');
				setTimeout(() => {
					e.classList.remove('active');
				}, 3000);
			})
		})
	}

	if (window.screen.width < 993) {
		const seoDouble = document.querySelectorAll('.seo-double')

		if (seoDouble.length > 0) {
			seoDouble.forEach(el => {
				const title = el.querySelector('.title');
				const wrap = el.querySelector('.wrap');
				if (title) {
					const cloneTittle = title.cloneNode(true);
					wrap.appendChild(cloneTittle)
					title.remove();
				}
			})
		}

		const helpBrand = document.querySelector('.help-brand'); 
		if (helpBrand) {
			const wrap = helpBrand.querySelector('.wrap');
			const row = helpBrand.querySelector('.left .row');
			
			if (row) {
				const cloneRow = row.cloneNode(true);
				wrap.appendChild(cloneRow);
				row.remove();
			}
		}
		$('.footer .item.menu b').on('click', function() {
			$(this).next().slideToggle(200);
			$(this).toggleClass('active')
		})
	}

	$('.vacancy-page .item .top').on('click', function() {
		$(this).toggleClass('active');
		$(this).next().slideToggle(200);
	});

	$('.actions-page .wrap .item').on('click', function(ev) {
		if (!ev.target.closest('.popup')) {
			$(this).find('.popup').fadeIn(300);
			$('.popup').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
			$('html').addClass('fixed');
		}
	});
	if (window.screen.width > 992) {
		document.querySelectorAll('.all-services-block .item').forEach(item => {
			const listItems = item.querySelectorAll('ul li');
			
			// Проверяем, больше ли 6 элементов <li>
			if (listItems.length > 6) {
					// Скрываем все элементы после шестого
					listItems.forEach((li, index) => {
							if (index >= 6) {
									li.style.display = 'none';
							}
					});
	
					// Создаем кнопку "Смотреть все"
					const showMoreBtn = document.createElement('div');
					showMoreBtn.classList.add('show-li');
					showMoreBtn.textContent = 'Смотреть все';
	
					// Добавляем кнопку после списка
					item.appendChild(showMoreBtn);
	
					// Обработчик клика для отображения всех скрытых элементов
					showMoreBtn.addEventListener('click', () => {
							listItems.forEach(li => li.style.display = ''); // Показываем все <li>
							showMoreBtn.style.display = 'none'; // Скрываем кнопку после нажатия
					});
			}
		});
	} else {
		$('.all-services-block .item b').on('click', function() {
			$(this).next().slideToggle(300);
			$(this).toggleClass('active')
		})
	}

	if (window.screen.width > 992) {
		let catToggles = document.querySelector('.cat-toggles');
		let portfolioToggles = document.querySelector('.tabs-wrapper');
		if (catToggles || portfolioToggles) {
			if (portfolioToggles) {
				catToggles = portfolioToggles.querySelector('.tabs');
			}
	
			const container = catToggles.closest('.container')
	
			// Создаем кнопки прокрутки
			const scrollLeftButton = document.createElement('div')
			scrollLeftButton.classList.add('scroll-left')
			scrollLeftButton.setAttribute('aria-label', 'Scroll left')
			scrollLeftButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
			<path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M8.99992 6.99988L4.70703 11.2928C4.37369 11.6261 4.20703 11.7928 4.20703 11.9999C4.20703 12.207 4.37369 12.3737 4.70703 12.707L8.99992 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>`;
	
			const scrollRightButton = document.createElement('div')
			scrollRightButton.classList.add('scroll-right')
			scrollRightButton.setAttribute('aria-label', 'Scroll right')
			scrollRightButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
			<path d="M19 12L4 12.0002" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M15.0001 17.0001L19.293 12.7072C19.6263 12.3739 19.793 12.2072 19.793 12.0001C19.793 11.793 19.6263 11.6263 19.293 11.293L15.0001 7.0001" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>`;
	
			// Вставляем кнопки перед и после .cat-toggles
			catToggles.parentElement.insertBefore(scrollLeftButton, catToggles)
			catToggles.parentElement.appendChild(scrollRightButton)
	
			// Функция для обновления видимости кнопок
			function updateButtonVisibility() {
					const isOverflowing = catToggles.scrollWidth > container.clientWidth
					scrollLeftButton.style.display = isOverflowing && catToggles.scrollLeft > 0 ? 'flex' : 'none'
					scrollRightButton.style.display = isOverflowing && (catToggles.scrollLeft + container.clientWidth) < catToggles.scrollWidth ? 'flex' : 'none'
			}
	
			// Обработчики для прокрутки
			scrollLeftButton.addEventListener('click', () => {
					catToggles.scrollBy({ left: -300, behavior: 'smooth' })
			})
	
			scrollRightButton.addEventListener('click', () => {
					catToggles.scrollBy({ left: 300, behavior: 'smooth' })
			})
	
			// Обновляем видимость кнопок при прокрутке и загрузке
			catToggles.addEventListener('scroll', updateButtonVisibility)
			window.addEventListener('resize', updateButtonVisibility)
	
			// Инициализация
			updateButtonVisibility();
			scrollRightButton.style.display = 'flex';

		}
	}
	
    


}); //end