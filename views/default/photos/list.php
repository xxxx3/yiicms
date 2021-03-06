<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2016/12/7
 * Time: 10:55
 * Email:liyongsheng@meicai.cn
 */

/* @var $this yii\web\View */
/** @var $dataProvider \yii\data\ActiveDataProvider */
use yii\widgets\ListView;
use yii\bootstrap\Html;

$this->title = '企业相册';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .thumbnail{width:240px;text-align: center;margin-left: auto; margin-right: auto;padding: 0}
    .caption{text-align: left}
    .image-box{border-bottom: 1px solid #ddd;padding: 5px}
    .image-box a{
        height: 240px;width:240px; text-align: center;vertical-align: middle;display: table-cell;
    }
    .image{max-width:100%;max-height:230px;vertical-align:middle;display: inline}
</style>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-3">
                <?=\app\widgets\Category::widget(['type'=>\app\models\Content::TYPE_PHOTOS,'title'=>'相册分类',
                    'options'=>['class'=>'panel panel-default panel-'.\yii\helpers\ArrayHelper::getValue($this->params,'themeColor')]
                ])?>
                <?=\app\widgets\LastNews::widget(['options'=>['class'=>'panel panel-default panel-'.\yii\helpers\ArrayHelper::getValue($this->params,'themeColor')]
                ])?>
                <?=\app\widgets\ConfigPanel::widget(['configName'=>'contact_us',
                    'options'=>['class'=>'panel panel-default panel-'.\yii\helpers\ArrayHelper::getValue($this->params,'themeColor')]
                ])?>
                <?=\app\widgets\ConfigPanel::widget(['configName'=>'donate',
                    'options'=>['class'=>'panel panel-default panel-'.\yii\helpers\ArrayHelper::getValue($this->params,'themeColor')]
                ])?>
            </div>
            <div class="col-lg-9">
                <div class="panel panel-default panel-<?=\yii\helpers\ArrayHelper::getValue($this->params,'themeColor')?>">
                    <div class="panel-heading"><h3 class="panel-title">相册</h3></div>
                </div>
                <div>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => "<div class='panel-body'>{items}</div>\n<div class='panel-body'>{pager}</div>",
                        'itemView'=>'_item'
                    ]); ?>
                </div>
            </div>

        </div>
    </div>
</div>