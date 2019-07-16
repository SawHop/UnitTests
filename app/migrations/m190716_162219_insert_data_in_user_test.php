<?php

use yii\db\Migration;

/**
 * Class m190716_162219_insert_data_in_user_test
 */
class m190716_162219_insert_data_in_user_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users',[
            'id'=>1,
            'email'=>'test@test.ru',
        ]);

        $this->insert('users',[
            'id'=>2,
            'email'=>'qwe@test.ru',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190716_162219_insert_data_in_user_test cannot be reverted.\n";

        return false;
    }
    */
}
