<?php
namespace Deegitalbe\LaravelTrustupIoWebsocket;

use Deegitalbe\LaravelTrustupIoWebsocket\Contracts\PackageContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class Package extends VersionablePackage implements PackageContract
{
    public static function prefix(): string
    {
        return "laravel-trustup-io-websocket";
    }
}