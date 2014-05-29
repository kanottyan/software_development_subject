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
        $users = $this->TimeStart->User->find('list');
        $this->set(compact('users'));

        //学生の1日の出勤時間を表示するシステム
    }


    public function view($id = null){
    }
    public function add(){
    }
    public function edit($id = null){
    }

    public function delete($id){
    }
}