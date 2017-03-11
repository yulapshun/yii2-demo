<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use app\models\User;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function checkAccess($action, $model = null, $params = [])
    {
        return true;
    }
}
