<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BackendUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Backend Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backend-users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Backend Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstName',
            'lastName',
            'username',
            'email:email',
            //'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
