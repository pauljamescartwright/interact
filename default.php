<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?=$this->getThemePath()?>/css/zresponsive.css" />
		<link rel="stylesheet" href="<?=$this->getThemePath()?>/css/zbase.css" />
		<?php Loader::element('header_required'); ?>
	</head>
	<body>
		<div id="top-margin"></div>
		<div id="big-header">
		<div id="header">
			<div id="title">
				Interact 5K
			</div>
			<div id="navagation">
				<!-- <p class="n">Navigation</p> -->
				<?php
				$a = new GlobalArea('Navigation');
				$a->display();
				?>
				<br class="clear">
			</div>
			<br class="clear">
		</div>
		<div id="this-box">
			<?php
			$a = new GlobalArea('Title');
			$a->display();
			?>
		</div>
		<br class="clear">
		</div>
		<div id="content-wrap">
			<div class="content">
				<?php
				$a = new Area('Content');
				$a->display($c);
				?>
			</div>
			<div id="footer">
				<hr id="footer-hr">
				<?php
				$a = new GlobalArea('Site Footer');
				$a->display();
				?>
			</div>
		</div>
			<script type="text/javascript">
			  $(function() {
			    $('.n').click(function(e) {
			      e.preventDefault();
			      $(this).next().slideToggle();
			    })
			  })
			</script>
		<?php Loader::element('footer_required'); ?>
	</body>
</html>