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
    <div class="toppic">最新の出勤状況</div>
    <div class="toppic"><?php echo '現在時間：'.$nowtime ;?></div>

    <div class= "col3">

        <div class= "column1">
        <?php foreach ($users as $users) :?>
            <?php echo $users; ?><br>
        <?php endforeach; ?>
        </div>

        <div class= "column2">
        <?php //出勤時間の取得?>
        <?php foreach ($starts as $starts) :?>
        <?php $last_time_in = count($starts['TimeStart'])-1 ?>
        <?php echo $starts['TimeStart'][$last_time_in]['start'] ;?></br>
        <?php endforeach; ?>
        </div>

        <div class= "column3">
            <?php //退勤時間の取得?>
            <?php foreach ($ends as $ends) :?>
            <?php $last_time_out = count($starts['TimeStart'])-1 ?>
            <?php echo $ends['TimeEnd'][$last_time_out]['end'] ;?></br>
            <?php endforeach; ?>
        </div>

    </div>
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