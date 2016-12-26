<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Urun */

$this->title = 'Create Urun';
$this->params['breadcrumbs'][] = ['label' => 'Uruns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
