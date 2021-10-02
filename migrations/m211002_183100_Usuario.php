<?php

use yii\db\Migration;

/**
 * Class m211002_183100_Usuario
 */
class m211002_183100_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('USUARIO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string()->notNull(),
            'CPF' => $this->string()->notNull(),
            'LOGIN' => $this->string()->notNull(),
            'SENHA' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('USUARIO');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211002_183100_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
