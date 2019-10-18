<?php
/**
 * @copyright Copyright (c) 2019
 * @author Szelepcsenyi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-vuejs-assets
 */

namespace szelepke\vue;

use yii\web\AssetBundle;


/**
 * Class VueResourceAsset
 * @package szelepke\vue
 */
class VueResourceAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-resource/dist';

    public $js = [
    	'vue-resource.min.js'
    ];

    public $depends = [
        'szelepke\vue\VueAsset',
    ];
}
