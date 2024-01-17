<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service;

class AccountSessionService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Creates a AccountSession object that includes a single-use token that the
     * platform can use on their front-end to grant client-side API access.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\AccountSession
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/account_sessions', $params, $opts);
    }
}
