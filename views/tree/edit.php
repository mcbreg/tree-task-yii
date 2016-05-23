<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* * *ext** */
use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\rpg\models\TreeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Редактировать дерево сущностей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tree-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    TreeGrid::widget([
        'dataProvider' => $dataProvider,
        'keyColumnName' => 'id',
        'showOnEmpty' => FALSE,
        'parentColumnName' => 'tree_id',
        'columns' => [
           /* 'id', */
            'name',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete} {add}',
                'buttons' => [
                    'add' => function ($url, $model, $key)
                    {
                        return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url);
                    },
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
        			$url ='index.php?r=tree/'.$action.'&id='.$model->id;
        			return $url;
    			}
            ]
        ]
    ]);
    ?>

</div>