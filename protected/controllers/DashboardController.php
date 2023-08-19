<?php

class DashboardController extends Controller{
    public $layout='//layouts/column2';

    public function actionIndex(){
        $ts = Yii::app()->db->createCommand()->select("YEAR(tglPembayaran) AS tahun, SUM(jumlahPembayaran) AS total")->from('pembayaran')->group("YEAR(tglPembayaran)")->queryAll();
        $this->render('index', compact("ts"));
    }
}