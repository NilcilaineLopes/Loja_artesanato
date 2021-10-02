<?php

use yii\db\Migration;

/**
 * Class m211002_224019_VendasProduto
 */
class m211002_224019_VendasProduto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    
    { $this->createTable('VENDASPRODUTO', [ 
        'ID' => $this->primaryKey(), 
        'CATEGORIA' => $this->string()->notNull(), 
        'QTD' => $this->integer()->notNull(), 
        'USUARIO_ID' => $this->integer(), 
        'DATA_VENDA' => $this->date(),
        'PRODUTOS_ID' => $this->integer(),
     ]);
        $this->addForeignKey('usuario_fk', 'VENDASPRODUTO', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT');
        $this->addForeignKey('produto_fk', 'VENDASPRODUTO', 'PRODUTOS_ID', 'PRODUTO', 'ID', 'RESTRICT'); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_fk','USUARIO');
        $this->dropForeignKey('produto_fk','PRODUTO');
        $this->dropTable('VENDASPRODUTO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211002_224019_VendasProduto cannot be reverted.\n";

        return false;
    }
    */
}
