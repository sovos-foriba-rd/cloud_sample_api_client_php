<?php

namespace Bulut\ArchiveService;


class invoiceCancellation
{
    public $code;
    public $message;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }


}