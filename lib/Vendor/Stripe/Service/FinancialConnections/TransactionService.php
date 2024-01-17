<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\FinancialConnections;

class TransactionService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Returns a list of Financial Connections <code>Transaction</code> objects.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Collection<\Dlparker1005\MozartTest\Vendor\Stripe\FinancialConnections\Transaction>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/financial_connections/transactions', $params, $opts);
    }

    /**
     * Retrieves the details of a Financial Connections <code>Transaction</code>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\FinancialConnections\Transaction
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/financial_connections/transactions/%s', $id), $params, $opts);
    }
}
