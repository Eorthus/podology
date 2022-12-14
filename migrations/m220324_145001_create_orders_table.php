<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m220324_145001_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id'         => $this->primaryKey(),
            'user_id'    => $this->integer(),
            'products'   => $this->text(),
            'status'     => $this->integer(),
            'datetime'   => $this->integer(),
            'totalprice' => $this->integer(),
            'totalqty'   => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
