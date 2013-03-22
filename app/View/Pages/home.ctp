<?php 
	// File from app/View/Elements
	echo $this->element('header');
?>


<div id="top-content" class="row">

	<div class="span5">
		<p>Placeholder logo until we have more resources - I'll make them soon.</p>
		<center><?php echo $this->Html->image('parfait-logo.png', array('width' => 380, 'height'=>380, 'alt' => 'Parfait Logo')); ?></center>
	</div>

	<!-- GOOGLE CALENDAR -->
	<iframe class="span7"  src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=virginia.edu_u8tp5ubljjthoovi65l624s87s%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" style=" border-width:0 " width="600" height="400" frameborder="0" scrolling="no"></iframe>

</div>

<div id="main-content" class="row">
	<!-- This is where we'll have current activities/announcements? Flexible - let me know what you all think would be useful -->
</div>
