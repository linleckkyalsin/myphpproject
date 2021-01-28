<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit825929892f202290ee69b291634d7957
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'Car' => __DIR__ . '/../..' . '/blah.php',
        'ComposerAutoloaderInit825929892f202290ee69b291634d7957' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit825929892f202290ee69b291634d7957' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/dataBase/Connecton.php',
        'MyPosts' => __DIR__ . '/../..' . '/index.php',
        'PagesController' => __DIR__ . '/../..' . '/controller/PagesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/dataBase/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit825929892f202290ee69b291634d7957::$classMap;

        }, null, ClassLoader::class);
    }
}