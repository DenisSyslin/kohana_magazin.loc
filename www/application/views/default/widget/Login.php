<div class="login-form-wrap">
	<h4>Вход</h4>
	<form action="<?php echo URL::site('/login') ?>" id="login-form" method="POST" class="form-signin">
		<input type="text" class="form-control" placeholder="Email" required autofocus>
		<input type="password" class="form-control" placeholder="Пароль" required>
		<div class="input-group">
			<div class="checkbox">
				<label>
					<input name="remember" type="checkbox" value="1"/> 
					Запомнить меня
				</label>
			</div>
		</div>
		<button class="btn btn-primary" type="submit">Войти</button>
	</form>
</div>
