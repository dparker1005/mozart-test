<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\TestHelpers\Treasury;

class ReceivedCreditService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Use this endpoint to simulate a test mode ReceivedCredit initiated by a third
     * party. In live mode, you can’t directly create ReceivedCredits initiated by
     * third parties.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Treasury\ReceivedCredit
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/test_helpers/treasury/received_credits', $params, $opts);
    }
}
