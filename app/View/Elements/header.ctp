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
					<a href="#loginModal" role="button" class="btn btn-primary" data-toggle="modal">Login</a>
	 		   	<?php } ?>
			   </ul>
			   </div>
			  </div>		
			 </div>
			</div>
		</div>




		<!-- LOGIN MODAL -->	
		<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                	<div class="modal-header">
                        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="loginModalLabel">Login</h3>
                        </div>
                        <div class="modal-body">
                        	<a href="<?php echo $this->webroot . "users/profile";?>">FB Login</a>
                        </div>
                        <div class="modal-footer">
                        	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
               	</div>  
	<?php echo $this->Session->flash(); ?>
