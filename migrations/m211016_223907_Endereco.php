<?php

use yii\db\Migration;

/**
 * Class m211016_223907_Endereco
 */
class m211016_223907_Endereco extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()

    { $this->createTable('ENDERECO', [ 
        'ID' => $this->primaryKey(), 
        'RUA' => $this->string()->notNull(), 
        'BAIRRO' => $this->string()->notNull(),  
        'NUMERO' => $this->integer()->notNull(), 
        'ESTADO' => $this->string()->notNull(), 
        'CIDADE' => $this->string()->notNull(), 
        'CEP'=> $this->integer()->notNull(),  
        'USUARIO_ID' => $this->integer(),    
    ]);
        $this->addForeignKey('usuario_fk', 'ENDERECO', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT');
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_fk','USUARIO');
        $this->dropTable('ENDERECO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211016_223907_Endereco cannot be reverted.\n";

        return false;
    }
    */
}
