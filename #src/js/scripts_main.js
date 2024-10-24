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
	
	//SINGLE POST SHARE
	$('.share-link').click(function() {
		var currentLink = window.location.href;
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val(currentLink).select();
		document.execCommand("copy");
		$temp.remove();
		alert("Ссылка скопирована: " + currentLink);
	});

	//FAQ PAGE
	$('.faq-page-offer .answers .answer-title').on('click', function() {
		$(this).next().slideToggle(200);
		$(this).toggleClass('active');
	});
	$('.faq-page-offer .tabs .item').on('click', function() {
    $('.faq-page-offer .tabs .item').removeClass('active');
    $(this).addClass('active');
    var index = $(this).index(); 
    $('.faq-page-offer .answers').fadeOut(200, function() {
			$('.faq-page-offer .answers').eq(index).fadeIn(200);
    });
	});
	 
	$(".anchor").click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top - 100;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
		return false;
	});

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

	const pageTextFeed = document.querySelector('.only-feed-text');

	if (pageTextFeed) {
			const items = pageTextFeed.querySelectorAll('.item');
			const moarBtn = pageTextFeed.querySelector('.moar-btn');
			const itemsToShow = 4; // Количество отзывов для показа за один раз
			let currentItems = itemsToShow; // Текущее количество отображаемых отзывов
	
			if (items.length > itemsToShow) {
					// Скрываем все отзывы
					items.forEach(item => {
							item.style.display = 'none';
					});
	
					// Показываем первые 4 отзыва
					for (let i = 0; i < itemsToShow; i++) {
							items[i].style.display = 'block';
					}
	
					// Показываем кнопку "Показать еще"
					moarBtn.style.display = 'flex';
					moarBtn.textContent = 'Показать еще';
	
					// Обработчик события на кнопку
					moarBtn.addEventListener('click', function() {
							if (moarBtn.textContent === 'Показать еще') {
									// Показываем следующие отзывы
									for (let i = currentItems; i < currentItems + itemsToShow && i < items.length; i++) {
											items[i].style.display = 'block';
									}
									currentItems += itemsToShow;
	
									// Если все отзывы показаны, меняем текст кнопки на "Свернуть"
									if (currentItems >= items.length) {
											moarBtn.textContent = 'Свернуть';
									}
							} else {
									// Скрываем все отзывы кроме первых 4
									items.forEach((item, index) => {
											item.style.display = index < itemsToShow ? 'block' : 'none';
									});
									currentItems = itemsToShow;
									moarBtn.textContent = 'Показать еще';
							}
					});
			} else {
					// Если отзывов 4 или меньше, показываем все и скрываем кнопку
					items.forEach(item => {
							item.style.display = 'block';
					});
					moarBtn.style.display = 'none';
			}
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



}); //end