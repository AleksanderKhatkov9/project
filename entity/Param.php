<?php

class Param
{
    private $para_Id;

    /**
     * Param constructor.
     * @param $para_Id
     */
//    public function __construct($para_Id)
//    {
//        $this->para_Id = $para_Id;
//    }

    /**
     * @return mixed
     */
    public function getParaId()
    {
        return $this->para_Id;
    }

    /**
     * @param mixed $para_Id
     */
    public function setParaId($para_Id)
    {
        $this->para_Id = $para_Id;
    }

}