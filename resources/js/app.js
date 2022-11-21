import './bootstrap';

import { Swiper, Navigation, Pagination, Autoplay } from 'swiper';
import { Fancybox } from "@fancyapps/ui";
if (document.querySelector('.work__slider')) {

  const swiper = new Swiper('.work__slider', {
    // Optional parameters
    loop: true,
    centeredSlides: true,
    spaceBetween: 30,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
      el: '.work-pagination',
      clickable: true,
      dynamicBullets: true,
      dynamicMainBullets: 2
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      413: {
        slidesPerView: 1.5,
      },
      560: {
        slidesPerView: 2,
      },
      1025: {
        slidesPerView: 3
      }
    },


    // Navigation arrows
    navigation: {
      nextEl: '.work__slider-button-next',
      prevEl: '.work__slider-button-prev',
    },
    modules: [Navigation, Pagination, Autoplay],
  });

  Fancybox.bind("[data-fancybox]", {
    Image: {
      zoom: false,
    },
  });

}


if (document.getElementById('burger_btn')) {
  let burger_btn = document.getElementById('burger_btn');
  burger_btn.addEventListener('click', () => {
    if (window.innerWidth <= 1024) {
      document.querySelector('.header__right').classList.add('active')
      burger_btn.parentNode.classList.add('active')
      window.addEventListener('click', (e) => {
        if (e.target.tagName != 'UL' && e.target.className != 'header__right active' && e.target.tagName != 'use' && e.target.tagName != 'svg') {
          document.querySelector('.header__right').classList.remove('active')
          burger_btn.parentNode.classList.remove('active')
        }
      })
    }
  })
}

if (document.querySelectorAll('.services__item')) {
  let products = document.querySelectorAll('.services__item')

  productToggle(false);

  let more_product_btn = document.getElementById('products_more')
  more_product_btn.addEventListener('click', () => {
    if (more_product_btn.innerText == 'Скрыть') {
      return productToggle(false)
    } else {
      productToggle(true)
    }
  })



  function productToggle(type) {
    let more_product_btn = document.getElementById('products_more')
    // true = visible || false == hidden
    if (type) {
      products.forEach((product) => {
        product.style.display = 'flex'
      });
      more_product_btn.innerText = 'Скрыть'
    } else {
      products.forEach((product, index) => {
        if (index >= 4) {
          product.style.display = 'none'
        }
      });
      more_product_btn.innerText = 'Смотреть еще'
    }
  }

}