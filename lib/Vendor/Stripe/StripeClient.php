<?php

namespace Dlparker1005\MozartTest\Vendor\Stripe;

/**
 * Client used to send requests to Stripe's API.
 *
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\OAuthService $oauth
 * // The beginning of the section generated from our OpenAPI spec
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\AccountLinkService $accountLinks
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\AccountService $accounts
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\AccountSessionService $accountSessions
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\ApplePayDomainService $applePayDomains
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\ApplicationFeeService $applicationFees
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Apps\AppsServiceFactory $apps
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\BalanceService $balance
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\BalanceTransactionService $balanceTransactions
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\BillingPortal\BillingPortalServiceFactory $billingPortal
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\ChargeService $charges
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Checkout\CheckoutServiceFactory $checkout
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Climate\ClimateServiceFactory $climate
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\CountrySpecService $countrySpecs
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\CouponService $coupons
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\CreditNoteService $creditNotes
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\CustomerService $customers
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\CustomerSessionService $customerSessions
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\DisputeService $disputes
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\EphemeralKeyService $ephemeralKeys
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\EventService $events
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\ExchangeRateService $exchangeRates
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\FileLinkService $fileLinks
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\FileService $files
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\FinancialConnections\FinancialConnectionsServiceFactory $financialConnections
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Identity\IdentityServiceFactory $identity
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\InvoiceItemService $invoiceItems
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\InvoiceService $invoices
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Issuing\IssuingServiceFactory $issuing
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\MandateService $mandates
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PaymentIntentService $paymentIntents
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PaymentLinkService $paymentLinks
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PaymentMethodConfigurationService $paymentMethodConfigurations
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PaymentMethodDomainService $paymentMethodDomains
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PaymentMethodService $paymentMethods
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PayoutService $payouts
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PlanService $plans
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PriceService $prices
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\ProductService $products
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\PromotionCodeService $promotionCodes
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\QuoteService $quotes
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Radar\RadarServiceFactory $radar
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\RefundService $refunds
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Reporting\ReportingServiceFactory $reporting
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\ReviewService $reviews
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\SetupAttemptService $setupAttempts
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\SetupIntentService $setupIntents
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\ShippingRateService $shippingRates
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Sigma\SigmaServiceFactory $sigma
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\SourceService $sources
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\SubscriptionItemService $subscriptionItems
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\SubscriptionService $subscriptions
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\SubscriptionScheduleService $subscriptionSchedules
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Tax\TaxServiceFactory $tax
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\TaxCodeService $taxCodes
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\TaxRateService $taxRates
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Terminal\TerminalServiceFactory $terminal
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\TestHelpers\TestHelpersServiceFactory $testHelpers
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\TokenService $tokens
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\TopupService $topups
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\TransferService $transfers
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\Treasury\TreasuryServiceFactory $treasury
 * @property \Dlparker1005\MozartTest\Vendor\Stripe\Service\WebhookEndpointService $webhookEndpoints
 * // The end of the section generated from our OpenAPI spec
 */
class StripeClient extends BaseStripeClient
{
    /**
     * @var \Dlparker1005\MozartTest\Vendor\Stripe\Service\CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        return $this->getService($name);
    }

    public function getService($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new \Dlparker1005\MozartTest\Vendor\Stripe\Service\CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->getService($name);
    }
}
