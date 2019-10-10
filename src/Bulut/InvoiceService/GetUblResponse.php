<?php

namespace Bulut\InvoiceService;


class GetUblResponse
{
    public $DocData;
    public $DocType;

    /**
     * @return mixed
     */
    public function getDocData()
    {
        return $this->DocData;
    }

    /**
     * @return mixed
     */
    public function getDocType()
    {
        return $this->DocType;
    }

    /**
     * @param mixed $DocType
     */
    public function setDocType($DocType)
    {
        $this->DocType = $DocType;
    }




}