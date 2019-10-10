<?php

namespace Bulut\eFaturaUBL;


class GoodsItem
{
    /**
     * @var |Array (val = string, attrs = [currencyID="TRY"] )
     */
    public $ValueAmount;

    /**
     * @var |Bulut|eFaturaUBL|InvoiceLine
     */
    public $InvoiceLine;

    /**
     * @var |String
     */
    public $RequiredCustomsID;
}