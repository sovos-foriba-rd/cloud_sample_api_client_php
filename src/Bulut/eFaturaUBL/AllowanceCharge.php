<?php

namespace Bulut\eFaturaUBL;


class AllowanceCharge
{
    /**
     * @var |String
     */
    public $ChargeIndicator;

    /**
     * @var |String
     */
    public $MultiplierFactorNumeric;

    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $Amount;

    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $BaseAmount;

}