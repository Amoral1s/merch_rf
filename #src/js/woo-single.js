jQuery(document).ready(function ($) {
  console.log('woocommerce JS Single Product')

  const singleProduct = document.querySelector('.product.single-product');

  if (!singleProduct) {
    return;
  }

  const sizeLabel = document.querySelector('.single-product .variations label[for="pa_razmer"]');

  if (sizeLabel) {
    const button = document.createElement('div');
    button.classList.add('size-btn');
    button.innerHTML = `
    <div class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<path d="M5 9.97873C5 11.095 6.79086 12 9 12V9.97873C9 8.98454 9 8.48745 8.60252 8.18419C8.20504 7.88092 7.811 7.99435 7.02292 8.22121C5.81469 8.56902 5 9.2258 5 9.97873Z" stroke="#71E69B" stroke-width="1.5" stroke-linejoin="round"/>
				<path d="M16 8.5C16 10.433 12.866 12 9 12C5.13401 12 2 10.433 2 8.5C2 6.567 5.13401 5 9 5C12.866 5 16 6.567 16 8.5Z" stroke="#71E69B" stroke-width="1.5"/>
				<path d="M2 9V15.6667C2 17.5076 5.13401 19 9 19H20C20.9428 19 21.4142 19 21.7071 18.7071C22 18.4142 22 17.9428 22 17V14C22 13.0572 22 12.5858 21.7071 12.2929C21.4142 12 20.9428 12 20 12H9" stroke="#71E69B" stroke-width="1.5"/>
				<path d="M18 19V17M14 19V17M10 19V17M6 18.5V16.5" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</div>
		<p>Таблица размеров</p>
    `;
    sizeLabel.parentElement.appendChild(button);
    $('.size-btn').on('click', function() {
      $('.popup.popup-sizes').fadeIn(300);
      $('.popup').removeClass('popup-thx');
      $('.overlay').fadeIn(300);
      $('html').addClass('fixed');
    });
  }
  

  const callOrder = document.querySelector('.button.call-cart');
  callOrder.classList.add('disabled');
  let varToggle = false;

  function checkButton() {
    if (varToggle == true) {
      callOrder.classList.remove('disabled');
    } else {
      callOrder.classList.add('disabled');
    }
  }

  let indexAll = 0;
  const checkVariables = () => {
    const variables = singleProduct.querySelectorAll('.variations tbody tr');
    if (variables.length > 0) {
      indexAll = 0;
      variables.forEach((table, index) => {
        const items = table.querySelectorAll('li.xt_woovs-selected');
        if (items.length > 0) {
          indexAll++;
        } 
      });
      if (indexAll == variables.length) {
        varToggle = true;
      } else {
        varToggle = false;
      }
    } else {
      varToggle = true;
    }
    checkButton();
  }
  singleProduct.addEventListener('click', () => {
    checkVariables();
  });


  //product order
  function productData() {
    const productDataTextarea = document.querySelector('.popup-order #data-product-textarea');
    const popupDataHTML = document.querySelector('#data-product.data');


    const variations = singleProduct.querySelector('.variations');
    const productTitle = singleProduct.querySelector('.single-product h1.page-title').textContent.trim();
    const productThumb = singleProduct.querySelector('.slider-wrap .swiper-wrapper .item img').src;
    const sku = singleProduct.querySelector('.single-product .sku').textContent.trim();
    const productPriceElement = singleProduct.querySelector('.single-product-bottom .price span bdi');
    const productCount = singleProduct.querySelector('.single-product-bottom .count');





    // Получаем и форматируем цену
    let productPrice = '';
    if (productPriceElement) {
        // Извлекаем цену, убираем пробелы и другие нечисловые символы
        const priceText = productPriceElement.textContent.replace(/\s+/g, '').match(/\d+(\.\d+)?/g);
        if (priceText) {
            productPrice = parseFloat(priceText[0]).toLocaleString('ru-RU') + ' ₽';
        }
    }
    let productData = {};
    let productDataText = ''; // Для заполнения текстового поля

    if (variations) {
      const tableRow = variations.querySelectorAll('tr');
      tableRow.forEach(row => {
          let name = row.querySelector('.label label').textContent.trim(); // Получаем ключ
          
          let valueItem = row.querySelector('.value .xt_woovs-selected span'); // Получаем значение
          let value;
          if (valueItem.closest('.swatch-color')) {
            value = valueItem.closest('.swatch-color').title;
          } else {
            value = valueItem.textContent.trim();
          }
          
          // Удаляем двоеточие, если оно присутствует в начале или в конце значения
          name = name.replace(/:$/, '').trim();
  
          if (name && value) {
              productData[name] = value; // Добавляем в объект productData
              productDataText += `${name}: ${value}\n`; // Добавляем в текстовую строку
          }
      });
    }

    // Добавляем заголовок, метаданные и цену в текстовое поле
    if (productDataTextarea) {
        productDataTextarea.value = `${sku}\nНаименование: ${productTitle}\n${productDataText}\nЦена: ${productPrice}`;
    }
    
    popupDataHTML.innerHTML = '';
    popupDataHTML.style.display = 'block';
    popupDataHTML.innerHTML = `
    <div class="cart-item">
      <div class="cart-item-thumb">
        <img src="${productThumb}" alt="product">
      </div>
      <div class="cart-item-meta">
        <b class="roboto">${productTitle}</b>
        <div class="meta-row">
          <p>от ${productPrice}</p>
          <p>${productCount ? productCount.textContent.trim() : ''}</p>
        </div>
      </div>
    </div>
    `;
  }
  const cartPopup = document.querySelector('.popup.popup-order');
  if (cartPopup) {
    $('.call-cart').on('click', function() {
      $('.popup.popup-order').fadeIn(300);
      $('.popup').removeClass('popup-thx');
      $('.overlay').fadeIn(300);
      $('html').addClass('fixed');
      productData();
    });
  }
  
  
  

	




  

 


}); //end
