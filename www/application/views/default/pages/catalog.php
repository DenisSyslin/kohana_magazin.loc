<h2>Каталог</h2>
<div class="catalog">
	<?php foreach ($products as $product) : ?>
		<div class="item-xs-3 item">
			<h5><?php echo $product[ 'name' ]; ?></h5>
			<p>Стоимость: <strong><?php echo $product[ 'price' ]; ?></strong></h6>
		</div>
	<?php endforeach; ?>
	<div class="clearfix"></div>
</div>


