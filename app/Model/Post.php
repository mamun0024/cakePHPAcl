<?php
/**
 * Created by PhpStorm.
 * User: BS108
 * Date: 7/16/2018
 * Time: 3:33 PM
 */

App::uses('AppModel', 'Model');

class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}