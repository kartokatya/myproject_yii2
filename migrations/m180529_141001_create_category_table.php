<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180529_141001_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255),
            'title'=>$this->string(),
            'content'=>$this->text(),
            'active'=>$this->boolean()->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
