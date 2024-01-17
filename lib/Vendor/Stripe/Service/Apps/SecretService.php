<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Service\Apps;

class SecretService extends \Dlparker1005\MozartTest\Vendor\Stripe\Service\AbstractService
{
    /**
     * List all secrets stored on the given scope.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Collection<\Dlparker1005\MozartTest\Vendor\Stripe\Apps\Secret>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/apps/secrets', $params, $opts);
    }

    /**
     * Create or replace a secret in the secret store.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Apps\Secret
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/apps/secrets', $params, $opts);
    }

    /**
     * Deletes a secret from the secret store by name and scope.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Apps\Secret
     */
    public function deleteWhere($params = null, $opts = null)
    {
        return $this->request('post', '/v1/apps/secrets/delete', $params, $opts);
    }

    /**
     * Finds a secret in the secret store by name and scope.
     *
     * @param null|array $params
     * @param null|array|\Dlparker1005\MozartTest\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\Apps\Secret
     */
    public function find($params = null, $opts = null)
    {
        return $this->request('get', '/v1/apps/secrets/find', $params, $opts);
    }
}
