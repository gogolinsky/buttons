<?php

namespace api\controllers\v1;

use common\models\Button;
use yii\filters\VerbFilter;
use yii\web\Controller;

class ButtonsController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class' => VerbFilter::class,
                'actions' => [
                    'index' => ['GET'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return Button::find()->all();
    }
}