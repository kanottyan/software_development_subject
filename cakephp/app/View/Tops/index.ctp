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
    <li><?php echo $this->Html->link(__('新規学生登録'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('学生の編集'), array('controller' => 'users', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('出勤時間の編集'), array('controller' => 'time_starts', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('退勤の編集'), array('controller' => 'time_ends', 'action' => 'index')); ?> </li>

    </div>
</div>

<div class="calender main">
    <div class="toppic">最新の出勤状況</div>
    <div class="now_time"><?php echo '現在時間：'.$nowtime ;?></div>

    <div class= "stats">
        <table border="1">
        <tr>
            <th>名前</th>
            <th>出勤時間</th>
            <th>退勤時間</th>
        </tr>

            <?php $time_start_array = array();?>
            <?php $time_end_array = array(); ?>

            <?php //出勤時間の取得（要リファクタリング）?>
            <?php foreach ($starts as $starts) :?>
                <?php $last_time_in = count($starts['TimeStart'])-1 ?>
                <?php if( empty($starts['TimeStart'])){
                array_push($time_start_array,"未登録");
            }else{
                array_push($time_start_array,$starts['TimeStart'][$last_time_in]['start']);
            }?>
            <?php endforeach; ?>

            <?php //退勤時間の取得（要リファクタリング）?>
            <?php foreach ($ends as $ends) :?>
                <?php $last_time_out = count($ends['TimeEnd'])-1 ?>
                <?php if( empty($ends['TimeEnd'])){
                array_push($time_end_array,"未登録");
            }else{
                array_push($time_end_array,$ends['TimeEnd'][$last_time_out]['end']);
            } ?>
            <?php endforeach; ?>

            <?php //データを表示?>
            <?php foreach ($users as $key => $users) :?>
                <tr>
                    <td><?php echo $users ;?></td>
                    <td><?php echo $time_start_array[$key-1] ;?></td>
                    <td><?php echo $time_end_array[$key-1]; ?></td>
                </tr>

            <?php endforeach; ?>

        </table>
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