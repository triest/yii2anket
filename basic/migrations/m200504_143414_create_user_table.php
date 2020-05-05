<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200504_143414_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username'=>$this->string(100)->null(),
            'password'=>$this->string(100)->null(),
            'name'=>$this->string(100)->null(),
            'email'=>$this->string(100)->null(),
            'age'=>$this->integer(100)->null(),
            'height'=>$this->integer(100)->null(),
            'weight'=>$this->integer(100)->null(),
            'sex'=>$this->string(10)->null(),
            'description'=>$this->string(500)->null(),
            'status'=>$this->string(500)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
