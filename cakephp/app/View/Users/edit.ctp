<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('gender');
		echo $this->Form->input('grade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Time Ends'), array('controller' => 'time_ends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time End'), array('controller' => 'time_ends', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Starts'), array('controller' => 'time_starts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Start'), array('controller' => 'time_starts', 'action' => 'add')); ?> </li>
	</ul>
</div>
