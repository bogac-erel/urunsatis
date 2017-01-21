<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Resim */

$this->title = 'Create Resim';
$this->params['breadcrumbs'][] = ['label' => 'Resims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
