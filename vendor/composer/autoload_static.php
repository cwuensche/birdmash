<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3b0ccacab8d98d2068da41701611883
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3b0ccacab8d98d2068da41701611883::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3b0ccacab8d98d2068da41701611883::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
