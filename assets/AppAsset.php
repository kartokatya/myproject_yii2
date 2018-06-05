<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/flexslider.css',
        'css/style.css',
        'css/memenu.css',
        'css/popuo-box.css',
        'css/slick.css',
        'css/slick-theme.css',
    ];
    public $js = [

        'js/slick.js',
        'js/memenu.js',
        'js/simpleCart.min.js',
        'js/responsiveslides.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
