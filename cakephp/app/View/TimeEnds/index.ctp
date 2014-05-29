<div class="timeEnds index">
	<h2><?php echo __('Time Ends'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($timeEnds as $timeEnd): ?>
	<tr>
		<td><?php echo h($timeEnd['TimeEnd']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timeEnd['User']['name'], array('controller' => 'users', 'action' => 'view', $timeEnd['User']['id'])); ?>
		</td>
		<td><?php echo h($timeEnd['TimeEnd']['end']); ?>&nbsp;</td>
		<td><?php echo h($timeEnd['TimeEnd']['created']); ?>&nbsp;</td>
		<td><?php echo h($timeEnd['TimeEnd']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timeEnd['TimeEnd']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timeEnd['TimeEnd']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timeEnd['TimeEnd']['id']), null, __('Are you sure you want to delete # %s?', $timeEnd['TimeEnd']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Time End'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
