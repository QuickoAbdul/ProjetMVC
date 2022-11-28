<?php

class montage
{
    private $id_montage;
    private $nom_montage;
    private $image_montage;
    private $conseil_montage;

    /**
     * @param $id_montage
     * @param $nom_montage
     * @param $image_montage
     * @param $conseil_montage
     */
    public function __construct($id_montage, $nom_montage, $image_montage, $conseil_montage)
    {
        $this->id_montage = $id_montage;
        $this->nom_montage = $nom_montage;
        $this->image_montage = $image_montage;
        $this->conseil_montage = $conseil_montage;
    }

    /**
     * @return mixed
     */
    public function getIdMontage()
    {
        return $this->id_montage;
    }

    /**
     * @param mixed $id_montage
     */
    public function setIdMontage($id_montage)
    {
        $this->id_montage = $id_montage;
    }

    /**
     * @return mixed
     */
    public function getNomMontage()
    {
        return $this->nom_montage;
    }

    /**
     * @param mixed $nom_montage
     */
    public function setNomMontage($nom_montage)
    {
        $this->nom_montage = $nom_montage;
    }

    /**
     * @return mixed
     */
    public function getImageMontage()
    {
        return $this->image_montage;
    }

    /**
     * @param mixed $image_montage
     */
    public function setImageMontage($image_montage)
    {
        $this->image_montage = $image_montage;
    }

    /**
     * @return mixed
     */
    public function getConseilMontage()
    {
        return $this->conseil_montage;
    }

    /**
     * @param mixed $conseil_montage
     */
    public function setConseilMontage($conseil_montage)
    {
        $this->conseil_montage = $conseil_montage;
    }



}