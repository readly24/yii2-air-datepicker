<?php

namespace readly24\airdatepicker;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/air-datepicker/dist';

    public $css = [
        'css/datepicker.css',
    ];

    public $js = [
        'js/datepicker.js',
    ];

    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> e3a73b09ec411cc041dfb462cef6f9f964e95faf
