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



        //出勤時間の取得
        $time_users_lastin = array();
        $test = $this->User->getUsersNameSrattEnd();
        foreach ($test as $test){
            if( empty($test['TimeStart'][0]['start'])){
                array_push($time_users_lastin,"未登録");
            }else{
                array_push($time_users_lastin,$test['TimeStart'][0]['start']);
            }
        }

        //退勤時間の登録
        $time_users_lastout = array();
        $test = $this->User->getUsersNameSrattEnd();
        foreach ($test as $test){
            if( empty($test['TimeEnd'][0]['end'])){
                array_push($time_users_lastout,"未登録");
            }else{
                array_push($time_users_lastout,$test['TimeEnd'][0]['end']);
            }
        }

        $users = $this->User->find('list');
        $starts = $this->TimeStart->User->find('all',array(
            ));
        $ends = $this->TimeEnd->User->find('all');
        $nowtime = date("Y-m-d H:i:s");
        $this->set(compact('users','starts','ends','nowtime','test','time_users_lastin','time_users_lastout'));



    }


}