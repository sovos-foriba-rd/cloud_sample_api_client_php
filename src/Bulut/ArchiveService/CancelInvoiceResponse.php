<?php

namespace Bulut\ArchiveService;


class CancelInvoiceResponse
{
    public $Result;
    public $invoiceCancellation;

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @return mixed
     */
    public function getInvoiceCancellation()
    {
        return $this->invoiceCancellation;
    }


}