<?php

use yii\db\Migration;

class m170311_073248_add_user_table extends Migration
{

    public function safeUp()
    {
        $this->createTable(
            'user',
            [
                'id' => $this->primaryKey(),
                'username' => $this->string(255),
                'password' => $this->string(255),
                'email' => $this->string(255),
                'status' => $this->smallInteger()->defaultValue(1),
                'updated_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP'
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('user');
    }
}
