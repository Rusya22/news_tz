<?php

namespace  app\models;

use yii\base\Model;

class Singup extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
        [['username','email','password',],'required'],
        ['email','email'],
    ];
    }
    public function Singup() {
        $user = new Users();
        $user->username=$this->username;
        $user->email=$this->email;
        $user->password=$this->password;
        return $user->save();
    }
}