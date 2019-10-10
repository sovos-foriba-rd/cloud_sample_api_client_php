<?php

namespace Bulut\eFaturaUBL;


class Person
{
    /**
     * @var |String
     */
    public $FirstName;

    /**
     * @var |String
     */
    public $FamilyName;

    /**
     * @var |String
     */
    public $Title;

    /**
     * @var |String
     */
    public $MiddleName;

    /**
     * @var |String
     */
    public $NationalityID;

    /**
     * @var \Bulut\eFaturaUBL\FinancialAccount
     */
    public $FinancialAccount;

    /**
     * @var \Bulut\eFaturaUBL\IdentityDocumentReference
     */
    public $IdentityDocumentReference;

}