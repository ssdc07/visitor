<?php

namespace kouosl\visitor\controllers\api;


class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    public function actionIndex(){
        return ['status' => 1, 'action' => 'index','controller' => 'default'];
    }

}