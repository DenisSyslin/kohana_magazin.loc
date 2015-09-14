<?php defined('SYSPATH') or die('No direct script access.');?>
<nav id="top-menu">
	<ul class="top-menu-right not-styled-list">
		<li <?php if ($current == 'main') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/') ?>">Главная</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'articles') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/articles') ?>">Каталог</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'news') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/news') ?>">Способ оплаты</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'help') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/help') ?>">Доставка</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'about') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/about') ?>">Контакты</a>
		</li>
	</ul>
</nav>
