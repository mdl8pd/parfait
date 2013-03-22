<?php echo $this->element('header'); ?>

<div class="row">

	<?php 
                if($this->Session->read('login_type') == 'linkedin') {
                        echo '<div id="linkedin">';
			echo '<script type="IN/Login" data-onAuth="onLinkedInAuth"></script>';
                        echo '</div>';
                }

		else if($this->Session->read('login_type') == 'facebook') { ?>
			
			<div id="facebook">
				<img class="img-circle" src="http://graph.facebook.com/<? echo $this->Session->read('user_profile.id'); ?>/picture?type=large" />
				<h1><?php echo $this->Session->read('user_profile.name'); ?></h1>
				<?php echo $this->Session->read('user_profile.birthday'); ?>
			</div>
		
			<?php //$facebook->api(‘/me’);
			debug($this->Session->read('user_profile'));
		}

                else if($this->Session->read('login_type') == 'twitter') {
                        echo '<div id="twitter">';
                        echo '</div>';
                }
	?>
</div>
