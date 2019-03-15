<?php

use yii\db\Migration;

/**
 * Class m190315_182136_products
 */
class m190315_182136_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=INNODB';
        }
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'price' =>$this->integer()->notNull(),
//            'category'=>$this->
            'body' => $this->text()->notNull(),

        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');

        echo "m190315_182136_products cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190315_182136_products cannot be reverted.\n";

        return false;
    }
    */
}
