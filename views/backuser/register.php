<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BackendUsers */
/* @var $form ActiveForm */
?>
<div class="register">
<?php
    if(Yii::$app->session->hasFlash('success')){
        echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
    }
?>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstName') ?>
        <?= $form->field($model, 'lastName') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Register', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- register -->
