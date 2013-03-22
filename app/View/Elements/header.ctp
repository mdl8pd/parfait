<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout; ?></title>

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
	//$this->Html->script('parfait-js', array('inline' => false));
?>

<!-- LINKEDIN API -->
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: nup6fe0sq50h
</script>

</head>

<body style="padding: 80px;">

	<div id="container">
		<div id="header">
			<div class="navbar navbar-fixed-top">
			 <div class="navbar-inner">
			  <div class="container">
			   <a class="brand" href="<?php echo $this->webroot; ?>"><?php echo $this->Html->image('parfait-titlehead.png', array('width' => 135, 'height'=>100, 'alt' => 'Parfait')); ?></a>
			   <div class="nav-collapse navbar-responsive-collapse"> 
			   <ul class="nav">
			    <li><a href="<?php echo $this->webroot; ?>pages/about">About</a></li>
			    <li><a href="#">Projects</a></li>
			    <li><a href="<?php echo $this->webroot; ?>pages/resources">Resources</a></li>
			    <?php if($this->Session->read('user_id')) {
				echo '<li><a href="#">Members</a></li>';
			    } ?>
			    <li><a href="#">Contact</a></li>
			   </ul>
			   <ul class="nav pull-right">
				<?php if($this->Session->read('user_id')) { ?>
			     		<li><a href="<?php echo $this->webroot . "users/logout";?>">Logout</a></li>	
				<?php } else { ?>
					<a href="#" id="loginPopover" class="btn btn-primary" data-toggle="popover" >Login</a>
					<?php } ?>
				   </ul>
				   </div>
				  </div>		
				 </div>
				</div>
			</div>

			<script>  
				$(function () { 
					$("#loginPopover").popover({
						content: '<a href="<?php echo $this->webroot . "users/profile"; ?>"><?php echo $this->Html->image('linkedin.png', array('width' => 40, 'height'=>40, 'alt' => 'Linkedin')); ?></a><a href="<?php echo $this->webroot . "users/profile"; ?>"><?php echo $this->Html->image('facebook.png', array('width' => 40, 'height'=>40, 'alt' => 'Facebook')); ?></a><a href="<?php echo $this->webroot . "users/profile"; ?>"><?php echo $this->Html->image('twitter.png', array('width' => 40, 'height'=>40, 'alt' => 'Twitter')); ?></a>',
						placement: 'bottom',
						html: true, 
						template: '<div class="popover" style="width:90px;"><div class="arrow"></div><div class="popover-inner"><div class="popover-content"><p></p></div></div></div>'});  
				});  
			</script> 


	<?php echo $this->Session->flash(); ?>
