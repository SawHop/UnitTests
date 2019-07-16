<?php
/**
 * Created by PhpStorm.
 * User: SawHo
 * Date: 15.07.2019
 * Time: 23:13
 */

namespace app\models;


use yii\base\Model;

class About extends Model
{

    public $verifyCode;
    public $name;
    public $email;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
//            [['name', 'email'], 'required'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

}