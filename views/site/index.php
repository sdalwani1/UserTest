<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php
   use yii\bootstrap\ActiveForm;
   use yii\bootstrap\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to UserApp</h1>

        <p class="lead">This is the newly created Application for Learning Purpose only</p>

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2 align="center">Register</h2>

                <p class="text-justify">Here you can get yourself registered and learn how to be part of this website. Remember this website is for learning purpose only. It doesn't have connection with any real life live project and we do not mean to harm anyone. No human or animals were harmed during creation of this website. Thank you. :-)</p>

                <?= Html::a('Register', ['../user/registration'], ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="col-lg-4">
                <h2 align="center">Login</h2>

                <p class="text-justify">Here you can get yourself logged in and learn how to be part of this website. Remember this website is for learning purpose only. It doesn't have connection with any real life live project and we do not mean to harm anyone. No human or animals were harmed during creation of this website. Thank you. :-)</p>

                <?= Html::a('Login', ['../user/login'], ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="col-lg-4">
                <h2 align="center">Contact</h2>

                <p class="text-justify">Here you can get yourself connected by contacting us and learn how to be part of this website. Remember this website is for learning purpose only. It doesn't have connection with any real life live project and we do not mean to harm anyone. No human or animals were harmed during creation of this website. Thank you. :-)</p>

                <?= Html::a('Contact', ['contact'], ['class'=>'btn btn-primary']) ?>
                
            </div>
        </div>

    </div>
</div>
