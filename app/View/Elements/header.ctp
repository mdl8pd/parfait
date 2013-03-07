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
			   <a class="brand" href="<?php echo $this->webroot; ?>"><?php echo $this->Html->image('parfait-titlehead.png', array('width' => 135, 'height'=>100, 'alt' => 'Parfait')); ?></a>
			   <ul class="nav">
			    <li><a href="<?php echo $this->webroot; ?>pages/about">About</a></li>
			    <li><a href="#">Projects</a></li>
			    <li><a href="#">Resources</a></li>
			    <li><a href="#">Contact</a></li>
			   </ul>
			  </div>		
			 </div>
			</div>
		</div>

