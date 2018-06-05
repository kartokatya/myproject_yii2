<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180604_201250_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(),
            'last_name'=>$this->string(),
            'email'=>$this->string()->notNull()->unique(),
            'password'=>$this->string(),
            'auth_key'=>$this->string(),
            'access_token'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
