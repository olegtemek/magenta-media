import './bootstrap';

import { Swiper, Navigation, Pagination, Autoplay } from 'swiper';
import { Fancybox } from "@fancyapps/ui";
import axios from 'axios';

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



if (document.getElementById('map')) {
  let count = 0
  document.getElementById('map').addEventListener('mouseover', () => {
    count++ == 1 ? document.getElementById('map').innerHTML = `<iframe style="filter: grayscale(1) invert(100%) !important;" <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae277ef7a4bef301873ba91b5618c50a03ebb247d0902019e2c7ab70411cd74a7&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>` : ''
  })
}



if (document.querySelector('.input_number')) {
  [].forEach.call(document.querySelectorAll('.input_number'), function (input) {
    let keyCode;
    function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      let pos = this.selectionStart;
      if (pos < 3) event.preventDefault();
      let matrix = "+7 (___) ___-__-__",
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, ""),
        newValue = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
        });
      i = newValue.indexOf("_");
      if (i != -1) {
        i < 5 && (i = 3);
        newValue = newValue.slice(0, i);
      }
      let reg = matrix.substr(0, this.value.length).replace(/_+/g,
        function (a) {
          return "\\d{1," + a.length + "}";
        }).replace(/[+()]/g, "\\$&");
      reg = new RegExp("^" + reg + "$");
      if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
      if (event.type == "blur" && this.value.length < 5) this.value = "";
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false);
  });
}





if (document.querySelectorAll('.intro__home-items-inner')) {
  const parallaxBlock = document.querySelectorAll('.intro__home-items-inner');

  const mediaQuery = window.matchMedia('(max-width: 1360px)')
  const mediaQueryMobile = window.matchMedia('(max-width: 414px)')

  let minusWidth = 200;

  if (mediaQuery.matches) {
    minusWidth = 160;
  }
  if (mediaQueryMobile.matches) {
    minusWidth = 160;
  }

  function parallaxScroll(item) {
    if ((window.scrollY + window.innerHeight) >= item.offsetTop) {
      let scrollLength = (((window.scrollY) - ((item.offsetTop) - window.innerHeight)) / 6);
      scrollLength = Math.round(scrollLength);
      item.style.top = `${scrollLength - minusWidth}px`;
    }
  }

  parallaxScroll(parallaxBlock[0]);

  parallaxBlock.forEach(item => {
    document.addEventListener('scroll', () => {
      parallaxScroll(item);
    });
  });
}

if (document.getElementById('products_more')) {

  let btn_more = document.getElementById('products_more')
  let token = document.querySelector('meta[name="csrf-token"]')['content'];
  let page_id = document.getElementById('page_id').value;

  btn_more.addEventListener('click', () => {
    let products_count = btn_more.parentNode.querySelectorAll('.services__wrapper > .services__item').length

    if (products_count > 4) {
      console.log('error');
    } else {
      getAllProducts();
    }
  })

  async function getAllProducts() {
    let res = await axios.post('/get-products', { id: page_id })
    if (res.status == 200) {
      document.getElementById('services').innerHTML = res.data



      document.getElementById('products_more').addEventListener('click', () => {
        let products = document.getElementById('products_more').parentNode.querySelectorAll('.services__wrapper > .services__item')
        if (products.length > 4) {
          products.forEach((product, index) => {
            product.classList.toggle('hidden')
          });
        }
        products[0].classList[1] == 'hidden' ? document.getElementById('products_more').innerText = 'Смотреть еще' : document.getElementById('products_more').innerText = 'Скрыть'
      })
    }
  }
}



// $.ajax({
//   url: '/get-products',
//   type: "POST",
//   headers: {
//     "X-CSRF-TOKEN": token
//   },
//   dataType: "html",
//   data: {
//     id: page_id,
//     type: type
//   },
//   success: function (response) {
//     console.log(response);
//     $('#services').html(response)

//     $('#products_more').click(() => {
//       productToggle() // доделать
//     })
//   },
// });

