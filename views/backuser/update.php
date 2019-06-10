<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BackendUsers */

$this->title = 'Update Backend Users: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Backend Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="backend-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
