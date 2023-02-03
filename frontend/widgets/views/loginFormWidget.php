<?php


use yii\bootstrap5\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


Modal::begin([

    'id' => 'modal',
    'size' => 'modal-lg',
    'toggleButton' => [
        'label' => 'Click Me',
        'tag' => 'button',
        'class' => 'btn btn-success',
    ],
]);
echo 'Say hello...';
?>
    <button type="button" class="btn btn-primary" id="modalButton">Show Modal</button>
    <p>Please fill out the following fields to login:</p>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'action' => ['site/ajax-login'],
]);
echo $form->field($model, 'username')->textInput();
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'rememberMe')->checkbox();
?>

    <div>
        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
    </div>
    <div class="form-group">
        <div class="text-right">

            <?php
            echo Html::button('Cancel', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']);
            echo Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']);
            ?>

        </div>
    </div>

<?php
ActiveForm::end();
Modal::end();