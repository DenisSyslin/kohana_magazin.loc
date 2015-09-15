<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo (isset($pagetitle) ? $pagetitle : '') ;  ?></title>

        <!-- Base URL -->
        <base href="<?php echo URL::base(true, false) ?>">
        <link rel="shortcut icon" href="/favicon.png" type="image/png"/>

        <!-- System -->
        <meta name="author"      content="<?php echo Config::getSiteParam('site_developer');  ?>" />
        <meta name="description" content="<?php echo isset($description) ? $description : ''; ?>" />
        <meta name="keywords"    content="<?php echo isset($keywords)    ? $keywords    : ''; ?>" />
        <meta name="viewport"    content="width=device-width, initial-scale=1.0" />
		
		<!-- Twitter Bootstrap -->
        <link href="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/bootstrap/css/bootstrap.min.css"       type="text/css" rel="stylesheet" media="all" />
        <link href="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="all" />
		
		<?php if (!empty($styles)) : ?>
			<?php foreach ($styles as $style) : ?>
				<?php if ($style[ 'isUrl' ]) : ?>
					<link href="<?php echo $style[ 'file' ]; ?>" type="text/css" rel="stylesheet" media="<?php echo $style[ 'media' ]; ?>" />
				<?php else: ?>
					<link href="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/<?php echo $style[ 'file' ]; ?>" type="text/css" rel="stylesheet" media="<?php echo $style[ 'media' ]; ?>" />
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		
		<link href="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/css/style.css" type="text/css" rel="stylesheet" media="all" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
	
		<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<section class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo URL::site('/') ?>">
						<div id="site-logo-wrap">
							<img src="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/images/logo.png"/>
						</div>
						<h1><?php echo Config::getSiteParam('site_name');  ?></h1>	
						<h2><?php echo Config::getSiteParam('site_descr'); ?></h2>	
						<div class="clearfix"></div>
					</a>
					<div class="clearfix"></div>
				</div>
				<div id="basket-block">
					<button type="button" class="btn btn-primary">
						<span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Корзина
					</button>
				</div>
				<?php echo ((empty($notShowTopMenu)) ? $topMenu : ''); ?>
				<div class="clearfix"></div>
			</section>
		</header>

		<section class="main-container container">
			<div class="row">
				<aside class="col-lg-2 aside-left">
					<?php echo ((empty($notShowLeftMenu)) ? $leftMenu : ''); ?>
					<?php echo ((empty($notShowLogin))    ? $login    : ''); ?>
				</aside>
				<div class="main-content <?php echo ((empty($notShowNews)) ? 'col-lg-8' : 'col-lg-10'); ?>">
					<?php echo isset($content) ? $content : '' ?>
				</div>				
				<?php echo ((empty($notShowNews)) ? $news : ''); ?>
			</div>
		</section> 

		<footer>
			<div class="container">
				<p class="text-muted">
				<?php echo __('&copy; :date Developer: :developer', array(
							':date' => Date::formatted_time('now', 'Y'),
							':developer' => Config::getSiteParam('site_developer')
						)
					); 
				?>
				</p>
			</div>
		</footer>
		
        <!-- JS Code -->
        <script type="text/javascript" src="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/bootstrap/js/bootstrap.min.js"></script>
		
		<?php if (!empty($scripts)) : ?>
			<?php foreach ($scripts as $script) : ?>
				<?php if ($script[ 'isUrl' ]) : ?>
					<script type="text/javascript" src="<?php echo $script[ 'file' ]; ?>"></script>
				<?php else: ?>
					<script type="text/javascript" src="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/<?php echo $script[ 'file' ]; ?>"></script>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		
        <script type="text/javascript" src="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/js/custom.js"></script>
		
    </body>
</html>