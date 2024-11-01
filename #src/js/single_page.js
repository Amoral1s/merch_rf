jQuery(document).ready(function ($) {

	const singlePageRef = document.querySelector('.only-single-page');
	if (!singlePageRef) {
	 return
	}
 
	 const starRatingFunc = () => {
		 const stars = document.querySelectorAll('.popup.review .form-stars img');
		 const starsWrap = stars[0].parentElement;
 
		 stars.forEach((e, i) => {
			 e.addEventListener('click', (event) => {
				 starsWrap.classList.add('selected');
				 $('.stars-input').val(i + 1)
				 stars.forEach(e => {
					 e.classList.remove('active')
				 })
				 for (let r = 0; r < i + 1; r++) {
					 stars[r].classList.add('active');
				 }
				 
			 })
		 })
		 
		 $(stars).hover(function() {
			 if (!starsWrap.classList.contains('selected')) {
				 $(this).addClass('active');
				 $(this).prev().addClass('active');
				 $(this).prev().prev().addClass('active');
				 $(this).prev().prev().prev().addClass('active');
				 $(this).prev().prev().prev().prev().addClass('active');
			 }
		 }, function() {
			 if (!starsWrap.classList.contains('selected')) {
				 $(this).removeClass('active');
				 $(this).prev().removeClass('active');
				 $(this).prev().prev().removeClass('active');
				 $(this).prev().prev().prev().removeClass('active');
				 $(this).prev().prev().prev().prev().removeClass('active');
			 }
		 });
 
	 }
	 
 
	 const singlePage = document.querySelector('.only-single-page');
 
	 if (singlePage) {
		function declension(number, one, few, many) {
			number = Math.abs(number) % 100;
			const n1 = number % 10;
			if (number > 10 && number < 20) return many;
			if (n1 > 1 && n1 < 5) return few;
			if (n1 === 1) return one;
			return many;
		}
		$('.wpd-rating-title').text('Оцените статью');
		$('.wpd-thread-info').text('Комментарии');
		const navWrap = document.querySelector('.single-nav-wrap');
		if (!navWrap) {
			return
		}
		const navWrapParent = navWrap.parentElement;
		const content = document.querySelector('.content');
		const contentBlocks = content.querySelectorAll('*');
		let elems = 0;
		let count = 1;
		contentBlocks.forEach((elem, index) => {
			if (elem.id) {
				if (
						elem.closest('.line') || 
						elem.closest('.product') || 
						elem.classList.contains('wpcf7') || 
						elem.classList.contains('awooc-custom-order') || 
						elem.classList.contains('swiper-wrapper') 
					) 
				{
					return
				}
				const navLink = document.createElement('a');
				navLink.href = `#${elem.id}`;
				navLink.classList.add('anchor');
				navLink.textContent = elem.id.replace(/\-/g, ' ');
				navLink.textContent = count + '. ' + navLink.textContent;
				count++;
				navWrap.appendChild(navLink);
				elems++;
			}
		});
		if (elems === 0) {
			navWrapParent.remove();
		}
		//const rating = document.querySelector('.wpd-rating-stars').cloneNode(true);
		//const ratngTopWrap = document.querySelector('.new-rating');
		const avarageRating = document.querySelector('.wpd-rating-value .wpdrv').textContent;
		const ratingValue = document.querySelector('.ratingValue');
		const ratingVotes = document.querySelector('.wpd-rating-value .wpdrc').textContent;
		const votes = document.querySelector('.votes');

		ratingValue.textContent = avarageRating;
		ratingValue.content = avarageRating;
		votes.content = ratingVotes;
		votes.textContent = `(${ratingVotes} ${declension(ratingVotes, 'оценка', 'оценки', 'оценок')})`;

		//ratngTopWrap.appendChild(rating);

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

		const ratingWrapToClone = document.querySelector('#wpd-post-rating .wpd-rating-data'); 
		const ratingWrapEnd = document.querySelector('.share-stars');
		if (ratingWrapToClone && ratingWrapEnd) {
			const newRating = ratingWrapToClone.cloneNode(true);
			//ratingWrapToClone.style.display = 'none';
			ratingWrapEnd.appendChild(newRating);
			const ratingStars = ratingWrapEnd.querySelectorAll('.wpd-rating-stars svg');
			const oldRatingStars = ratingWrapToClone.querySelectorAll('.wpd-rate-starts .wpd-star');
			
			if (oldRatingStars.length > 0) {
				ratingWrapEnd.classList.add('active');
				$(ratingStars).hover(function() {
					$(this).addClass('active');
					$(this).prev().addClass('active');
					$(this).prev().prev().addClass('active');
					$(this).prev().prev().prev().addClass('active');
					$(this).prev().prev().prev().prev().addClass('active');
				}, function() {
					$(this).removeClass('active');
					$(this).prev().removeClass('active');
					$(this).prev().prev().removeClass('active');
					$(this).prev().prev().prev().removeClass('active');
					$(this).prev().prev().prev().prev().removeClass('active');
				});
				ratingStars.forEach((el, i) => {
					el.addEventListener('click', () => {
						console.log(oldRatingStars[i])
						$(oldRatingStars[i]).trigger('click')
					})
				});
			}

			
		}

		const commentList = document.querySelector('.wpd-thread-list');

		if (commentList) {
			const comments = commentList.querySelectorAll('.comment');

			if (comments.length == 0) {
				const noComments = document.createElement('p');
				noComments.classList.add('no-comments');
				noComments.textContent = 'Комментариев пока нету...';
				commentList.appendChild(noComments);
			}
		}
		
	}
	
 
 }); //end