<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $ID
 * @property string $RUA
 * @property string $BAIRRO
 * @property int $NUMERO
 * @property string $ESTADO
 * @property string $CIDADE
 * @property int $CEP
 * @property int|null $USUARIO_ID
 *
 * @property Usuario $uSUARIO
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RUA', 'BAIRRO', 'NUMERO', 'ESTADO', 'CIDADE', 'CEP'], 'required'],
            [['NUMERO', 'CEP', 'USUARIO_ID'], 'integer'],
            [['RUA', 'BAIRRO', 'ESTADO', 'CIDADE'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'RUA' => 'Rua',
            'BAIRRO' => 'Bairro',
            'NUMERO' => 'Número',
            'ESTADO' => 'Estado',
            'CIDADE' => 'Cidade',
            'CEP' => 'CEP',
            'USUARIO_ID' => 'Usuario ID',
        ];
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
