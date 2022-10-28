<?php
namespace Deegitalbe\LaravelTrustupIoWebsocket\Providers;

use Deegitalbe\LaravelTrustupIoWebsocket\Package;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelTrustupIoWebsocketServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }

    protected function addToRegister(): void
    {
        // Adding trustup broadcast connection
        config([
            'broadcasting.connections.trustup' => [
                'driver' => 'pusher',
                'key' => env('TRUSTUP_IO_WEBSOCKET_APP_KEY', '$2y$10$svQIJ8lZEqclI9AqcZEBZeKEqhePKWoFTFU85ML2u9w4aa2wbRHG'),
                'secret' => env('TRUSTUP_IO_WEBSOCKET_APP_SECRET', 'app-secret'),
                'app_id' => env('TRUSTUP_IO_WEBSOCKET_APP_ID', 'websocket_trustup_io'),
                'options' => [
                    'host' => env('TRUSTUP_IO_WEBSOCKET_HOST', 'websocket.trustup.io'),
                    'port' => env('TRUSTUP_IO_WEBSOCKET_PORT', 443),
                    'scheme' => env('TRUSTUP_IO_WEBSOCKET_SCHEME', 'https'),
                    'encrypted' => true,
                    'useTLS' => env('TRUSTUP_IO_WEBSOCKET_SCHEME', 'https') === 'https',
                ]
            ]
        ]);
        // Setting trustup broadcast connection as default one.
        config(['broadcasting.default' => 'trustup']);
    }

    protected function addToBoot(): void
    {
        //
    }
}