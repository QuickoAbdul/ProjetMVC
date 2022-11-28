<?php

class categorie
{
    private $id_categorire;
    private $designation;

    /**
     * @param $id_categorire
     * @param $designation
     */
    public function __construct($id_categorire, $designation)
    {
        $this->id_categorire = $id_categorire;
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getIdCategorire()
    {
        return $this->id_categorire;
    }

    /**
     * @param mixed $id_categorire
     */
    public function setIdCategorire($id_categorire)
    {
        $this->id_categorire = $id_categorire;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }


}