<?php

    /* @var $this yii\web\View */
    /* @var $form yii\bootstrap\ActiveForm */

    /* @var $model app\models\LoginForm */

    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\captcha\Captcha;

    $this->title = 'Регистрация';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-comment mr0"><!--leave comment-->

    <div class="col-md-20 ">
        <div class="site-login">
            <h1>Зарегистрироваться</h1>


            <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                            'template' => "{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label("Имя для входа ") ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label("Имя в анкете") ?>

            <?= $form->field($model, 'email')->textInput()->label('Адрес электронной почты') ?>

            <?= $form->field($model, 'password')->passwordInput()->label("Пароль") ?>

            <?= $form->field($model, 'password_repeat')->passwordInput()->label("Повтор пароля") ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Зарегистрироваться',
                            ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>


        </div>
    </div>

</div>
