<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statusproduto".
 *
 * @property int $ID
 * @property int|null $STATUS
 * @property int|null $PRODUTO_ID
 *
 * @property Produto $pRODUTO
 */
class Statusproduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statusproduto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO_ID'], 'integer'],
            [['STATUS'], 'boolean'],
            [['STATUS'], 'required','message'=>'1 = Disponivel 0 = Não disponivel'],

            [['PRODUTO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['PRODUTO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'STATUS' => 'Status',
            'PRODUTO_ID' => 'Produto  ID',
        ];
    }

    /**
     * Gets query for [[PRODUTO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPRODUTO()
    {
        return $this->hasOne(Produto::className(), ['ID' => 'PRODUTO_ID']);
    }
}
