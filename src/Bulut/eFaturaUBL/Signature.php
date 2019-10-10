<?php

namespace Bulut\eFaturaUBL;


class Signature
{
    /**
     * @var |String
     */
    public $ID;

    /**
     * @var |Bulut|eFaturaUBL|SignatoryParty
     */
    public $SignatoryParty;

    /**
     * @var |Bulut|eFaturaUBL|DigitalSignatureAttachment
     */
    public $DigitalSignatureAttachment;
}