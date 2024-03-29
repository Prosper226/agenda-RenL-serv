<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c4d113dee492711f24dd13833ccc78c
{
    public static $files = array (
        'd3ab942e01830430f3f6cef54cf18ece' => __DIR__ . '/../..' . '/helpers/handleRequest.php',
        '2ef31fa2403dda89a66569f20541cba3' => __DIR__ . '/../..' . '/helpers/jsonResponse.php',
        '26b07c87a0ae5e262004be5994046be5' => __DIR__ . '/../..' . '/helpers/jsonWebToken.php',
        'a6864ec2bfb527a6cc26c76a5b71d577' => __DIR__ . '/../..' . '/configs/app.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
        'c' => 
        array (
            'controller\\' => 11,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c4d113dee492711f24dd13833ccc78c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c4d113dee492711f24dd13833ccc78c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c4d113dee492711f24dd13833ccc78c::$classMap;

        }, null, ClassLoader::class);
    }
}
