<?php
/**
 * @copyright Copyright (c) 2019
 * @author Szelepcsenyi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-vuejs-assets
 */

namespace szelepke\vue;

use yii\web\AssetBundle;

/**
 * Class AxiosAsset
 * @package szelepke\vue
 */
class AxiosAsset extends AssetBundle
{
    public $sourcePath = '@npm/axios/dist';

    public $js = [
        'axios.min.js'
    ];
}
