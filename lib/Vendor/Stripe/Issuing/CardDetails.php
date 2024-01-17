<?php

namespace Dlparker1005\MozartTest\Vendor\Stripe\Issuing;

/**
 * Class CardDetails.
 *
 * @property string $id
 * @property string $object
 * @property Card $card
 * @property string $cvc
 * @property int $exp_month
 * @property int $exp_year
 * @property string $number
 */
class CardDetails extends \Dlparker1005\MozartTest\Vendor\Stripe\ApiResource
{
    const OBJECT_NAME = 'issuing.card_details';
}
