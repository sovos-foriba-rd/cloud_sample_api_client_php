<?php

namespace Bulut\eFaturaUBL;


class FinancialAccount
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
     * @var |String
     */
    public $PaymentNote;

    /**
     * @var \Bulut\eFaturaUBL\FinancialInstitutionBranch
     */
    public $FinancialInstitutionBranch;

}