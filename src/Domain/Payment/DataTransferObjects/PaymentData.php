<?php

namespace Domain\Payment\DataTransferObjects;

use Domain\Payment\Enums\PaymentMethodEnum;
use Illuminate\Http\Request;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\EnumCaster;
use Spatie\DataTransferObject\DataTransferObject;

class PaymentData extends DataTransferObject
{
    #[CastWith(EnumCaster::class, PaymentMethodEnum::class)]
    public PaymentMethodEnum $method;

    public static function fromRequest(Request $request): self
    {
        return new self($request->all());
    }
}
