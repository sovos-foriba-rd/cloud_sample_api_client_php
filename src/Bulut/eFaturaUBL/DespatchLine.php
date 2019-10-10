<?php

namespace Bulut\eFaturaUBL;


class DespatchLine
{
    /**
     * @var |String
     */
    public $ID;

    /**
     * @var |Array (val = string, attrs = [unitCode="C62"] )
     */
    public $DeliveredQuantity;

    /**
     * @var |Array (val = string, attrs = [unitCode="C62"] )
     */
    public $OutstandingQuantity;

    /**
     * @var |String
     */
    public $OutstandingReason;

    /**
     * @var |Bulut|eFaturaUBL|OrderLineReference
     */
    public $OrderLineReference;

    /**
     * @var |Bulut|eFaturaUBL|Item
     */
    public $Item;

    /**
     * @var |Bulut|eFaturaUBL|Shipment
     */
    public $Shipment;
}