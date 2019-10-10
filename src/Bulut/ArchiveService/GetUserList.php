<?php

namespace Bulut\ArchiveService;

class GetUserList
{
    public $soapAction = "getUserList";
    public $methodName = "getUserListRequest";
    public $prefix = true;
    public $namespace = "http:/fitcons.com/earchive/getuserlist";


    public $vknTckn;

    /**
     * @param mixed $vknTckn
     */
    public function setVknTckn($vknTckn)
    {
        $this->vknTckn = $vknTckn;
    }


}