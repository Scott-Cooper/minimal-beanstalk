<?
require('includes/params.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title><? echo $page_title; ?></title>

<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<script>
	var ROOT = '<? echo ROOT; ?>';
	var HTTP = '<? echo HTTP ?>';
	var PAGE = '<? echo $page ?>';
</script>
<link rel="stylesheet" type="text/css" href="<? echo HTTP ?>css/style.min.css" />
</head>

<body class="page-<? echo $page; ?>">
<? 
	include('includes/header.php'); 
	include('includes/content.php');
	minimal-beanstalk
?>
<div class="base_alert"><div class="txt"></div></div>

<script type="text/javascript" src="<? echo HTTP ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<? echo HTTP ?>js/scripts.min.js"></script>
</body>
</html>