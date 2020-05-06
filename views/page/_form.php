<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, Yii::t('app', 'h1'))->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, Yii::t('app', 'content'))->textarea(['rows' => 6]) ?>

    <?= $form->field($model, Yii::t('app', 'alias'))->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, Yii::t('app', 'title'))->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, Yii::t('app', 'description'))->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, Yii::t('app', 'keywords'))->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, Yii::t('app', 'date_create'))->textInput() ?>

    <?= $form->field($model, Yii::t('app', 'publish_at'))->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php
    $js = <<< JS
        $('#page-h1').on('focusout',function(){
            $.ajax({
                url: '/pages/page/transliteration',
                type: 'POST',
                data: { translation: $('#page-h1').val()},
                success: function(res){
                    console.log(res);
                    $('#page-alias').val(res);
                },
                error: function(){
                    alert('Error!');
                }
            });
        });
        JS;

    $this->registerJs($js, yii\web\View::POS_END, 'generate-alias');
    ?>
</div>

