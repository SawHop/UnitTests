<?php

use yii\db\Migration;

/**
 * Class m190711_145614_create_foreign_key
 */
class m190711_145614_create_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post','user_id',$this->integer()->notNull());

        $this->addForeignKey('activity_userFK','post','user_id',
            'users','id','CASCADE','CASCADE');

        $this->createIndex('usersEmailInd','users','email',true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('activity_userFK','post');
        $this->dropColumn('post','user_id');
        $this->dropIndex('usersEmailInd','users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190711_145614_create_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
