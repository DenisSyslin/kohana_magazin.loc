<h3>Каталог</h3>
<div class="catalog">
	<?php foreach ($products as $product) : ?>
		<div class="item">
			<div class="image-wrap">
				<img src="<?php echo URL::site('/asserts/uploads/books/' . $product[ 'isbn' ]); ?>.jpg" alt="<?php echo $product[ 'title' ]; ?>"/>
			</div>
			<div class="desc-wrap">
				<h5>
					<strong><?php echo $product[ 'author' ] . ' - ' . $product[ 'title' ]; ?></strong>
				</h5>
				<p><?php echo UTF8::substr($product[ 'desc' ], 0, 600) . '...'; ?></p>
			</div>
			<div class="price-wrap">
				<p>
					<strong><?php echo $product[ 'price' ]; ?>руб.</strong>
				</p>
				<a class="btn btn-primary" href="#">
					<span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Купить
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
	<?php endforeach; ?>
</div>


