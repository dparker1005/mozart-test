<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\Tax;

class SettingsService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Retrieves Tax <code>Settings</code> for a merchant.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Tax\Settings
     */
    public function retrieve($params = null, $opts = null)
    {
        return $this->request('get', '/v1/tax/settings', $params, $opts);
    }

    /**
     * Updates Tax <code>Settings</code> parameters used in tax calculations. All
     * parameters are editable but none can be removed once set.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Tax\Settings
     */
    public function update($params = null, $opts = null)
    {
        return $this->request('post', '/v1/tax/settings', $params, $opts);
    }
}
