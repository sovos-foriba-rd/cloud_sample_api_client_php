<?php

namespace Bulut\ArchiveService;

class CancelInvoice
{
    public $soapAction = "cancelInvoice";
    public $methodName = "invoiceCancellationServiceRequestType";
    public $prefix = false;
    public $namespace = "http://fitcons.com/earchive/invoicecancellation";

    public $invoiceCancelInfoTypeList;

    /**
     * @param mixed $invoiceCancelInfoTypeList
     */
    public function setInvoiceCancelInfoTypeList($invoiceCancelInfoTypeList)
    {
        $this->invoiceCancelInfoTypeList = $invoiceCancelInfoTypeList;
    }

}