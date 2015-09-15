<div class="menu-categories">
	<h4>Категории товаров</h4>
	<?php if (!empty($categories)) : ?>
		<ul class="not-styled-list">
			<?php foreach ($categories as $key => $category) : ?>
				<li>
					<a href="<?php echo URL::site('/categories/show/' . $key) ?>"><?php echo $category; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>