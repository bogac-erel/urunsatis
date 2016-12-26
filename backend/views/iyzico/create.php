<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Iyzico */

$this->title = 'Create Iyzico';
$this->params['breadcrumbs'][] = ['label' => 'Iyzicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iyzico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
