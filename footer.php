<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<div class="modal__icon">
			<img src="/img/modal-order.svg" alt="icon">
		</div>
		<p class="h3 modal__title">Заказать обратный звонок</p>
		<form class="ajax-form vertical-form" autocomplete="off">
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="input-text">
			<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="input-text" data-req="true">
			<button type="submit" class="btn btn--blue">Отправить</button>
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Даю свое согласие на&nbsp;обработку моих персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="/privacy/" target="_blank">политикой конфиденциальности</a></span>
			</label>
		</form>
	</div>

	<div id="modal-thanks" class="modal modal--thanks">
		<p class="h2">Спасибо за&nbsp;заявку!</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
