<?php

    use yii\db\Migration;

    /**
     * Handles the creation of table `{{%target}}`.
     */
    class m200505_122221_createTargetTable extends Migration
    {
        /**
         * {@inheritdoc}
         */
        public function safeUp()
        {
            $this->createTable('{{%target}}', [
                    'id' => $this->primaryKey(),
                    'name' => $this->string(100)->null(),
                    'enable' => $this->boolean()->null()->defaultValue(true),
            ]);
        }

        /**
         * {@inheritdoc}
         */
        public function safeDown()
        {
            $this->dropTable('{{%target}}');
        }
    }
