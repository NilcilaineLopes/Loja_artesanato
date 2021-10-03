<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $ID
 * @property string $NOME
 * @property string $DESCRICAO
 * @property float|null $PRECO
 * @property int|null $QUANTIDADE
 *
 * @property Vendasproduto[] $vendasprodutos
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME', 'DESCRICAO'], 'required','message'=>'*Campo obrigatório'],
            [['PRECO'], 'number'], 
            [['QUANTIDADE'], 'integer'],
            [['NOME', 'DESCRICAO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NOME' => 'Nome',
            'DESCRICAO' => 'Descrição',
            'PRECO' => 'Preço',
            'QUANTIDADE' => 'Quantidade',
        ];
    }

    /**
     * Gets query for [[Vendasprodutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendasprodutos()
    {
        return $this->hasMany(Vendasproduto::className(), ['PRODUTOS_ID' => 'ID']);
    }
}
