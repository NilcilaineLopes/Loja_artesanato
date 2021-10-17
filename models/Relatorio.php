<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relatorio".
 *
 * @property int $ID
 * @property int|null $VENDA_ID
 */
class Relatorio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relatorio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['VENDA_ID'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'VENDA_ID' => 'Venda  ID',
        ];
    }
}
