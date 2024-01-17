<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service;

class AccountLinkService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Creates an AccountLink object that includes a single-use Dlparker1005\MozartTest\Vendor\Stripe URL that the
     * platform can redirect their user to in order to take them through the Connect
     * Onboarding flow.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\AccountLink
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/account_links', $params, $opts);
    }
}
