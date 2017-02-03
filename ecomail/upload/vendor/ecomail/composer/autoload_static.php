<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dc97ae337d889b1d334f58ac10ae73e
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LNC\\OpenCart\\' => 13,
        ),
        'E' => 
        array (
            'Ecomail\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LNC\\OpenCart\\' => 
        array (
            0 => __DIR__ . '/..' . '/lnc/opencart/src',
        ),
        'Ecomail\\' => 
        array (
            0 => __DIR__ . '/..' . '/ecomail/opencart-base/src',
        ),
    );

    public static $classMap = array (
        'Ecomail\\API' => __DIR__ . '/..' . '/ecomail/opencart-base/src/api.php',
        'Ecomail\\AdminController' => __DIR__ . '/..' . '/ecomail/opencart-base/src/adminController.php',
        'Ecomail\\AdminModelOptionsListId' => __DIR__ . '/..' . '/ecomail/opencart-base/src/adminModelOptionsListId.php',
        'Ecomail\\Controller' => __DIR__ . '/..' . '/ecomail/opencart-base/src/controller.php',
        'Ecomail\\Helper' => __DIR__ . '/..' . '/ecomail/opencart-base/src/helper.php',
        'LNC\\OpenCart\\Adapter' => __DIR__ . '/..' . '/lnc/opencart/src/adapter.php',
        'LNC\\OpenCart\\Adapter2' => __DIR__ . '/..' . '/lnc/opencart/src/adapter2.php',
        'LNC\\OpenCart\\Adapter2_2' => __DIR__ . '/..' . '/lnc/opencart/src/adapter2_2.php',
        'LNC\\OpenCart\\Adapter2_3' => __DIR__ . '/..' . '/lnc/opencart/src/adapter2_3.php',
        'LNC\\OpenCart\\AdapterInterface' => __DIR__ . '/..' . '/lnc/opencart/src/AdapterInterface.php',
        'LNC\\OpenCart\\Factory' => __DIR__ . '/..' . '/lnc/opencart/src/factory.php',
        'LNC\\OpenCart\\LNCController' => __DIR__ . '/..' . '/lnc/opencart/src/controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dc97ae337d889b1d334f58ac10ae73e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dc97ae337d889b1d334f58ac10ae73e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dc97ae337d889b1d334f58ac10ae73e::$classMap;

        }, null, ClassLoader::class);
    }
}
