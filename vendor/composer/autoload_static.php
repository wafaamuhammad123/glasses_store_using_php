<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4719171f7c9626f72143d7dfe67d4aa
{
    public static $files = array (
        '7c2cadaeee157bd6c1e5641381eab0c9' => __DIR__ . '/../..' . '/config.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DbHandler' => __DIR__ . '/../..' . '/models/DbHandler.php',
        'MySQLHandler' => __DIR__ . '/../..' . '/models/MySQLHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd4719171f7c9626f72143d7dfe67d4aa::$classMap;

        }, null, ClassLoader::class);
    }
}
