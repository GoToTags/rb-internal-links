<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>RB Internal Linker</title>
	<link rel="stylesheet" href="<?php echo plugins_url('rb-internal-links/css/tinymce-plugin.css?ver='.date('Ymd')); ?>" type="text/css" media="screen" />
	<script type="text/javascript" src="../../../wp-includes/js/jquery/jquery.js"></script>
	<script type="text/javascript" src="../../../wp-includes/js/tinymce/tiny_mce_popup.js?ver=<?php echo date('Ymd'); ?>"></script>
	<script type="text/javascript" src="<?php echo plugins_url('rb-internal-links/js/box.js?ver='.date('Ymd')); ?>"></script>
	<script type="text/javascript" src="<?php echo plugins_url('rb-internal-links/js/tinymce-plugin.js?ver='.date('Ymd')); ?>"></script>	
</head>
<body>
	<div class="arrow" onclick="moveBoxes(-1);">&laquo;</div>

	<div id="container">
		<div id="boxes">
						
		</div>
	</div>
	
	<div class="arrow right" onclick="moveBoxes(1);">&raquo;</div>

	<div id="theDarkness">
		<div id="ajaxLoading"></div>
	</div>
</body>
</html>
