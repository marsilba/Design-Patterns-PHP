<?php

declare(strict_types=1);

namespace Payment;

final class PaymentProcessor
{
    private PaymentMethod $paymentMethod;
    private float $amount;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(float $amount): void
    {
        $this->amount = $this->paymentMethod->pay($amount);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
