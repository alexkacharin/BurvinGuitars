<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
        <div class="site-login">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>Please fill out the following fields to login:</p>
            <div class="row">
                <div class="col-xl-12">
                    <?php $form = ActiveForm::begin(['id' => 'signin']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <div class="my-1 mx-0" style="color:#ffffff;">
                            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                            <br>
                            Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>