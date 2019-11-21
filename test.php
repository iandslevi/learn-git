<?php
/**
 * @var $page_data \stdclass
 *
 */
$ci =& get_instance();

if (!isset($page_title) || !$page_title){
	$page_title = 'שלמה ביטוח';
}
if (!isset($page_description)){
	$page_description = '';
}
if (!isset($page_keywords)){
	$page_keywords = '';
}
if (!isset($page_image)){
	$page_image = '';
}
if (!isset($page_url)){
	$page_url = '';
}

?><!doctype html>
<html lang="he-IL" ng-app="shlomobt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?= clean($page_title) ?></title>

	<meta property="description" content="<?= clean($page_description) ?>" />
	<meta property="keywords" content="<?= clean($page_keywords) ?>" />

	<meta property="og:title" content="<?= clean($page_title) ?>" />
	<meta property="og:description" content="<?= clean($page_description) ?>" />
	<meta property="og:image" content="<?= $page_image ?>" />
	<meta property="og:image:url" content="<?= $page_image ?>" />
	<meta property="og:type" content="website" />
	<? if ($page_url): ?>
		<meta property="og:url" content="<?= $page_url ?>" />
	<? endif; ?>
	<meta property="og:site_name" content="שלמה ביטוח" />

	<link rel="shortcut icon" href="<?= rel_url('favicon.ico') ?>"/>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= rel_url('tools/open-sans-hebrew.css')?>">
	<link rel="stylesheet" href="<?= rel_url('css/style.css')?>">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.14.1/lodash.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ngMask/3.1.1/ngMask.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.7/angular-sanitize.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.2/angular-ui-router.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ngStorage/0.3.11/ngStorage.min.js"></script>

	<script src="<?= rel_url('js/angular-simple-logger.js')?>"></script>
	<script src="<?= rel_url('js/angular-google-maps.min.js')?>"></script>
	<script src="<?= rel_url('js/angular-recaptcha.min.js')?>"></script>

	<script src="<?= rel_url('js/parallax.min.js')?>"></script>
	<script src="<?= rel_url('js/main.min.js')?>"></script>
	<script src="<?= rel_url('js/wr-acc.min.js')?>"></script>

	<script type="text/javascript">
		var API_PATH = '<?= base_url('api/v1') ?>/';
		var BASE_PATH = '<?= base_url() ?>';
	</script>

</head>
<body ng-controller="MainCtrl">

<header class="header">
	<div class="header-center">
		<a href="" class="btn-call-center" title="מוקד טלפוני" tabindex="0">
			<img src="/images/call-center/center.png" title="מוקד טלפוני" alt="מוקד טלפוני">
		</a>
		<a href="" class="logo" title="שלמה ביטוח! תמיד כן" tabindex="{{ (!isMenuOpen && !isAccMenuOpen) ? 0 : -1 }}">
			<img id="logo-img" src="<?= rel_url('images/logo.png')?>" title="שלמה ביטוח! תמיד כן" alt="שלמה ביטוח! תמיד כן"/>
		</a>
	</div>
</header>

<div class="page-container">
	<?= $page_data->content ?>
</div>


<? if (false && _Env::ENABLE_SEO): ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-76830847-7', 'auto');
		ga('send', 'pageview');

	</script>
<? endif; ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>


</body>
</html>
