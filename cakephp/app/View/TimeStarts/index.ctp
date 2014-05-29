<div class="timeStarts index">
	<h2><?php echo __('Time Starts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($timeStarts as $timeStart): ?>
	<tr>
		<td><?php echo h($timeStart['TimeStart']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timeStart['User']['name'], array('controller' => 'users', 'action' => 'view', $timeStart['User']['id'])); ?>
		</td>
		<td><?php echo h($timeStart['TimeStart']['start']); ?>&nbsp;</td>
		<td><?php echo h($timeStart['TimeStart']['created']); ?>&nbsp;</td>
		<td><?php echo h($timeStart['TimeStart']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timeStart['TimeStart']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timeStart['TimeStart']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timeStart['TimeStart']['id']), null, __('Are you sure you want to delete # %s?', $timeStart['TimeStart']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Time Start'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
