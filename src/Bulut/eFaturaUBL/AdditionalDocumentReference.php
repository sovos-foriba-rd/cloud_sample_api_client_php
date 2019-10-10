<?php

namespace Bulut\eFaturaUBL;


class AdditionalDocumentReference
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
    public $DocumentTypeCode;

    /**
     * @var |String
     */
    public $DocumentType;

    /**
     * @var |Bulut|eFaturaUBL|Attachment
     */
    public $Attachment;

    /**
     * @var \Bulut\eFaturaUBL\IssuerParty
     */
    public $IssuerParty;

}