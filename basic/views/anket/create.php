<?php

    use yii\helpers\Html;

    /* @var $this yii\web\View */
    /* @var $model app\models\Girls */

    $this->title = 'Create Girls';
    $this->params['breadcrumbs'][] = ['label' => 'Girls', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="girls-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
            'model' => $model,'targets'=>$targets
    ]) ?>

</div>
