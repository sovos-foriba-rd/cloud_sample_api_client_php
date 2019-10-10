<?php

namespace Bulut\eFaturaUBL;


class LegalMonetaryTotal
{
    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $LineExtensionAmount;

    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $TaxExclusiveAmount;

    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $TaxInclusiveAmount;

    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $AllowanceTotalAmount;

    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $PayableAmount;

}