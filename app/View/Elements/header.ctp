<!DOCTYPE html>
<html lang="en">
<head>
<title>Parfait</title>

<!-- styles -->
<?php
	echo $this->Html->css('bootstrap');
	echo $this->Html->css('bootstrap-responsive');
?>

<!-- scripts -->
<?php
	$this->Html->script('jquery-1.8.1.min', array('inline' => false));
	$this->Html->script('bootstrap', array('inline' => false));
	$this->Html->script('bootstrap-collapse', array('inline' => false));
?>

</head>
<body style="padding: 80px;">
	<div id="container">
		<div id="header">
			<div class="navbar navbar-fixed-top">
			 <div class="navbar-inner">
			  <div class="container">
			   <a class="brand" href="<?php echo $this->webroot; ?>">Parfait</a>
			  </div>		
			 </div>
			</div>
		</div>

