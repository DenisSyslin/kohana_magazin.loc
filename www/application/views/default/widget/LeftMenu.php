<h4>Категории товаров</h4>
<?php if (!empty($categories)) : ?>
	<ul>
		<?php foreach ($categories as $key => $category) : ?>
			<li>
				<a href="<?php echo URL::site('/categories/show/' . $key) ?>"><?php echo $category; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<form class="form-signin">
	<input type="text" class="form-control" placeholder="Email" required autofocus>
	<input type="password" class="form-control" placeholder="Password" required>
	<label class="checkbox">
		<input type="checkbox" value="remember-me">
		Запомнить меня
	</label>
	<button class="btn btn-primary" type="submit">Войти</button>
</form>
