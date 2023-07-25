<?php
namespace lulubin\echarts;

use yii\web\AssetBundle;

class MapAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts/map';
    public $depends = ['lulubin\echarts\EChartsAsset',];
}