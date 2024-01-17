<?php

// File generated from our OpenAPI spec

namespace Dlparker1005\MozartTest\Vendor\Stripe\Terminal;

/**
 * A Configurations object represents how features should be configured for terminal readers.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\Dlparker1005\MozartTest\Vendor\Stripe\StripeObject $bbpos_wisepos_e
 * @property null|bool $is_account_default Whether this Configuration is the default for your account
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\Dlparker1005\MozartTest\Vendor\Stripe\StripeObject $offline
 * @property null|\Dlparker1005\MozartTest\Vendor\Stripe\StripeObject $tipping
 * @property null|\Dlparker1005\MozartTest\Vendor\Stripe\StripeObject $verifone_p400
 */
class Configuration extends \Dlparker1005\MozartTest\Vendor\Stripe\ApiResource
{
    const OBJECT_NAME = 'terminal.configuration';

    use \Dlparker1005\MozartTest\Vendor\Stripe\ApiOperations\All;
    use \Dlparker1005\MozartTest\Vendor\Stripe\ApiOperations\Create;
    use \Dlparker1005\MozartTest\Vendor\Stripe\ApiOperations\Delete;
    use \Dlparker1005\MozartTest\Vendor\Stripe\ApiOperations\Retrieve;
    use \Dlparker1005\MozartTest\Vendor\Stripe\ApiOperations\Update;
}
