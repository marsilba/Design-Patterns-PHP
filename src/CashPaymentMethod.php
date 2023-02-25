<?php

declare(strict_types=1);

namespace Payment;

class CashPaymentMethod implements PaymentMethod
{
    private const DISCOUNT_PERCENT = 0.10; // 10%

    public function pay(float $amount): float
    {
        return $amount - ($amount * self::DISCOUNT_PERCENT);
    }
}
