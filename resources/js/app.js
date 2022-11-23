import './bootstrap';

import.meta.glob([
  '../assets/**',
]);

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
    count++ == 1 ? document.getElementById('map').innerHTML = `<iframe <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae277ef7a4bef301873ba91b5618c50a03ebb247d0902019e2c7ab70411cd74a7&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>` : ''
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



if (document.querySelectorAll('.parallax').length >= 1) {
  const parallaxBlocks = document.querySelectorAll('.parallax-item');

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

  parallaxScroll(parallaxBlocks[0]);

  parallaxBlocks.forEach(item => {
    document.addEventListener('scroll', () => {
      parallaxScroll(item);
    });
  });
}

if (document.querySelectorAll('.parallax-default').length >= 1) {
  const parallaxBlocks = document.querySelectorAll('.parallax-default');

  const mediaQuery = window.matchMedia('(max-width: 1366px)')
  const mediaQueryMini = window.matchMedia('(max-width: 1600px)');
  const mediaQueryMed = window.matchMedia('(max-width: 1112px)');

  const mediaQueryMob = window.matchMedia('(max-width: 600px)');


  let minusWidth = 180;

  if (mediaQueryMini.matches) {
    minusWidth = 150;
  }
  if (mediaQuery.matches) {
    minusWidth = 170;
  }
  if (mediaQueryMed.matches) {
    minusWidth = 134;
  }
  if (mediaQueryMob.matches) {
    minusWidth = 120;
  }


  function parallaxScroll(item) {
    if ((window.scrollY + window.innerHeight) >= item.offsetTop) {
      let scrollLength = (((window.scrollY) - ((item.offsetTop) - window.innerHeight)) / 6);
      scrollLength = Math.round(scrollLength);
      item.style.backgroundPositionY = `${scrollLength - minusWidth}px`;
    }
  }

  parallaxScroll(parallaxBlocks[0]);

  parallaxBlocks.forEach(item => {
    document.addEventListener('scroll', () => {
      parallaxScroll(item);
    });
  });
}





if (document.getElementById('products_more')) {

  let btn_more = document.getElementById('products_more')
  let page_id = document.getElementById('page_id').value;

  btn_more.addEventListener('click', () => {
    let wrapper_products = document.getElementById('products')
    if (btn_more.innerText == 'Скрыть') {
      wrapper_products.querySelectorAll('.services__item').forEach((product, index) => {
        if (index >= 4) {
          product.classList.remove('show')
          btn_more.innerText = 'Смотреть еще'
        }
      });
      return;
    }

    if (wrapper_products.querySelectorAll('.services__item').length > 4) {
      wrapper_products.querySelectorAll('.services__item').forEach((product, index) => {
        if (index >= 4) {
          product.classList.add('show')
          btn_more.innerText = 'Скрыть'
        }
      });
      return;
    }
    getAllProducts()
  })

  async function getAllProducts() {
    let res = await axios.post('/get-products', { id: page_id })
    let wrapper_products = document.getElementById('products')
    if (res.status == 200) {
      wrapper_products.innerHTML = res.data
      btn_more.innerText = 'Скрыть'
      productModal();
    }
  }
}



if (document.querySelectorAll('.open-simple').length >= 1) {
  document.querySelectorAll('.open-simple').forEach(button => {
    button.addEventListener('click', () => {
      document.querySelector('.modal').classList.add('active')

      document.querySelector('.modal').addEventListener('click', (e) => {
        if (e.target.classList[0] == 'modal' || e.target.classList[0] == 'close') {
          document.querySelector('.modal').classList.remove('active')
        }
      })


      // send

      document.querySelector('.modal').querySelector('.send-simple').addEventListener('click', async () => {
        let parent = document.querySelector('.modal').querySelector('.send-simple').parentNode.parentNode;
        let name = parent.querySelector('input[name="name"]')
        let number = parent.querySelector('input[name="number"')
        if (parent.querySelector('input[type="checkbox"]')) {
          let check = parent.querySelector('input[type="checkbox"]')
          !check.checked ? check.parentNode.classList.add('error') : check.parentNode.classList.remove('error')
        }
        let page_id = document.querySelector('.page_id').value
        name.value.trim().length <= 0 ? name.parentNode.classList.add('error') : name.parentNode.classList.remove('error')
        number.value.trim().length <= 0 ? number.parentNode.classList.add('error') : number.parentNode.classList.remove('error')

        if (parent.querySelector('.error')) {
          return;
        } else {
          let res = await axios.post('send-mail', { page_id: page_id, type: 'simple', name: name.value.trim(), number: number.value.trim() })
          console.log(res);
        }
      })
    })
  });
}

