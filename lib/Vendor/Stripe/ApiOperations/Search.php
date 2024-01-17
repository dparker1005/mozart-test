<?php

namespace Dlparker1005\MozartTest\Vendor\Stripe\ApiOperations;

/**
 * Trait for searchable resources.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Search
{
    /**
     * @param string $searchUrl
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \Dlparker1005\MozartTest\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Dlparker1005\MozartTest\Vendor\Stripe\SearchResult of ApiResources
     */
    protected static function _searchResource($searchUrl, $params = null, $opts = null)
    {
        self::_validateParams($params);

        list($response, $opts) = static::_staticRequest('get', $searchUrl, $params, $opts);
        $obj = \Dlparker1005\MozartTest\Vendor\Stripe\Util\Util::convertToStripeObject($response->json, $opts);
        if (!($obj instanceof \Dlparker1005\MozartTest\Vendor\Stripe\SearchResult)) {
            throw new \Dlparker1005\MozartTest\Vendor\Stripe\Exception\UnexpectedValueException(
                'Expected type ' . \Dlparker1005\MozartTest\Vendor\Stripe\SearchResult::class . ', got "' . \get_class($obj) . '" instead.'
            );
        }
        $obj->setLastResponse($response);
        $obj->setFilters($params);

        return $obj;
    }
}
