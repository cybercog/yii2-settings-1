<?php

use yii\helpers\Html;

$this->title = 'Create Setting';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-create">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', [
        'model' => $model
    ]);
    ?>

</div>
