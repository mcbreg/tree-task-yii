<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Главная страница проекта';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Дерево сущностей</h1>

        <p><?php echo Html::a('Начать', ['tree/index'], ['class' => 'btn btn-success']);?></p>
    </div>


</div>
