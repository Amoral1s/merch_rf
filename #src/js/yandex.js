document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.map .left .item');
  const mapContainer = document.getElementById('yandex-map');
  if (!mapContainer) {
    return;
  }
  let map, placemark;

  // Инициализация карты с первой активной меткой
  function initMap(coords) {
      ymaps.ready(function () {
          map = new ymaps.Map(mapContainer, {
              center: coords,
              zoom: 12,
              controls: ['zoomControl']
          });

          // Добавляем метку
          placemark = new ymaps.Placemark(coords, {}, {
              preset: 'islands#blueDotIcon' // Стандартная синяя точка
          });

          map.geoObjects.add(placemark);
      });
  }

  // Обновление карты с новыми координатами
  function updateMap(coords) {
      map.setCenter(coords);
      placemark.geometry.setCoordinates(coords);
  }

  // Создание блока с маршрутами и добавление его в DOM
  function addMetaBlock(item, coords) {
      let metaBlock = document.createElement('div');
      metaBlock.classList.add('meta');

      // Ссылка для автомобильного маршрута
      let drivingLink = document.createElement('a');
      drivingLink.classList.add('driving');
      drivingLink.setAttribute('href', `https://yandex.ru/maps/?rtext=~${coords.join(',')}&rtt=auto`);
      drivingLink.setAttribute('target', '_blank');
      drivingLink.setAttribute('rel', 'nofollow');
      drivingLink.innerHTML = `
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.04167 10.0003C1.04167 5.05278 5.05245 1.04199 10 1.04199C14.9476 1.04199 18.9583 5.05278 18.9583 10.0003C18.9583 14.9479 14.9476 18.9587 10 18.9587C5.05245 18.9587 1.04167 14.9479 1.04167 10.0003ZM11.2558 7.48906L11.3238 7.53113C11.8919 7.88255 12.3656 8.17553 12.7088 8.44849C13.0621 8.72949 13.3733 9.06166 13.4851 9.52466C13.5605 9.83674 13.5605 10.1642 13.4851 10.4762C13.3733 10.9392 13.0621 11.2713 12.7088 11.5523C12.3656 11.8253 11.8919 12.1183 11.3238 12.4697L11.2558 12.5118C10.7087 12.8504 10.2494 13.1344 9.86851 13.3108C9.48217 13.4897 9.04167 13.6248 8.58234 13.4831C8.27873 13.3893 8.009 13.2136 7.79599 12.9795C7.48608 12.6391 7.38393 12.1941 7.33771 11.7493C7.29165 11.3062 7.29166 10.7335 7.29167 10.0362V9.96457C7.29166 9.26733 7.29165 8.69474 7.33771 8.25154C7.38393 7.8068 7.48608 7.36183 7.79599 7.02135C8.009 6.78733 8.27873 6.61151 8.58234 6.51783C9.04167 6.37608 9.48217 6.5111 9.86851 6.69002C10.2494 6.86644 10.7086 7.15051 11.2558 7.48906Z" fill="#885C8C"/>
          </svg>
        </div>
        Как доехать`;

      // Ссылка для пешего маршрута
      let walkingLink = document.createElement('a');
      walkingLink.classList.add('walking');
      walkingLink.setAttribute('href', `https://yandex.ru/maps/?rtext=~${coords.join(',')}&rtt=pedestrian`);
      walkingLink.setAttribute('target', '_blank');
      walkingLink.setAttribute('rel', 'nofollow');
      walkingLink.innerHTML = `
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.04167 10.0003C1.04167 5.05278 5.05245 1.04199 10 1.04199C14.9476 1.04199 18.9583 5.05278 18.9583 10.0003C18.9583 14.9479 14.9476 18.9587 10 18.9587C5.05245 18.9587 1.04167 14.9479 1.04167 10.0003ZM11.2558 7.48906L11.3238 7.53113C11.8919 7.88255 12.3656 8.17553 12.7088 8.44849C13.0621 8.72949 13.3733 9.06166 13.4851 9.52466C13.5605 9.83674 13.5605 10.1642 13.4851 10.4762C13.3733 10.9392 13.0621 11.2713 12.7088 11.5523C12.3656 11.8253 11.8919 12.1183 11.3238 12.4697L11.2558 12.5118C10.7087 12.8504 10.2494 13.1344 9.86851 13.3108C9.48217 13.4897 9.04167 13.6248 8.58234 13.4831C8.27873 13.3893 8.009 13.2136 7.79599 12.9795C7.48608 12.6391 7.38393 12.1941 7.33771 11.7493C7.29165 11.3062 7.29166 10.7335 7.29167 10.0362V9.96457C7.29166 9.26733 7.29165 8.69474 7.33771 8.25154C7.38393 7.8068 7.48608 7.36183 7.79599 7.02135C8.009 6.78733 8.27873 6.61151 8.58234 6.51783C9.04167 6.37608 9.48217 6.5111 9.86851 6.69002C10.2494 6.86644 10.7086 7.15051 11.2558 7.48906Z" fill="#885C8C"/>
          </svg>
        </div>
        Как пройти`;

      // Добавляем ссылки в metaBlock
      metaBlock.appendChild(drivingLink);
      metaBlock.appendChild(walkingLink);

      // Удаляем старый metaBlock, если он есть
      const existingMeta = item.querySelector('.meta');
      if (existingMeta) {
          existingMeta.remove();
      }

      // Добавляем metaBlock в элемент
      item.appendChild(metaBlock);
  }

  // Устанавливаем активный элемент и обновляем карту
  function setActiveItem(item) {
      // Убираем класс active у всех элементов
      items.forEach(el => el.classList.remove('active'));
      // Добавляем класс active к выбранному элементу
      item.classList.add('active');

      // Получаем координаты активного элемента
      const coords = item.getAttribute('data-coordinat').split(',').map(Number);
      updateMap(coords);

      // Добавляем блок с маршрутами
      addMetaBlock(item, coords);
  }

  // Инициализация карты с первой активной меткой
  const firstItem = document.querySelector('.map .left .item.active');
  const firstCoords = firstItem.getAttribute('data-coordinat').split(',').map(Number);
  initMap(firstCoords);
  addMetaBlock(firstItem, firstCoords);

  // Навешиваем обработчики кликов на все элементы
  items.forEach(item => {
      item.addEventListener('click', function () {
          setActiveItem(item);
      });
  });
});