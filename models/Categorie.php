<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorie".
 *
 * @property int $id
 * @property string $descrizione
 */
class Categorie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categorie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descrizione'], 'required'],
            [['descrizione'], 'unique'],
            [['descrizione'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descrizione' => 'Descrizione',
        ];
    }
    public function getEntrate()
{
    // Imposta la relazione uno a molti
    return $this->hasMany(Entrata::className(), ['id' => 'fk_categorie']);
}

    public static function getCategoryList()
    {
        return self::find()->select('descrizione','id')->indexBy('id')->column();
    }

}
