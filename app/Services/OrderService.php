<?php

namespace App\Services;

class OrderService
{
    public $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function discount()
    {
        dump('remise sur le montant : ' .$this->stripeService->amount);
    }
}