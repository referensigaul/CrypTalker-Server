<?php

return array(

    'debug' => true,

    'url' => 'http://localhost',

    'timezone' => 'UTC',

    'locale' => 'en',

    'fallback_locale' => 'en',

    'key' => 'Ay1t0YF2IFEywnqJXw5cvcjFCqam3bcr',

    'cipher' => MCRYPT_RIJNDAEL_128,

    'providers' => array(

        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        'Illuminate\Cache\CacheServiceProvider',
        'Illuminate\Session\CommandsServiceProvider',
        'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
        'Illuminate\Routing\ControllerServiceProvider',
        'Illuminate\Cookie\CookieServiceProvider',
        'Illuminate\Database\DatabaseServiceProvider',
        'Illuminate\Encryption\EncryptionServiceProvider',
        'Illuminate\Filesystem\FilesystemServiceProvider',
        'Illuminate\Hashing\HashServiceProvider',
        'Illuminate\Html\HtmlServiceProvider',
        'Illuminate\Log\LogServiceProvider',
        'Illuminate\Mail\MailServiceProvider',
        'Illuminate\Database\MigrationServiceProvider',
        'Illuminate\Pagination\PaginationServiceProvider',
        'Illuminate\Queue\QueueServiceProvider',
        'Illuminate\Redis\RedisServiceProvider',
        'Illuminate\Remote\RemoteServiceProvider',
        'Illuminate\Auth\Reminders\ReminderServiceProvider',
        'Illuminate\Database\SeedServiceProvider',
        'Illuminate\Session\SessionServiceProvider',
        'Illuminate\Translation\TranslationServiceProvider',
        'Illuminate\Validation\ValidationServiceProvider',
        'Illuminate\View\ViewServiceProvider',
        'Illuminate\Workbench\WorkbenchServiceProvider',
    ),

    'manifest' => storage_path().'/meta',

    'aliases' => array(

        'App'             => 'Illuminate\Support\Facades\App',
        'Artisan'         => 'Illuminate\Support\Facades\Artisan',
        'Auth'            => 'Illuminate\Support\Facades\Auth',
        'Blade'           => 'Illuminate\Support\Facades\Blade',
        'Cache'           => 'Illuminate\Support\Facades\Cache',
        'ClassLoader'     => 'Illuminate\Support\ClassLoader',
        'Config'          => 'Illuminate\Support\Facades\Config',
        'Controller'      => 'Illuminate\Routing\Controller',
        'Cookie'          => 'Illuminate\Support\Facades\Cookie',
        'Crypt'           => 'Illuminate\Support\Facades\Crypt',
        'DB'              => 'Illuminate\Support\Facades\DB',
        'Eloquent'        => 'Illuminate\Database\Eloquent\Model',
        'Event'           => 'Illuminate\Support\Facades\Event',
        'File'            => 'Illuminate\Support\Facades\File',
        'Form'            => 'Illuminate\Support\Facades\Form',
        'Hash'            => 'Illuminate\Support\Facades\Hash',
        'HTML'            => 'Illuminate\Support\Facades\HTML',
        'Input'           => 'Illuminate\Support\Facades\Input',
        'Lang'            => 'Illuminate\Support\Facades\Lang',
        'Log'             => 'Illuminate\Support\Facades\Log',
        'Mail'            => 'Illuminate\Support\Facades\Mail',
        'Paginator'       => 'Illuminate\Support\Facades\Paginator',
        'Password'        => 'Illuminate\Support\Facades\Password',
        'Queue'           => 'Illuminate\Support\Facades\Queue',
        'Redirect'        => 'Illuminate\Support\Facades\Redirect',
        'Redis'           => 'Illuminate\Support\Facades\Redis',
        'Request'         => 'Illuminate\Support\Facades\Request',
        'Response'        => 'Illuminate\Support\Facades\Response',
        'Route'           => 'Illuminate\Support\Facades\Route',
        'Schema'          => 'Illuminate\Support\Facades\Schema',
        'Seeder'          => 'Illuminate\Database\Seeder',
        'Session'         => 'Illuminate\Support\Facades\Session',
        'SoftDeletingTrait' => 'Illuminate\Database\Eloquent\SoftDeletingTrait',
        'SSH'             => 'Illuminate\Support\Facades\SSH',
        'Str'             => 'Illuminate\Support\Str',
        'URL'             => 'Illuminate\Support\Facades\URL',
        'Validator'       => 'Illuminate\Support\Facades\Validator',
        'View'            => 'Illuminate\Support\Facades\View',
    ),

);