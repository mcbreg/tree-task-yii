<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
/* * *ext** */
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\rpg\models\TreeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Редактировать сущность';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tree-index">

    <h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>


</div>