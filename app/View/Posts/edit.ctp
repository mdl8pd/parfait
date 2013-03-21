<?php 
	echo $this->element('header');
?>

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '10', 'cols' => 50));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');
?>

<?php
	echo $this->element('footer');
?>
