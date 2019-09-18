<?php

use backend\widgets\Bar;
use backend\grid\CheckboxColumn;
use backend\grid\ActionColumn;
use backend\grid\GridView;
use common\libs\Constants;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SmokeDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '手报设备数据';
$this->params['breadcrumbs'][] = '手报设备数据';
?>
<div class="row">
    <div class="col-sm-12">
        <div class="ibox">
            <?= $this->render('/widgets/_ibox-title') ?>
            <div class="ibox-content">
                <?= Bar::widget(['template' => '{refresh}']) ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        'devid',
                        [
                            'attribute' => 'name',
                            'label' => '设备名称',
                            'value' => 'alarmName.name',
                        ],

                        [
                            'attribute' => 'address',
                            'label' => '设备地址',
                            'value' => 'alarmName.address',
                        ],
                        'voltage',
                        'temperature',

                        [
                            'attribute' => 'person',
                            'label' => '设备负责人',
                            'value' => 'alarmName.person',
                        ],
                        [
                            'attribute' => 'iphone',
                            'label' => '负责人电话',
                            'value' => 'alarmName.iphone',
                        ],
                        'time',
                        [
                            'class' =>\backend\grid\alarm\EmectricStatusColumn::className(),
                            'attribute' => 'state',
                            'filter' => Constants::alarmState(),
                            'width' => '90px'
                        ],
                        // 'created_at',
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
