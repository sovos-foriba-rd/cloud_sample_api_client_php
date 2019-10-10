<?php

namespace Bulut\eFaturaUBL;


class PayeeFinancialAccount
{
    /**
     * @var |String
     */
    public $ID;

    /**
     * @var |String
     */
    public $CurrencyCode;

    /**
     * @var \Bulut\eFaturaUBL\FinancialInstitutionBranch
     */
    public $FinancialInstitutionBranch;
}