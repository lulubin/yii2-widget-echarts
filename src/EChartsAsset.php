<?php
namespace lulubin\echarts;

use yii\web\AssetBundle;
use yii\base\InvalidConfigException;

class EChartsAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts/dist';

    public function init()
    {
        if (empty($this->js)) {
            switch (ECharts::$dist) {
                case ECharts::DIST_FULL:
                    $this->js = YII_DEBUG ? ['echarts.js'] : ['echarts.min.js'];
                    break;
                case ECharts::DIST_COMMON:
                    $this->js = YII_DEBUG ? ['echarts.common.js'] : ['echarts.common.min.js'];
                    break;
                case ECharts::DIST_SIMPLE:
                    $this->js = YII_DEBUG ? ['echarts.simple.js'] : ['echarts.simple.min.js'];
                    break;
                default:
                    throw new InvalidConfigException('The "dist" is not valid.');
            }
        }
        parent::init();
    }
}