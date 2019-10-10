<?php

namespace Bulut\eFaturaUBL;


class DespatchAdvice
{

    /**
     * @var |String
     */
    public $DespatchAdviceTypeCode;


    /**
     * @var |Bulut|eFaturaUBL|OrderReference
     */
    public $OrderReference;

    /**
     * @var |Bulut|eFaturaUBL|AdditionalDocumentReference
     */
    public $AdditionalDocumentReference;

    /**
     * @var |Bulut|eFaturaUBL|Signature
     */
    public $Signature;

    /**
     * @var |Bulut|eFaturaUBL|DespatchSupplierParty
     */
    public $DespatchSupplierParty;

    /**
     * @var |Bulut|eFaturaUBL|DeliveryCustomerParty
     */
    public $DeliveryCustomerParty;

    /**
     * @var |Bulut|eFaturaUBL|DespatchLine Array
     */
    public $DespatchLine;


}