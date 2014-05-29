<div class="timeEnds view">
<h2><?php echo __('Time End'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timeEnd['TimeEnd']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timeEnd['User']['name'], array('controller' => 'users', 'action' => 'view', $timeEnd['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($timeEnd['TimeEnd']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($timeEnd['TimeEnd']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($timeEnd['TimeEnd']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time End'), array('action' => 'edit', $timeEnd['TimeEnd']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time End'), array('action' => 'delete', $timeEnd['TimeEnd']['id']), null, __('Are you sure you want to delete # %s?', $timeEnd['TimeEnd']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Ends'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time End'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
