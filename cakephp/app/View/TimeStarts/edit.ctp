<div class="timeStarts form">
<?php echo $this->Form->create('TimeStart'); ?>
	<fieldset>
		<legend><?php echo __('Edit Time Start'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('start');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TimeStart.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TimeStart.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Time Starts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
