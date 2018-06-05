<?php

use yii\db\Migration;

/**
 * Handles the creation of table `addImage`.
 */
class m180603_165836_create_addImage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','image','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('addImage');
    }
}
