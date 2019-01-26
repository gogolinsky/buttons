<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $type
 * @property string $value
 * @property string $secret_value
 */
class Button extends ActiveRecord
{
    const TYPE_BUTTON = 'button';
    const TYPE_SUBMIT = 'submit';
    const TYPE_RESET = 'reset';

    public static function tableName()
    {
        return '{{%buttons}}';
    }

    public function rules()
    {
        return [
            ['id', 'integer'],
            ['type', 'string', 'max' => 10],
            [['value', 'secret_value'], 'string', 'max' => 255],
            ['type', 'in', 'range' => [self::TYPE_BUTTON, self::TYPE_SUBMIT, self::TYPE_RESET]],
        ];
    }

    public function fields()
    {
        return [
            'id' => 'id',
            'type' => 'type',
            'value' => 'value',
        ];
    }
}
