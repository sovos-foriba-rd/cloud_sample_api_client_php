<?php

namespace Bulut\eFaturaUBL;


class Delivery
{
    /**
     * @var |String
     */
    public $ActualDeliveryDate;

    /**
     * @var |String
     */
    public $ActualDeliveryTime;

    /**
     * @var |Bulut|eFaturaUBL|CarrierParty
     */
    public $CarrierParty;

    /**
     * @var |Bulut|eFaturaUBL|Despatch
     */
    public $Despatch;

    /**
     * @var \Bulut\eFaturaUBL\DeliveryAddress
     */
    public $DeliveryAddress;

    /**
     * @var \Bulut\eFaturaUBL\DeliveryTerms
     */
    public $DeliveryTerms;

    /**
     * @var \Bulut\eFaturaUBL\Shipment
     */
    public $Shipment;
}