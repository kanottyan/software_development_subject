<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php echo $this->Form->input('name'); ?>

	<?php echo $this->Form->input('gender',array(
			'type' => 'radio',
			'options' => $gender_options,
			'legend' => 'Gender',
			 ));
		?>
	<?php echo $this->Form->input('grade',array(
			'type' => 'select',
			'options' => $grade_options,
			'legend' => 'Grade',
			 ));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Time Ends'), array('controller' => 'time_ends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time End'), array('controller' => 'time_ends', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Starts'), array('controller' => 'time_starts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Start'), array('controller' => 'time_starts', 'action' => 'add')); ?> </li>
	</ul>
</div>
