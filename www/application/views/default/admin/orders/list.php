<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div id="container">
    <div class="container">
        <div class="row title">
	        <div class="span12">
                <h1 class="pull-left"><?php echo __('Список заказов') ?></h1>
                <a class="btn btn-success pull-right"
                   href="<?php echo URL::site('/admin/order/new') ?>"><i class="icon-plus"></i> <?php echo __('Новый') ?></a>
	        </div>
        </div>

	    <?php if ($message) : ?>
	        <div class="row">
		        <div class="span12">
                    <div class="alert alert-<?php echo $message_type ?>">
                        <a href="#" class="close" data-dismiss="alert">×</a>
				        <?php echo $message ?>
                    </div>
		        </div>
	        </div>
	    <?php endif; ?>

	    <div class="row">
			<div class="row-fluid">
				<div class="btn-group span8">
					<a href="" class="btn">Новые</a>
					<a href="" class="btn">В обработке</a>
					<a href="" class="btn">Выполненые</a>
				</div>
				<div class="btn-group span4">
					<form method="" class="form-search">
						<div class="input-append">
							<input type="text" class="input-medium search-query">
							<button type="submit" class="btn">Искать</button>
						</div>
					</form>
				</div>
			</div>
			<hr/>
			<div class="span12">
            </div>
	    </div>
    </div>
</div>

 