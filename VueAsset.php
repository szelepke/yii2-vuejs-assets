<?php
/**
 * @copyright Copyright (c) 2019
 * @author Szelepcsényi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-vuejs-assets
 */
namespace szelepke\vue;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class VueAsset
 * @package szelepke\vue
 */
class VueAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue/dist';
    
    public $js = [
    	YII_ENV_DEV ? 'vue.js' : 'vue.min.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}