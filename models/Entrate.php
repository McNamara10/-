<?php

namespace app\models;

use app\models\ScenarioEntrate;

use Yii;

/**
 * This is the model class for table "entrate".
 *
 * @property int $id
 * @property string $descrizione
 * @property float|null $importo
 * @property string|null $data
 * @property int|null $fk_categorie
 */
class Entrate extends \yii\db\ActiveRecord
{
    public $categorieList;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrate';
    }

    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descrizione', 'importo', 'data', 'fk_categorie'], 'required', 'on' => ScenarioEntrate::SCENARIO_INSERT],
            ['importo', 'number', 'on' => ScenarioEntrate::SCENARIO_INSERT],
            ['data', 'date', 'on' => ScenarioEntrate::SCENARIO_INSERT],
            ['descrizione', 'string', 'max' => 255, 'on' => ScenarioEntrate::SCENARIO_INSERT],
            
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
            'importo' => 'Importo',
            'data' => 'Data',
        ];
    }

    public function getCategoria()
{
    // Definisci la relazione inversa uno-a-molti
    return $this->hasOne(Categoria::className(), ['fk_categorie' => 'id']);
}
}
