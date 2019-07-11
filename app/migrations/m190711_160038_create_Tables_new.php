<?php

use yii\db\Migration;

/**
 * Class m190711_160038_create_Tables_new
 */
class m190711_160038_create_Tables_new extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('new',[
            'title'=>$this->string(150),
            'email'=>$this->string(150),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
     $this->dropTable('new');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190711_160038_create_Tables_new cannot be reverted.\n";

        return false;
    }
    */
}
