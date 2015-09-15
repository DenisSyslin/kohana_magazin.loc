<article>
	<h3>О компании</h3>
	<p>This, one of the most famous sonnets, explores the reaction of the human psyche to the promptings of sexual urges. The folk wisdom of omne animal post coitum triste est, which is often quoted in connection with this sonnet, is banal in comparison to the ideas developed here. One has to look back to the ancient Greek world, and to the plays of Euripides, especially The Bacchae and Hippolytus, to find an equivalent. Particularly striking is the torrent of adjectives describing the build up of desire, and the imagery of the hooked fish which portrays the victim of lust as a frenzied animal expending its last vital energies in paroxysms of rage and futile struggle, even though it is inevitably doomed.</p>
</article>
<article>
	<h3>Поиск по сайту</h3>
	<form action="/search" method="post">
		<div class="input-group">
			<input type="Search" placeholder="Search..." class="form-control" />
			<div class="input-group-btn">
				<button class="btn btn-primary">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</div>
		</div>
	</form>
</article>
<article>
	<h3>Лучшие товары</h3>
	<?php if (!empty($topProducts)) : ?>
		<?php foreach ($topProducts as $product) : ?>
			<div class="top-product-block col-lg-3">
				<img src="<?php echo URL::site('/asserts/uploads/books/' . $product[ 'img' ]); ?>" alt="<?php echo $product[ 'name' ]; ?>"/>
				<h5>
					<strong><?php echo $product[ 'author' ]; ?></strong> 
					- <?php echo $product[ 'name' ]; ?>
				</h5>	
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</article>
