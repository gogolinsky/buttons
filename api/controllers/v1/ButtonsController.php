<?php

namespace api\controllers\v1;

use common\models\Button;
use yii\console\Controller;

class ButtonsController extends Controller
{
    public function actionIndex()
    {
        $buttons = Button::find()->orderBy(['id' => SORT_ASC])->all();

        return array_map(function(Button $button) {
            return [
                'id' => $button->id,
                'type' => $button->type,
                'value' => $button->value,
            ];
        }, $buttons);
    }
}