<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service;

class BalanceService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Retrieves the current account balance, based on the authentication that was used
     * to make the request.  For a sample request, see <a
     * href="/docs/connect/account-balances#accounting-for-negative-balances">Accounting
     * for negative balances</a>.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Balance
     */
    public function retrieve($params = null, $opts = null)
    {
        return $this->request('get', '/v1/balance', $params, $opts);
    }
}
