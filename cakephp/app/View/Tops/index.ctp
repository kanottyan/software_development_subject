<div id="sidebar">

    <div class="timeStarts left">
        <?php echo $this->Form->create('TimeStart'); ?>
            <fieldset>
                <legend><?php echo __('出勤時間'); ?></legend>
            <?php
                echo $this->Form->input('user_id');
                echo $this->Form->input('start');
            ?>
            </fieldset>
        <?php echo $this->Form->submit('出勤しました', array('name' => 'in')); ?>
        <?php echo $this->Form->end(); ?>
    </div>

    <hr>

    <div class="timeEnds left " style="margin-top: 15px;">
        <?php echo $this->Form->create('TimeEnd'); ?>
            <fieldset>
                <legend><?php echo __('退勤時間'); ?></legend>
            <?php
                echo $this->Form->input('user_id');
                echo $this->Form->input('end');
            ?>
            </fieldset>
        <?php echo $this->Form->submit('退勤しました', array('name' => 'out')); ?>
        <?php echo $this->Form->end(); ?>
    </div>

    <div class="config">
        編集画面へ
    <li><?php echo $this->Html->link(__('学生の編集'), array('controller' => 'users', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('出勤時間の編集'), array('controller' => 'time_starts', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('退勤の編集'), array('controller' => 'time_ends', 'action' => 'index')); ?> </li>

    </div>
</div>

<div class="calender main">
    <div class="toppic">本日の出勤状況</div>

<?php foreach ($users as $users){
    echo "$users";
}

?>
</div>



<!--
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Time Starts'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
-->