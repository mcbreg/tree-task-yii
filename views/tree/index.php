<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* * *ext** */
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\rpg\models\TreeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Дерево сущностей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tree-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if ($dataProvider->count == 0)
            echo Html::a('Создать корневой элемент', ['add'], ['class' => 'btn btn-success']);
        else
            echo Html::a('Редактировать дерево', ['edit'], ['class' => 'btn btn-success']);
        ?>
    </p>
    <?=
    TreeGrid::widget([
        'dataProvider' => $dataProvider,
        'keyColumnName' => 'id',
        'showOnEmpty' => FALSE,
        'parentColumnName' => 'tree_id',
        'columns' => [
           'name:text:Элементы дерева'

        ]
    ]);
    ?>

</div>