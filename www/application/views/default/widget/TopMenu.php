<?php defined('SYSPATH') or die('No direct script access.');?>
<nav id="top-menu">
	<ul class="top-menu-right not-styled-list">
		<li <?php if ($current == 'index') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/') ?>">Главная</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'catalog') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/catalog') ?>">Каталог</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'payment') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/payment') ?>">Способ оплаты</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'delivery') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/delivery') ?>">Доставка</a>&nbsp;|&nbsp;
		</li>
		<li <?php if ($current == 'about') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/about') ?>">Контакты</a>
		</li>
	</ul>
</nav>
