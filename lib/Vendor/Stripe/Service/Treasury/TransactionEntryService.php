<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\Treasury;

class TransactionEntryService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Retrieves a list of TransactionEntry objects.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Collection<\Dlparker1005\MozartTest\Vendor\Stripe\Treasury\TransactionEntry>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/treasury/transaction_entries', $params, $opts);
    }

    /**
     * Retrieves a TransactionEntry object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Treasury\TransactionEntry
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/treasury/transaction_entries/%s', $id), $params, $opts);
    }
}
