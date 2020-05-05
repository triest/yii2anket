<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\grid\GridView;
    use yii\helpers\Url;
    use yii\widgets\LinkPager;

    /* @var $this yii\web\View */
    /* @var $model app\models\Girls */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="girls-form">

    <form action="<?= Url::toRoute(['anket/create']) ?>" method="post" enctype="multipart/form-data">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name')->textInput(['rows' => 6]) ?>

        <?= $form->field($model, 'height')->textInput(['type' => 'number', 'min' => 10, 'value' => 160]) ?>

        <?= $form->field($model, 'age')->textInput(['type' => 'number', 'min' => 18, 'value' => 18]) ?>


        <?= $form->field($model, 'height')->textInput(['type' => 'number', 'min' => 100, 'value' => 150]) ?>

        <?= $form->field($model, 'weight')->textInput(['type' => 'number', 'min' => 50, 'value' => 50]) ?>

        <?= $form->field($model, 'sex')
                ->radioList([

                        'male' => 'Мужчина',

                        'famele' => 'Женщина', // Selected item

                ]); ?>

        <? foreach ($targets as $target) { ?>
            <input type="checkbox" id="target" name="target"> <label><? echo $target->name ?></label>
        <? } ?>
        <br>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?php ActiveForm::end(); ?>
    </form>


</div>
