<?php

namespace Bulut\ArchiveService;


class SendInvoiceResponse
{
    public $Detail;
    public $Result;
    public $preCheckErrorResults;
    public $preCheckSuccessResults;

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->Detail;
    }

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
    public function getPreCheckErrorResults()
    {
        return $this->preCheckErrorResults;
    }

    /**
     * @return mixed
     */
    public function getPreCheckSuccessResults()
    {
        return $this->preCheckSuccessResults;
    }


}