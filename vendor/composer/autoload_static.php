<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1284213245369c77582819ca390c45b3
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Thrift' => 
            array (
                0 => __DIR__ . '/..' . '/apache/thrift/lib/php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1284213245369c77582819ca390c45b3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
