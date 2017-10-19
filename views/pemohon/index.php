<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PemohonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemohons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemohon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pemohon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'tempat_lahir',
            'tgl_lahir',
            'id_gender',
            // 'alamat',
            // 'rt_rw',
            // 'id_kabkota',
            // 'id_kecamatan',
            // 'id_desakelurahan',
            // 'pekerjaan',
            // 'no_ktp',
            // 'file_ktp',
            // 'file_kk',
            // 'file_photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
