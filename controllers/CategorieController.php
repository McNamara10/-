<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use app\models\Categorie;
use yii\web\NotFoundHttpException;

class CategorieController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Creates a new Admin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
       
        $model = new Categorie();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Categoria inserita con successo.');
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionView($id)
    {
        $categories = Categorie::findOne($id);
            if ($categories === null) {
                throw new NotFoundHttpException;
            }
            return $this->render('view', ['categories'=> $categories]);
    }

    



    
}