function productModal() {
  if (document.querySelectorAll('open-product').length >= 1) {
    document.querySelectorAll('.open-product').forEach(button => {
      button.addEventListener('click', () => {
        let modal = document.querySelector('.modal-product')
        modal.classList.add('active')

        let image = button.parentNode.querySelector('img').src
        let description = button.parentNode.querySelector('input[type="hidden"]').value
        let title = button.parentNode.querySelector('h3').innerText
        let price = button.parentNode.querySelector('.price').innerHTML
        let material = button.parentNode.querySelector('.material') ? button.parentNode.querySelector('.material').innerText : null;


        modal.addEventListener('click', (e) => {

          if (e.target.classList[1] == 'modal-product' || e.target.classList[1] == 'close-product') {
            modal.classList.remove('active')
          }
        })


        //insert to modal

        let product_modal_left = modal.querySelector('.modal__product-left')
        let product_modal_right = modal.querySelector('.modal__product-right')



        //clear material
        product_modal_left.querySelector('p.material').innerText = '';

        product_modal_left.querySelector('h3').innerText = title
        product_modal_left.querySelector('p.price').innerHTML = price
        material != null ? product_modal_left.querySelector('p.material').innerText = material : ''
        product_modal_left.querySelector('p.description').innerHTML = 'Краткое описание: ' + description

        product_modal_right.querySelector('img').src = image


        //if has error then clear

        if (modal.querySelectorAll('.error')) {
          let clear = modal.querySelectorAll('.error');
          clear.forEach(clear_item => {
            clear_item.classList.remove('error')
          });
        }





        //send
        modal.querySelector('.send-product').addEventListener('click', async () => {
          let parent = modal.querySelector('.send-product').parentNode.parentNode;
          let name = parent.querySelector('input[name="name"]')
          let number = parent.querySelector('input[name="number"')
          name.value.trim().length <= 0 ? name.parentNode.classList.add('error') : name.parentNode.classList.remove('error')
          number.value.trim().length <= 0 ? number.parentNode.classList.add('error') : number.parentNode.classList.remove('error')
          let page_id = document.querySelector('.page_id').value

          if (parent.querySelector('.error')) {
            return;
          } else {
            let res = await axios.post('send-mail', { page_id: page_id, type: 'product', title: title, name: name.value.trim(), number: number.value.trim() })
            console.log(res);
          }
        })

      })
    });
  }
}
productModal()


if (document.querySelector('.send-simple-form')) {
  document.querySelector('.send-simple-form').addEventListener('click', async () => {
    let parent = document.querySelector('.send-simple-form').parentNode.parentNode;
    let name = parent.querySelector('input[name="name"]')
    let number = parent.querySelector('input[name="number"')
    if (parent.querySelector('input[type="checkbox"]')) {
      let check = parent.querySelector('input[type="checkbox"]')
      !check.checked ? check.parentNode.classList.add('error') : check.parentNode.classList.remove('error')
    }
    let page_id = document.querySelector('.page_id').value
    name.value.trim().length <= 0 ? name.parentNode.classList.add('error') : name.parentNode.classList.remove('error')
    number.value.trim().length <= 0 ? number.parentNode.classList.add('error') : number.parentNode.classList.remove('error')


    if (parent.querySelector('.error')) {
      return;
    } else {
      let res = await axios.post('send-mail', { page_id: page_id, type: 'simple', name: name.value.trim(), number: number.value.trim() })
      console.log(res);
    }
  })
}