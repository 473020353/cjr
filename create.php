<?php

use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model backend\models\SmokeData */

$this->params['breadcrumbs'] = [
    ['label' => '返回', 'url' => Url::to(['index'])],
    ['label' => yii::t('app', 'Create') . yii::t('app', 'Smoke Data')],
];
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>

