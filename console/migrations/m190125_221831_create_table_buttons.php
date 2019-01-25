<?php

use yii\db\Migration;

class m190125_221831_create_table_buttons extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%buttons}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string(10)->notNull(),
            'value' => $this->string(255)->defaultValue(null),
            'secret_value' => $this->string(255)->defaultValue(null),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%buttons}}');
    }
}
