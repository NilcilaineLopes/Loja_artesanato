<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendasproduto".
 *
 * @property int $ID
 * @property string $CATEGORIA
 * @property int $QTD
 * @property int|null $USUARIO_ID
 * @property string|null $DATA_VENDA
 * @property int|null $PRODUTOS_ID
 *
 * @property Produto $pRODUTOS
 * @property Usuario $uSUARIO
 */
class Vendasproduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendasproduto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CATEGORIA', 'QTD'], 'required'],
            [['QTD', 'USUARIO_ID', 'PRODUTOS_ID'], 'integer'],
            [['DATA_VENDA'], 'safe'],
            [['CATEGORIA'], 'string', 'max' => 255],
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
            'CATEGORIA' => 'Categoria',
            'QTD' => 'Quantidade de Produto',
            'USUARIO_ID' => 'Usuário  ID',
            'DATA_VENDA' => 'Data  Venda',
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
