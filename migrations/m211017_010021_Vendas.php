<?php

use yii\db\Migration;

/**
 * Class m211017_010021_Vendas
 */
class m211017_010021_Vendas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    { $this->createTable('VENDAS', [ 
        'ID' => $this->primaryKey(), 
        'QTD' => $this->integer()->notNull(), 
        'DATA_VENDA' => $this->date(),
        'VALOR'  => $this->float(),
        'USUARIO_ID' => $this->integer(), 
        'PRODUTOS_ID' => $this->integer(),
     ]);
        $this->addForeignKey('usuario_fk', 'VENDAS', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT');
        $this->addForeignKey('produto_fk', 'VENDAS', 'PRODUTOS_ID', 'PRODUTO', 'ID', 'RESTRICT'); 
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_fk','USUARIO');
        $this->dropForeignKey('produto_fk','PRODUTO');
        $this->dropTable('VENDAS');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211017_010021_Vendas cannot be reverted.\n";

        return false;
    }
    */
}
