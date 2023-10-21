<?php
namespace app\models;

use Yii;

// models/EntrateSearch.php
class EntrateSearch extends Entrate
{
    
    public function search($params)
    {
        $query = Entrate::find();

        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        return $dataProvider;
    }
}