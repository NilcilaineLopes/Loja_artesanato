<?php

use yii\db\Migration;

/**
 * Class m211016_225509_StatusProduto
 */
class m211016_225509_StatusProduto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    { $this->createTable('STATUSPRODUTO', [ 
        'ID' => $this->primaryKey(), 
        'STATUS' => $this->boolean(), 
        'PRODUTO_ID' => $this->integer(),
    ]);
    $this->addForeignKey('produto_sta', 'STATUSPRODUTO', 'PRODUTO_ID', 'PRODUTO', 'ID', 'RESTRICT');
}

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('produto_sta','PRODUTO');
        $this->dropTable('STATUSPRODUTO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211016_225509_StatusProduto cannot be reverted.\n";

        return false;
    }
    */
}
