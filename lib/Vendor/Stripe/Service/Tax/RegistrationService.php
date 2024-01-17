<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\Tax;

class RegistrationService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * Returns a list of Tax <code>Registration</code> objects.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Collection<\Dlparker1005\MozartTest\Vendor\Stripe\Tax\Registration>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/tax/registrations', $params, $opts);
    }

    /**
     * Creates a new Tax <code>Registration</code> object.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Tax\Registration
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/tax/registrations', $params, $opts);
    }

    /**
     * Returns a Tax <code>Registration</code> object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Tax\Registration
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/tax/registrations/%s', $id), $params, $opts);
    }

    /**
     * Updates an existing Tax <code>Registration</code> object.
     *
     * A registration cannot be deleted after it has been created. If you wish to end a
     * registration you may do so by setting <code>expires_at</code>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Tax\Registration
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/tax/registrations/%s', $id), $params, $opts);
    }
}
