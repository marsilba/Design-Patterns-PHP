<?php

declare(strict_types=1);

namespace Payment;

interface PaymentMethod
{
    public function pay(float $amount): float;
}