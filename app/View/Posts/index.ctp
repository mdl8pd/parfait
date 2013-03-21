<!-- File: /app/View/Posts/index.ctp -->
<?php 
	echo $this->element('header');
?>

<?php
	if (!$this->Paginator->hasPrev())
	{
		echo $this->element('home_header');
	}
	else
	{
		$pageNumber = $this->Paginator->current();
		echo "<h2>Announcements - page $pageNumber</h2>";
	}
?>

<div id="main-content" class="row">
<table>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td>
			<div class="well well-large span9">
				<h3><?php echo $post['Post']['title']; ?></h3>
				<?php echo $post['Post']['body']; ?>
				<br><br>
				<em><?php echo $this->Time->format('F jS, Y', $post['Post']['created']); ?></em>
				<br><br>
				<?php echo $this->Form->postLink(
				'<i class="icon-trash"></i>',
                array('action' => 'delete', $post['Post']['id']),
	            array('confirm' => 'Are you sure you want to delete this?', 'escape' => false));
				?>
				<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit',
				$post['Post']['id'],
				$this->Paginator->current()),
				array('escape' => false)); ?>
			</div>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>

<div class="row-fluid">
<ul class="pager">
	<li>
		<?php
		if($this->Paginator->hasPrev())
		{
			//echo '<a href="#">Newer</a>';
			echo $this->Paginator->prev('&larr; Newer', array('escape' => false), null, null);
		}
		?>
	</li>
	<li>
		<?php
		if($this->Paginator->hasNext())
		{
			//echo '<a href="#">Older</a>';
			echo $this->Paginator->next('Older &rarr;', array('escape' => false), null, null);
		}
		?>
	</li>

</ul>
</div>
</div>



<?php
	echo $this->element('footer');
?>
