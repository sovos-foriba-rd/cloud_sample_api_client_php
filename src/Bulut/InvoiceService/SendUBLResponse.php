<?php

namespace Bulut\InvoiceService;


class SendUBLResponse
{
    public $EnvUUID;
    public $UUID;
    public $ID;
    public $CustInvID;

    /**
     * @return mixed
     */
    public function getEnvUUID()
    {
        return $this->EnvUUID;
    }

    /**
     * @return mixed
     */
    public function getUUID()
    {
        return $this->UUID;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return mixed
     */
    public function getCustInvID()
    {
        return $this->CustInvID;
    }


}