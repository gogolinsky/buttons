<?php

use yii\db\Migration;

class m190125_222018_seed_table_buttons extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%buttons}}', ['type' => 'button', 'value' => 'Click me', 'secret_value' => 'Foo']);
        $this->insert('{{%buttons}}', ['type' => 'submit', 'value' => 'Push me', 'secret_value' => 'Bar']);
        $this->insert('{{%buttons}}', ['type' => 'reset', 'value' => 'Press me', 'secret_value' => 'Baz']);
    }

    public function safeDown()
    {
        echo "m190125_222018_seed_table_buttons cannot be reverted.\n";

        return false;
    }
}
