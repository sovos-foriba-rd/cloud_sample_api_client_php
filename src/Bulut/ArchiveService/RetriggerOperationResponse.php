<?php

namespace Bulut\ArchiveService;

class RetriggerOperationResponse
{
    public $Result;
    public $responseCode;
    public $responsedetail;

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
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return mixed
     */
    public function getResponsedetail()
    {
        return $this->responsedetail;
    }





}