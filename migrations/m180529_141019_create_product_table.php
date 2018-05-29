<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180529_141019_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(),
            'name'=>$this->string()->notNull(),
            'description'=>$this->text(),
            'content'=>$this->text(),
            'active'=>$this->boolean(),
            'price'=>$this->integer(),
            'old_price'=>$this->integer()->unsigned()
        ]);
        $this->addForeignKey('product_to_cat','product','category_id','category','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
