<!-- В этом файле описываем все  всплывающие окна -->

<div style="display: none;">
	<div class="box-modal" id="messgeModal">
		<div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>

		<div class = "modalline" id = "lineIcon">
		</div>

		<div class = "modalline" id = "lineMsg">
		</div>
	</div>
</div>  


<!-- Пройти бесплатный практикум --> 
<div style="display: none;">
	<div class="box-modal" id="workshop">
		<div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
		<h3>Пройти бесплатный практикум</h3>
		<form action="#" class="reviews__form">
			<div class = "SendetMsg" style = "display:none"> 
				Ваш сообщение успешно отправлено
			</div>
			<div class="headen_form_blk">
				<input type="text" name="name" placeholder="Ваше имя" id="form-namew" class="reviews__form-input input">
				<input type="email" name="email" placeholder="*Email" id="form-emailw" class="reviews__form-input input">
				<input type="tel" name="tel" placeholder="Телефон" id="form-telw" class="reviews__form-input input">
				<button type="submit" class="reviews__form-btn workshop btn">Отправить</button>
			</div>
		</form> 
	</div>
</div> 

<!-- Подпишитесь чтобы начать менятьсвою жизнь прямо сейчас -->
<div style="display: none;">
	<div class="box-modal" id="wsubscribe">
		<div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
		<h3>Подпишитесь чтобы начать менять свою жизнь прямо сейчас</h3>
		<form action="#" class="reviews__form">
			<div class = "SendetMsg" style = "display:none"> 
				Ваш сообщение успешно отправлено
			</div>
			<div class="headen_form_blk">
				<input type="text" name="name" placeholder="Ваше имя" id="form-namecr" class="reviews__form-input input">
				<input type="email" name="email" placeholder="*Email" id="form-telcr" class="reviews__form-input input">
				<button type="submit" class="reviews__form-btn wsubscribe btn">Отправить</button>
			</div>
		</form>
	</div>
</div> 


<!-- Пройти бесплатный практикум --> 
<div style="display: none;">
	<div class="box-modal" id="method">
		<div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
		<h3 id="method-title">Пройти метод: <?php the_title();?></h3>
		<form action="#" class="reviews__form">
			<div class = "SendetMsg" style = "display:none"> 
				Ваш сообщение успешно отправлено  
			</div>
			<div class="headen_form_blk">
				<input type="text" name="name" placeholder="Ваше имя" id="form-nameM" class="reviews__form-input input">
				<input type="email" name="email" placeholder="*Email" id="form-emailM" class="reviews__form-input input">
				<input type="tel" name="tel" placeholder="Телефон" id="form-telM" class="reviews__form-input input">
				<button type="submit" class="reviews__form-btn method-btn btn">Отправить</button>
			</div>
		</form> 
	</div>
</div> 