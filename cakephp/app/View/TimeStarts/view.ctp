<div class="timeStarts view">
<h2><?php echo __('Time Start'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timeStart['TimeStart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timeStart['User']['name'], array('controller' => 'users', 'action' => 'view', $timeStart['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($timeStart['TimeStart']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($timeStart['TimeStart']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($timeStart['TimeStart']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time Start'), array('action' => 'edit', $timeStart['TimeStart']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time Start'), array('action' => 'delete', $timeStart['TimeStart']['id']), null, __('Are you sure you want to delete # %s?', $timeStart['TimeStart']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Starts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Start'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
