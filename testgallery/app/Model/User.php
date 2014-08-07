<?php
class User extends AppModel {
    public function checkUsernamePassword($userName, $password, $type) {

        $userId = $this->find('first',
                   array('conditions' => array('User.username' => $userName, 'User.password' => $password),
                   'fields' => array('id')
                  ));
        if($type == "register"){
            if(!empty($userId)){
                $sendUserData = array('error' => 'user with same username exist');
            } else{
                $data = array('');
                $userId = $this->create();
            }
        }
        if ($userId) {
            return array('userId' => $userId['User']['id']);
        }
        return array('error' => 'Not Found');
    }
}