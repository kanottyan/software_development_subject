<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade'); ?></dt>
		<dd>
			<?php echo h($user['User']['grade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Ends'), array('controller' => 'time_ends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time End'), array('controller' => 'time_ends', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Starts'), array('controller' => 'time_starts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Start'), array('controller' => 'time_starts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Time Ends'); ?></h3>
	<?php if (!empty($user['TimeEnd'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['TimeEnd'] as $timeEnd): ?>
		<tr>
			<td><?php echo $timeEnd['id']; ?></td>
			<td><?php echo $timeEnd['user_id']; ?></td>
			<td><?php echo $timeEnd['end']; ?></td>
			<td><?php echo $timeEnd['created']; ?></td>
			<td><?php echo $timeEnd['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'time_ends', 'action' => 'view', $timeEnd['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'time_ends', 'action' => 'edit', $timeEnd['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'time_ends', 'action' => 'delete', $timeEnd['id']), null, __('Are you sure you want to delete # %s?', $timeEnd['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time End'), array('controller' => 'time_ends', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Time Starts'); ?></h3>
	<?php if (!empty($user['TimeStart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['TimeStart'] as $timeStart): ?>
		<tr>
			<td><?php echo $timeStart['id']; ?></td>
			<td><?php echo $timeStart['user_id']; ?></td>
			<td><?php echo $timeStart['start']; ?></td>
			<td><?php echo $timeStart['created']; ?></td>
			<td><?php echo $timeStart['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'time_starts', 'action' => 'view', $timeStart['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'time_starts', 'action' => 'edit', $timeStart['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'time_starts', 'action' => 'delete', $timeStart['id']), null, __('Are you sure you want to delete # %s?', $timeStart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time Start'), array('controller' => 'time_starts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
