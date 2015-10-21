<?php

/*
 * Payment merchants extension for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-merchant
 * @package   yii2-merchant
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\yii2\merchant\controllers;

class PayController extends \yii\web\Controller
{
    public function actions()
    {
        return [
            'confirm' => [
                'class' => 'hiqdev\yii2\merchant\actions\ConfirmAction',
            ],
            'success' => [
                'class' => 'hiqdev\yii2\merchant\actions\SuccessAction',
            ],
            'failure' => [
                'class' => 'hiqdev\yii2\merchant\actions\FailureAction',
            ],
        ];
    }
}