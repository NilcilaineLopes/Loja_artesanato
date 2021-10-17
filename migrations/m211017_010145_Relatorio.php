<?php

use yii\db\Migration;

/**
 * Class m211017_010145_Relatorio
 */
class m211017_010145_Relatorio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    { $this->createTable('RELATORIO', [ 
        'ID' => $this->primaryKey(),
        'VENDA_ID' => $this->integer(), 
    ]);
        $this->addForeignKey('venda_rel', 'RELATORIO', 'VENDA_ID', 'VENDA', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('venda_rel','VENDA');
        $this->dropTable('RELATORIO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211017_010145_Relatorio cannot be reverted.\n";

        return false;
    }
    */
}
