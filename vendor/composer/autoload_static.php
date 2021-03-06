<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb9a900ccb114be3e66846d1e5440e64
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stevenmaguire\\Services\\Trello\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\OAuth1\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'AlfredApp\\' => 10,
            'AlfredAppTest\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stevenmaguire\\Services\\Trello\\' => 
        array (
            0 => __DIR__ . '/..' . '/stevenmaguire/trello-php/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\OAuth1\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth1-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'AlfredApp\\' => 
        array (
            0 => __DIR__ . '/..' . '/catharsisjelly/alfred-workflows/src',
        ),
        'AlfredAppTest\\' => 
        array (
            0 => __DIR__ . '/..' . '/catharsisjelly/alfred-workflows/tests',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb9a900ccb114be3e66846d1e5440e64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb9a900ccb114be3e66846d1e5440e64::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
