<?php

namespace app\controllers;

use Yii;
use app\models\EntrateSearch;
use app\models\Entrate;
use app\models\Categorie;
use app\models\ScenarioEntrate;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\Response;

use yii\data\ArrayDataProvider;


class EntrateController extends \yii\web\Controller
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }
    public function actionIndex()
    {
        //prove json
        return $this->render('dataentrate-json');
    }
    public function actionIndex2()
    {
        // carico il model con la funzione di ricerca
        $searchModel = new EntrateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
    // verifico se è una chiamata Ajax che chiamerà la funzione LoadData
    if (Yii::$app->request->isAjax) {
        return $this->renderPartial('index2', ['dataProvider' => $dataProvider]);
    }
        else
        {
            return $this->render('index2', ['dataProvider' => $dataProvider]);
        }
    
    }

    public function actionGetEntrate()
    {
        // Prova 2 conversione dati in json
        $dati = Entrate::find()->all(); // Sostituisci con il model e la query appropriati
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $dati;
    }

   
        public function actionLoadData()
        {
            $searchModel = new EntrateSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            //renderizzo i dati su un partial che poi passerò alla vista principale
            return $this->renderPartial('_gridview', ['dataProvider' => $dataProvider]);
        }

            public function actionCreate()
            {
                //Creo una nuova entrata in questo caso ho usato gli scenario
                $model = new Entrate(['scenario' => ScenarioEntrate::SCENARIO_INSERT]);
                // carico i dati per la dropdown con la funzione separata nel model Categorie
                $categorieList = Categorie::getCategoryList();

                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    
                    $model->save();
                } else {
                    return $this->render('_form', [
                        'model' => $model,
                        'categorieList' => $categorieList,
                    ]);
                }   
            }







    

    

    
    
    
}
