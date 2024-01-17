<?php

namespace Dlparker1005\MozartTest\Vendor\Stripe\Exception\OAuth;

/**
 * Implements properties and methods common to all (non-SPL) Dlparker1005\MozartTest\Vendor\Stripe OAuth
 * exceptions.
 */
abstract class OAuthErrorException extends \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException
{
    protected function constructErrorObject()
    {
        if (null === $this->jsonBody) {
            return null;
        }

        return \Dlparker1005\MozartTest\Vendor\Stripe\OAuthErrorObject::constructFrom($this->jsonBody);
    }
}
