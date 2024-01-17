<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\TestHelpers\Terminal;

/**
 * Service factory class for API resources in the Terminal namespace.
 *
 * @property ReaderService $readers
 */
class TerminalServiceFactory extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'readers' => ReaderService::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
