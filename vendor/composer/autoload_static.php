<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit614a0d0fb99f56a0c51bce0c1ec870a9
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'b067bc7112e384b61c701452d53a14a8' => __DIR__ . '/..' . '/mtdowling/jmespath.php/src/JmesPath.php',
        '8a9dc1de0ca7e01f3e08231539562f61' => __DIR__ . '/..' . '/aws/aws-sdk-php/src/functions.php',
        'c15243c55ab4c20eff78d1e24be20dac' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'J' => 
        array (
            'JmesPath\\' => 9,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'Aws\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'JmesPath\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtdowling/jmespath.php/src',
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
        'Aws\\' => 
        array (
            0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
        ),
    );

    public static $classMap = array (
        'Cloudinary' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Cloudinary.php',
        'CloudinaryField' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/CloudinaryField.php',
        'Cloudinary\\Api' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api.php',
        'Cloudinary\\Api\\AlreadyExists' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/AlreadyExists.php',
        'Cloudinary\\Api\\AuthorizationRequired' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/AuthorizationRequired.php',
        'Cloudinary\\Api\\BadRequest' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/BadRequest.php',
        'Cloudinary\\Api\\Error' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/Error.php',
        'Cloudinary\\Api\\GeneralError' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/GeneralError.php',
        'Cloudinary\\Api\\NotAllowed' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/NotAllowed.php',
        'Cloudinary\\Api\\NotFound' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/NotFound.php',
        'Cloudinary\\Api\\RateLimited' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/RateLimited.php',
        'Cloudinary\\Api\\Response' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Api/Response.php',
        'Cloudinary\\AuthToken' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/AuthToken.php',
        'Cloudinary\\Cache\\Adapter\\CacheAdapter' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Cache/Adapter/CacheAdapter.php',
        'Cloudinary\\Cache\\Adapter\\KeyValueCacheAdapter' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Cache/Adapter/KeyValueCacheAdapter.php',
        'Cloudinary\\Cache\\ResponsiveBreakpointsCache' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Cache/ResponsiveBreakpointsCache.php',
        'Cloudinary\\Cache\\Storage\\FileSystemKeyValueStorage' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Cache/Storage/FileSystemKeyValueStorage.php',
        'Cloudinary\\Cache\\Storage\\KeyValueStorage' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Cache/Storage/KeyValueStorage.php',
        'Cloudinary\\Error' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Error.php',
        'Cloudinary\\HttpClient' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/HttpClient.php',
        'Cloudinary\\PreloadedFile' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/PreloadedFile.php',
        'Cloudinary\\Search' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Search.php',
        'Cloudinary\\SignatureVerifier' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/SignatureVerifier.php',
        'Cloudinary\\Uploader' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Uploader.php',
        'Cloudinary\\Utils\\Singleton' => __DIR__ . '/..' . '/cloudinary/cloudinary_php/src/Utils/Singleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit614a0d0fb99f56a0c51bce0c1ec870a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit614a0d0fb99f56a0c51bce0c1ec870a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit614a0d0fb99f56a0c51bce0c1ec870a9::$classMap;

        }, null, ClassLoader::class);
    }
}
