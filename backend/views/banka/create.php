<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Banka */

$this->title = 'Create Banka';
$this->params['breadcrumbs'][] = ['label' => 'Bankas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
