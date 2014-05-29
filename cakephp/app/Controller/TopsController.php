<?php

class TopsController extends AppController{
    public $name = 'Tops';
    public $uses = array( 
        'User',
        'TimeStart',
        'TimeEnd'
    );

    public $helpers = array(
        'Html',
        'Form',
    );

    public function index() {
        if ($this->request->is('post') || $this->request->is('put')) {
            if(isset($this->request->data['in'])){
            //出勤時間の記録
                $this->TimeStart->create();
                    if ($this->TimeStart->save($this->request->data)) {
                        $this->Session->setFlash(__('出勤時間を登録しました'));
                        return $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The time start could not be saved. Please, try again.'));
                    }
            }
            if(isset($this->request->data['out'])){
                //退勤時間の記録
                $this->TimeEnd->create();
                if ($this->TimeEnd->save($this->request->data)) {
                    $this->Session->setFlash(__('退勤時間を登録しました'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The time end could not be saved. Please, try again.'));
                }
            }
        }
        $users = $this->User->find('list');
        $starts = $this->TimeStart->User->find('all',array(
            ));
        $ends = $this->TimeEnd->User->find('all');
        $nowtime = date("Y-m-d H:i:s");

        $this->set(compact('users','starts','ends','nowtime','test'));
        //$count_start_times = $this ->
        //$count_end_times =


    }


}