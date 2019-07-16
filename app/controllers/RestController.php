<?php
/**
 * Created by PhpStorm.
 * User: SawHo
 * Date: 16.07.2019
 * Time: 23:10
 */

namespace app\controllers;


use app\models\UsersTest;
use yii\rest\ActiveController;

class RestController extends ActiveController
{
    public $modelClass = UsersTest::class;
}