<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit529e6fe4c936a7dfeda76ef06ebd3b00
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit529e6fe4c936a7dfeda76ef06ebd3b00::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
