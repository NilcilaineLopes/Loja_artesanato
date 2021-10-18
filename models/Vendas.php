<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendas".
 *
 * @property int $ID
 * @property int $QTD
 * @property string|null $DATA_VENDA
 * @property float|null $VALOR
 * @property int|null $USUARIO_ID
 * @property int|null $PRODUTOS_ID
 *
 * @property Produto $pRODUTOS
 * @property Usuario $uSUARIO
 */
class Vendas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['QTD'], 'required'],
            [['QTD', 'USUARIO_ID', 'PRODUTOS_ID'], 'integer'],
            [['DATA_VENDA'], 'safe'],
            [['VALOR'], 'number'],
            [['PRODUTOS_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['PRODUTOS_ID' => 'ID']],
            [['USUARIO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['USUARIO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'QTD' => 'Quantidade',
            'DATA_VENDA' => 'Data da Venda',
            'VALOR' => 'Valor',
            'USUARIO_ID' => 'Usuario  ID',
            'PRODUTOS_ID' => 'Produtos  ID',
        ];
    }

    /**
     * Gets query for [[PRODUTOS]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPRODUTOS()
    {
        return $this->hasOne(Produto::className(), ['ID' => 'PRODUTOS_ID']);
    }

    /**
     * Gets query for [[USUARIO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIO()
    {
        return $this->hasOne(Usuario::className(), ['ID' => 'USUARIO_ID']);
    }
}
