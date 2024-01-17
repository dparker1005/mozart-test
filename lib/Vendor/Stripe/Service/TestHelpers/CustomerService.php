<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\TestHelpers;

class CustomerService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Create an incoming testmode bank transfer.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\CustomerCashBalanceTransaction
     */
    public function fundCashBalance($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/test_helpers/customers/%s/fund_cash_balance', $id), $params, $opts);
    }
}
