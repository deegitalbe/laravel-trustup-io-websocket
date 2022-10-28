<?php
namespace Deegitalbe\LaravelTrustupIoWebsocket\Tests;

use Deegitalbe\LaravelTrustupIoWebsocket\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Deegitalbe\LaravelTrustupIoWebsocket\Providers\LaravelTrustupIoWebsocketServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupIoWebsocketServiceProvider::class
        ];
    }
}