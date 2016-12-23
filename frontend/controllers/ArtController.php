<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\CArt;
use frontend\models\CArtMmjpg;

/**
 * Description of ArtController
 *
 * @author hdq
 */
class ArtController extends Controller{
    //put your code here
    public function actionIndex($id=1) {
        $art = new CArt();
        $data = $art->queryMongo($id);
        $count = $art->queryCount();
        //$pages = new Pagination(['totalCount'=>$count,'pageSize'=>'2']);
        //var_dump($data);
        return $this->render('index', ['data'=>$data,'count'=>$count,'curr'=>$id]);
    }
    public function actionView($id) {
        $art = new CArt();
        $data = $art->queryDetail($id);
        //var_dump($data);
        return $this->render('view', ['data'=>$data]);

    }
    public function actionIndex2($id=1) {
        $art = new CArtMmjpg();
        $data = $art->queryMongo($id);
        //var_dump($data);
        $count = $art->queryCount();
        //$pages = new Pagination(['totalCount'=>$count,'pageSize'=>'2']);
        //var_dump($data);
        return $this->render('index', ['data'=>$data,'count'=>$count,'curr'=>$id]);
    }
    public function actionView2($id) {
        $art = new CArtMmjpg();
        $data = $art->queryDetail($id);
        //var_dump($data);
        return $this->render('view', ['data'=>$data]);

    }
}
