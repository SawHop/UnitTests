<?php

use yii\db\Migration;

/**
 * Class m190711_161643_add_primaryKey_new
 */
class m190711_161643_add_primaryKey_new extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addPrimaryKey('id','new','title');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('id', 'new');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190711_161643_add_primaryKey_new cannot be reverted.\n";

        return false;
    }
    */
}
