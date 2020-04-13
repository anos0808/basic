<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserTable */

$this->title = 'Update User Table: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
