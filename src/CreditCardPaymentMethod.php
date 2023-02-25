<?php

declare(strict_types=1);

namespace Payment;

class CreditCardPaymentMethod implements PaymentMethod
{
    private const DISCOUNT_PERCENT = 0.00; // 0%

    public function pay(float $amount): float
    {
        return $amount - ($amount * self::DISCOUNT_PERCENT);
    }
}
