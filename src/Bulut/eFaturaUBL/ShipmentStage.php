<?php

namespace Bulut\eFaturaUBL;


class ShipmentStage
{
    /**
     * @var |Bulut|eFaturaUBL|TransportMeans
     */
    public $TransportMeans;

    /**
     * @var |Bulut|eFaturaUBL|DriverPerson Array
     */
    public $DriverPerson;

    /**
     * @var |String
     */
    public $TransportModeCode;
}