<?php

use yii\db\Migration;

/**
 * Class m190711_142152_createTablesUsers
 */
class m190711_142152_createTablesUsers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(150),
            'email'=>$this->string(150),
            'date_created'=>$this->timestamp()->notNull()
                ->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->createTable('users',[
            'id'=>$this->primaryKey(),
            'email'=>$this->string(150)->notNull(),
            'date_created'=>$this->timestamp()->notNull()
                ->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
        $this->dropTable('post');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190711_142152_createTablesUsers cannot be reverted.\n";

        return false;
    }
    */
}
