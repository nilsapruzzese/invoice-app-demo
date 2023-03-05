<?php

namespace Domain\Payment\Enums;

enum PaymentMethodEnum: string
{
    case PAYPAL = 'paypal';
    case SOFORT = 'sofort';
    case GIROPAY = 'giropay';
}
