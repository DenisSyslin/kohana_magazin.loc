<h4>Лучшие товары</h4>
<?php if (!empty($topProducts)) : ?>
	<ul>
		<?php foreach ($topProducts as $key => $product) : ?>
			<li>
				<a href="<?php echo URL::site('/product/show/' . $key) ?>"><?php echo $product; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>