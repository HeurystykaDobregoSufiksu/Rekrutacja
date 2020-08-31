<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit573e4b3125c6bb81dea08a4b45f27c9a
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/database/App.php',
        'ArticleController' => __DIR__ . '/../..' . '/controllers/ArticleController.php',
        'Category' => __DIR__ . '/../..' . '/models/Category.php',
        'CategoryController' => __DIR__ . '/../..' . '/controllers/CategoryController.php',
        'CategoryRepository' => __DIR__ . '/../..' . '/repositories/CategoryRepository.php',
        'ComposerAutoloaderInit573e4b3125c6bb81dea08a4b45f27c9a' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit573e4b3125c6bb81dea08a4b45f27c9a' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connect' => __DIR__ . '/../..' . '/database/Connect.php',
        'PanelController' => __DIR__ . '/../..' . '/controllers/PanelController.php',
        'QueryMaker' => __DIR__ . '/../..' . '/database/QueryMaker.php',
        'Request' => __DIR__ . '/../..' . '/database/Request.php',
        'Router' => __DIR__ . '/../..' . '/database/Router.php',
        'User' => __DIR__ . '/../..' . '/User.php',
        'UserController' => __DIR__ . '/../..' . '/controllers/UserController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit573e4b3125c6bb81dea08a4b45f27c9a::$classMap;

        }, null, ClassLoader::class);
    }
}