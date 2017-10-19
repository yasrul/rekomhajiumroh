<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\PemohonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemohon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'id_gender') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'rt_rw') ?>

    <?php // echo $form->field($model, 'id_kabkota') ?>

    <?php // echo $form->field($model, 'id_kecamatan') ?>

    <?php // echo $form->field($model, 'id_desakelurahan') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'no_ktp') ?>

    <?php // echo $form->field($model, 'file_ktp') ?>

    <?php // echo $form->field($model, 'file_kk') ?>

    <?php // echo $form->field($model, 'file_photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
