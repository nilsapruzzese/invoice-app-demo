<?php

namespace Domain\Mollie\Actions;

use Domain\Payment\DataTransferObjects\PaymentData;
use Mollie\Api\MollieApiClient;

class CreateMolliePaymentAction
{
    public function __construct(
        private readonly MollieApiClient $mollie
    )
    {
    }

    public function execute(PaymentData $data)
    {
        return $this->mollie->payments->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => '10.00', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'method' => $data->method,
            'description' => 'My first API payment',
            'redirectUrl' => 'https://example.org/redirect',
            'webhookUrl' => 'https://example.org/webhook',
        ]);
    }
}
