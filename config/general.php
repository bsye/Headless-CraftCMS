<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';

return [
    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 1,

    // Whether generated URLs should omit "index.php"
    'omitScriptNameInUrls' => true,

    'headlessMode' => true,

    'aliases' => [
        '@web' => App::env('BACKEND_URL'),
        '@webFrontend' => App::env('FRONTEND_URL') ?: 'http://localhost:3000',
        '@webFileSystem' => App::env('FILE_SYSTEM_URL') ?: App::env('BACKEND_URL') . '/web/',
        '@webRootFileSystem' => App::env('ROOT_FILE_SYSTEM_URL') ?: dirname(__DIR__) . '/web/',
        '@generateUrl' => App::env('GENERATE_URL') ?: 'http://localhost:3000',
    ],

    'limitAutoSlugsToAscii' => true,

    // Whether Dev Mode should be enabled (see https://craftcms.com/guides/what-dev-mode-does)
    'devMode' => $isDev,

    // Whether administrative changes should be allowed
    'allowAdminChanges' => $isDev,

    // Whether crawlers should be allowed to index pages and following links
    'disallowRobots' => !$isProd,
];
