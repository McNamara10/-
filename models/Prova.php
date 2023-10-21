<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prova".
 *
 * @property int $id
 * @property string $titolo
 * @property int $descrizione
 */
class Prova extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prova';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titolo'], 'required'],
            [['descrizione'], 'integer'],
            [['titolo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titolo' => 'Titolo',
            'descrizione' => 'Descrizione',
        ];
    }
}
