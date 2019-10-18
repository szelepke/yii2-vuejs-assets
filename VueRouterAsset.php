<?php
/**
 * @copyright Copyright (c) 2019
 * @author Szelepcsenyi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-vuejs-assets
 */

namespace szelepke\vue;

use yii\web\AssetBundle;

/**
 * Class VueRouterAsset
 * @package szelepke\vue
 */
class VueRouterAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-router/dist';

    public $js = [
        'vue-router.min.js'
    ];

    public $depends = [
        'szelepke\vue\VueAsset',
    ];
}
