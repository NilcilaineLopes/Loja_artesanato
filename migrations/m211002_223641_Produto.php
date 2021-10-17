<?php

use yii\db\Migration;

/**
 * Class m211002_223641_Produto
 */
class m211002_223641_Produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('PRODUTO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string()->notNull(),
            'CATEGORIA' => $this->string()->notNull(),
            'DESCRICAO' => $this->string()->notNull(),
            'PRECO' => $this->float(),
            'QUANTIDADE' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('PRODUTO');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211002_223641_Produto cannot be reverted.\n";

        return false;
    }
    */
}
