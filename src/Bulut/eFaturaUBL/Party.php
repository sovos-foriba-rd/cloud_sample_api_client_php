<?php

namespace Bulut\eFaturaUBL;


class Party
{
    /**
     * @var |String
     */
    public $EndpointID;

    /**
     * @var |String
     */
    public $WebsiteURI;

    /**
     * @var |Bulut|eFaturaUBL|PartyIdentification
     */
    public $PartyIdentification;

    /**
     * @var |Bulut|eFaturaUBL|PartyName
     */
    public $PartyName;

    /**
     * @var |Bulut|eFaturaUBL|PostalAddress
     */
    public $PostalAddress;

    /**
     * @var |Bulut|eFaturaUBL|PartyTaxScheme
     */
    public $PartyTaxScheme;

    /**
     * @var |Bulut|eFaturaUBL|Contact
     */
    public $Contact;

    /**
     * @var |Bulut|eFaturaUBL|PhysicalLocation
     */
    public $PhysicalLocation;

    /**
     * @var \Bulut\eFaturaUBL\PartyLegalEntity
     */
    public $PartyLegalEntity;

    /**
     * @var \Bulut\eFaturaUBL\AgentParty
     */
    public $AgentParty;


    /**
     * @var \Bulut\eFaturaUBL\Person
     */
    public $Person;
}