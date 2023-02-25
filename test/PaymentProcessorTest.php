<?php

declare(strict_types=1);

namespace Payment;

use Payment\CashPaymentMethod;
use Payment\CreditCardPaymentMethod;
use Payment\PaymentProcessor;
use PHPUnit\Framework\TestCase;

final class PaymentProcessorTest extends TestCase
{
    public function testCanProcessPaymentWithCashPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessor(new CashPaymentMethod());
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(90.00, $paymentProcessor->getAmount());
    }    

    public function testCanProcessPaymentWithCreditCardPaymentMethod(): void
    {
        $paymentProcessor = new PaymentProcessor(new CreditCardPaymentMethod());
        $paymentProcessor->processPayment(100.00);

        $this->assertEquals(100.00, $paymentProcessor->getAmount());
    }

}