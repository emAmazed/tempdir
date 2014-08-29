<!DOCTYPE html>
<html>
<head>
<title></title>
<style type='text/css'>
div.toggler { cursor:pointer; }
div.toggler div { display:none; }
</style>
<script src='jquery-1.8.2.min.js'></script>
<script>
$(function() {
  $('.toggler').click(function() {
	  $(this).find('div').slideToggle();
	});
});
</script>
<!--<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css'/>-->
</head>
<body>

<div class="toggler"> Agent1

<div>
<ul>
<li>list 1</li>
<li>list 2</li>
<li>list 3</li>
<li>list 4</li>
</ul>
</div>

</div>

</body>
</html>
