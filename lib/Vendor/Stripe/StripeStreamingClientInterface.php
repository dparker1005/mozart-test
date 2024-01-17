<?php

namespace Dlparker1005\MozartTest\Vendor\Stripe;

/**
 * Interface for a Dlparker1005\MozartTest\Vendor\Stripe client.
 */
interface StripeStreamingClientInterface extends BaseStripeClientInterface
{
    public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts);
}
