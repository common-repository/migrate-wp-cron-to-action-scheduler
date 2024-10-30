<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89768520ea85c32bebf6f7d5c391bf98
{
    public static $files = array (
        '8cd7f51cf36fd92d77543838a7a7b6f0' => __DIR__ . '/..' . '/woocommerce/action-scheduler/action-scheduler.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ACSWP\\Plugin\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ACSWP\\Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'ACSWP\\Plugin\\Base\\Actions' => __DIR__ . '/../..' . '/includes/Base/Actions.php',
        'ACSWP\\Plugin\\Base\\Activate' => __DIR__ . '/../..' . '/includes/Base/Activate.php',
        'ACSWP\\Plugin\\Base\\AdminNotice' => __DIR__ . '/../..' . '/includes/Base/AdminNotice.php',
        'ACSWP\\Plugin\\Base\\BaseController' => __DIR__ . '/../..' . '/includes/Base/BaseController.php',
        'ACSWP\\Plugin\\Base\\Deactivate' => __DIR__ . '/../..' . '/includes/Base/Deactivate.php',
        'ACSWP\\Plugin\\Base\\Localization' => __DIR__ . '/../..' . '/includes/Base/Localization.php',
        'ACSWP\\Plugin\\Core\\Admin' => __DIR__ . '/../..' . '/includes/Core/Admin.php',
        'ACSWP\\Plugin\\Core\\Connection' => __DIR__ . '/../..' . '/includes/Core/Connection.php',
        'ACSWP\\Plugin\\Core\\MigrateActions' => __DIR__ . '/../..' . '/includes/Core/MigrateActions.php',
        'ACSWP\\Plugin\\Core\\Settings' => __DIR__ . '/../..' . '/includes/Core/Settings.php',
        'ACSWP\\Plugin\\Helpers\\HelperFunctions' => __DIR__ . '/../..' . '/includes/Helpers/HelperFunctions.php',
        'ACSWP\\Plugin\\Helpers\\Hooker' => __DIR__ . '/../..' . '/includes/Helpers/Hooker.php',
        'ACSWP\\Plugin\\Helpers\\Scheduler' => __DIR__ . '/../..' . '/includes/Helpers/Scheduler.php',
        'ACSWP\\Plugin\\Loader' => __DIR__ . '/../..' . '/includes/Loader.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89768520ea85c32bebf6f7d5c391bf98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89768520ea85c32bebf6f7d5c391bf98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89768520ea85c32bebf6f7d5c391bf98::$classMap;

        }, null, ClassLoader::class);
    }
}