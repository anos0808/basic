<?php

use yii\db\Migration;

/**
 * Class m200403_194621_test
 */
class m200403_194621_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('parenttest', [
            'id' => 'pk',
  
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
$this->dropTable('parenttest');

  
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200403_194621_test cannot be reverted.\n";

        return false;
    }
    */
}
