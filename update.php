<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\SmokeData */

$this->params['breadcrumbs'] = [
    ['label' => yii::t('app', 'Smoke Data'), 'url' => Url::to(['index'])],
    ['label' => yii::t('app', 'Update') . yii::t('app', 'Smoke Data')],
];
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
