<div class="form">
  <div class="container">
    <div class="form__wrapper">
      <form action="" method="post" class="form__inner">
        @csrf
        <h4 class="title">Свяжитесь с нами</h4>
        <p>И мы ответим на все интересующие вас вопросы</p>

        <div class="form__inner-input">
          <input type="text" placeholder="Имя" name="name">
        </div>
        
        <div class="form__inner-input">
          <input type="text" placeholder="Телефон" name="number" class="input_number">
        </div>

        <div class="form__inner-bottom">
          <button class="btn">Отправить</button>

          <div class="checkbox">
            <input type="checkbox" id="check" checked name="check">
            <label for="check">
              Даю согласие на сбор и обработку моих данных
            </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>