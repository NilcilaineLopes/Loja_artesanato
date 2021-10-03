<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $ID
 * @property string $NOME
 * @property string $CPF
 * @property string $LOGIN
 * @property string $SENHA
 *
 * @property Vendasproduto[] $vendasprodutos
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME', 'CPF', 'LOGIN', 'SENHA'], 'required','message'=>'*Campo obrigatório'],
            [['NOME', 'LOGIN', 'SENHA'], 'string', 'max' => 255],
            [['CPF'],'string', 'max' => 13],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'id',
            'NOME' => 'Nome',
            'CPF' => 'Cpf',
            'LOGIN' => 'Login',
            'SENHA' => 'Senha',
        ];
    }

    /**
     * Gets query for [[Vendasprodutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendasprodutos()
    {
        return $this->hasMany(Vendasproduto::className(), ['USUARIO_ID' => 'ID']);
    }
}
