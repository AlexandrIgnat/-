<!-- <p><?= $task->text ?></p>
<?php  
echo $task->id;
$i=0;
foreach ($task as $k) {
    if ($i==7){
break;
    }
    echo $k->text."<br>";
    $i++;
    //echo $i;
}
?> -->
<?php
use yii\helpers\Html;
$this->title = 'Домашняя страница';
?>
<?= Html::beginForm(['site/get-parameters'], 'post') ?>
    <?= Html::input('text', 'username') ?>
    <?= Html::submitButton('Отправить', ['class' => 'submit']) ?>
<?php Html::endForm() ?>