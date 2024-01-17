<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\TestHelpers;

class RefundService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Expire a refund with a status of <code>requires_action</code>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Refund
     */
    public function expire($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/test_helpers/refunds/%s/expire', $id), $params, $opts);
    }
}
