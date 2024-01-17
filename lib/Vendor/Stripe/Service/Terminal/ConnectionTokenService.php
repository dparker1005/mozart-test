<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\Terminal;

class ConnectionTokenService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * To connect to a reader the Dlparker1005\MozartTest\Vendor\Stripe Terminal SDK needs to retrieve a short-lived
     * connection token from Stripe, proxied through your server. On your backend, add
     * an endpoint that creates and returns a connection token.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Terminal\ConnectionToken
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/terminal/connection_tokens', $params, $opts);
    }
}
