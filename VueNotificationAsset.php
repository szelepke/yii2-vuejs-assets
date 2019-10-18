<?php
/**
 * @copyright Copyright (c) 2019
 * @author Szelepcsenyi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-vuejs-assets
 */
namespace szelepke\vue;

use yii\web\AssetBundle;
/**
 * Class VueNotificationAsset
 * @package szelepke\vue
 */
class VueNotificationAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-notification/dist';
    
    public $js = [
    	'index.js'
    ];

    public $depends = [
        'szelepke\vue\VueAsset',
    ];
}