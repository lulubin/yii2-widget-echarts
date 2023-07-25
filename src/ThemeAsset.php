<?php
namespace lulubin\echarts;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts/theme';
    public $depends = ['lulubin\echarts\EChartsAsset'];
}