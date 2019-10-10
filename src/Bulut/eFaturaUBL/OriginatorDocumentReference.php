<?php

namespace Bulut\eFaturaUBL;


class OriginatorDocumentReference
{
    /**
     * @var |String
     */
    public $ID;

    /**
     * @var |String
     */
    public $IssueDate;

    /**
     * @var |String
     */
    public $DocumentDescription;

    /**
     * @var \Bulut\eFaturaUBL\IssuerParty
     */
    public $IssuerParty;

}