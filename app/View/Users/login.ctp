<?php echo $this->element('header'); 
//debug($this->Session);
?>

<div class="row">

	<div class="span4" id="linkedin-login">
		<script type="IN/Login" data-onAuth="onLinkedInAuth"></script>
	</div>
	<div class="span4" id="facebook-login">
	<?php debug($user_profile); ?>
	<!--	<fb:login-button autologoutlink="true" size="large"></fb:login-button> -->
	<?php 
		//$facebook->api(‘/me’);
		//debug($facebook_user);
	?>
	</div>
	<div class="span4" id="twitter-login">
	</div>
</div>
