<?php

use yii\db\Migration;

/**
 * Class m200508_132840_create_table_tasks
 */
class m200508_132840_create_table_tasks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tasks}}',[
            'id'=>$this->primaryKey(),
            'from_user_id' => $this->integer(),
            'to_user_id' => $this->integer(),
            'text' => $this->text(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tasks}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200508_132840_create_table_tasks cannot be reverted.\n";

        return false;
    }
    */
}
