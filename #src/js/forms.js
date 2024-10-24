jQuery(document).ready(function ($) {
		
  $(".wpcf7").on('wpcf7mailsent', function(event){
		if (event.detail.contactFormId == '813') {
			$('#thx-faq').fadeIn(200);
		} else {
			$('#thx').fadeIn(200);
		}
		$('.popup').addClass('popup-thx');
		$('.thanks').removeClass('popup-thx');
		$('.overlay').fadeIn(300);
		$('.input.listen').removeClass('listen')
  });
  /* $(".wpcf7").on('wpcf7invalid', function(event){
    alert('Заполните поля правильно и повторите попытку!');
  }); */
  $(".wpcf7").on('wpcf7mailfailed', function(event){
    alert('Ошибка отправки! Попробуйте еще раз!');
  });
	
	document.addEventListener('input', (event) => {
		if (event.target.value != '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.add('listen');
			}
		}
		if (event.target.value === '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.remove('listen');
			}
		}
	});

	const inputPhones = document.querySelectorAll('.wpcf7-tel');

	if (inputPhones.length > 0) {
		inputPhones.forEach(input => {
			IMask(input, {mask: '+{0} (000) 000-00-00'})
		});
	}

	$('.call-callback').on('click', function() {
		$('.popup.popup-callback').fadeIn(300);
		$('.popup').removeClass('popup-thx');
		$('.overlay').fadeIn(300);
		$('html').addClass('fixed');
	});
	$('.call-order').on('click', function() {
		$('.popup.popup-order').fadeIn(300);
		$('.popup').removeClass('popup-thx');
		$('.overlay').fadeIn(300);
		$('html').addClass('fixed');
	});
	$('.call-review-single').on('click', function() {
		$('.popup.popup-single-review').fadeIn(300);
		$('.popup').removeClass('popup-thx');
		$('.overlay').fadeIn(300);
		$('html').addClass('fixed');
	});
	$('.video-data').on('click', function() {
		$('.popup.popup-video').fadeIn(200);
		$('.popup').removeClass('popup-thx');
		$('.overlay').fadeIn(200);
		$('.popup.popup-video iframe').attr('src', $(this).attr('data-src'));
		$('html').addClass('fixed');
		// Добавляем новую запись в историю, чтобы предотвратить переход назад при закрытии видео
		history.pushState(null, null, window.location.href);
	});

	$('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$('.mini-cart').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('html').removeClass('fixed');
		$('.popup').removeClass('popup-thx');
		$('.popup.popup-video iframe').attr('src', '');
		if ($('.popup.popup-video').is(':visible')) {
			history.forward();
		}
	});
	$('.popup .close').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('html').removeClass('fixed');
		$('.popup').removeClass('popup-thx');
		$('.popup.popup-video iframe').attr('src', '');
		if ($('.popup.popup-video').is(':visible')) {
			history.forward();
		}
	});
	$('.popup .close-button').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('html').removeClass('fixed');
		$('.popup').removeClass('popup-thx');
		$('.popup.popup-video iframe').attr('src', '');
		if ($('.popup.popup-video').is(':visible')) {
			history.forward();
		}
	});

	// Функция для скрытия окна cookie и установки cookie на 1 месяц
	function hideCookieWindow() {
		document.querySelector('.cookie').style.display = 'none';
		
		// Установка cookie на 1 месяц с помощью JavaScript
		let now = new Date();
		let monthLater = new Date(now.getTime() + 30 * 24 * 60 * 60 * 1000);
		document.cookie = 'acceptedCookie=true; expires=' + monthLater.toUTCString() + '; path=/';
	}

	document.querySelector('.cookie .button').addEventListener('click', hideCookieWindow);

	// Проверка, показывать ли окно cookie при загрузке страницы
	if (document.cookie.split(';').some((item) => item.trim().startsWith('acceptedCookie='))) {
		document.querySelector('.cookie').style.display = 'none';
	} else {
		document.querySelector('.cookie').style.display = 'block';
	}
	
	const ratingFeed = document.querySelectorAll('input[name="Rating"]');

	if (ratingFeed.length > 0) {
		let rating = 5;
		function checkRating() {
			ratingFeed.forEach((elem, index) => {
				if (elem.checked) {
					rating = index + 1;
					ratingFeed.forEach(e => e.closest('label').classList.remove('active'));

					elem.closest('label').classList.add('active');
					ratingFeed.forEach((e, i) => {
						if (i <= index) {
							e.closest('label').classList.add('active');
						}
					})
				} 
			})
		}
		ratingFeed.forEach((elem, index) => {
			elem.closest('label').classList.add('active');
			elem.addEventListener('change', () => {
				checkRating();
			});
		});
		
	}

	$('input[type="file"]').change(function() {
    var fileInput = $(this);
    var fileName = fileInput.val().split('\\').pop();
    var fileTextDiv = $(this).closest('.input-file').find('.input-file-text');
		console.log(fileTextDiv)
    if (fileName) {
      fileTextDiv.text(fileName);
    } else {
      fileTextDiv.text('Файл не выбран');
    }
  });

}); //end
