<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pemohon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemohon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'id_gender')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt_rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kabkota')->textInput() ?>

    <?= $form->field($model, 'id_kecamatan')->textInput() ?>

    <?= $form->field($model, 'id_desakelurahan')->textInput() ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
